<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;

class DashboardService
{
    /**
     * Get all necessary data for the dashboard.
     */
    public function getDashboardData(User $user): array
    {
        $now = Carbon::now();
        
        $totalIncome = $user->transactions()->where('type', 'income')->sum('amount');
        $totalExpense = $user->transactions()->where('type', 'expense')->sum('amount');
        $currentBalance = $totalIncome - $totalExpense;

        $monthlyIncome = $user->transactions()
            ->where('type', 'income')
            ->whereMonth('transaction_date', $now->month)
            ->whereYear('transaction_date', $now->year)
            ->sum('amount');

        $monthlyExpense = $user->transactions()
            ->where('type', 'expense')
            ->whereMonth('transaction_date', $now->month)
            ->whereYear('transaction_date', $now->year)
            ->sum('amount');

        $netCashFlow = $monthlyIncome - $monthlyExpense;

        $hasTransactions = $user->transactions()->exists();

        // Chart 1: Income vs Expense (Last 6 Months)
        $sixMonthsAgo = Carbon::now()->subMonths(5)->startOfMonth();
        $trendTransactions = $user->transactions()
            ->selectRaw('DATE_FORMAT(transaction_date, "%Y-%m") as month, type, SUM(amount) as total')
            ->where('transaction_date', '>=', $sixMonthsAgo)
            ->groupBy('month', 'type')
            ->get();

        $monthsLabels = [];
        $incomeTrend = [];
        $expenseTrend = [];

        for ($i = 5; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $monthKey = $month->format('Y-m');
            $monthsLabels[] = $month->format('M Y');
            
            $incomeTrend[] = (float) $trendTransactions->where('month', $monthKey)->where('type', 'income')->sum('total');
            $expenseTrend[] = (float) $trendTransactions->where('month', $monthKey)->where('type', 'expense')->sum('total');
        }

        $chartIncomeVsExpense = [
            'labels' => $monthsLabels,
            'income' => $incomeTrend,
            'expense' => $expenseTrend,
            'hasData' => array_sum($incomeTrend) > 0 || array_sum($expenseTrend) > 0,
        ];

        // Chart 2: Expense by Category (Current Month)
        $expensesByCategoryRaw = $user->transactions()
            ->where('type', 'expense')
            ->whereMonth('transaction_date', $now->month)
            ->whereYear('transaction_date', $now->year)
            ->with('category')
            ->selectRaw('category_id, SUM(amount) as total')
            ->groupBy('category_id')
            ->get();

        $chartExpenseByCategory = [
            'labels' => $expensesByCategoryRaw->map(fn($t) => $t->category->name ?? 'Uncategorized')->toArray(),
            'data' => $expensesByCategoryRaw->map(fn($t) => (float) $t->total)->toArray(),
            'hasData' => $expensesByCategoryRaw->isNotEmpty(),
        ];

        // Recent Transactions Widget
        $recentTransactions = $user->transactions()
            ->with('category')
            ->orderByDesc('transaction_date')
            ->orderByDesc('id')
            ->take(10)
            ->get();

        // Upcoming Subscriptions Widget
        $upcomingSubscriptions = $user->subscriptions()
            ->where('is_active', true)
            ->where('next_due_date', '>=', Carbon::today())
            ->orderBy('next_due_date', 'asc')
            ->take(5)
            ->get();

        return compact(
            'currentBalance',
            'monthlyIncome',
            'monthlyExpense',
            'netCashFlow',
            'hasTransactions',
            'chartIncomeVsExpense',
            'chartExpenseByCategory',
            'recentTransactions',
            'upcomingSubscriptions'
        );
    }
}
