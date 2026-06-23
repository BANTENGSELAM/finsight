<?php

namespace App\Services;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class TransactionService
{
    // ─────────────────────────────────────────────────────────────────────────
    // Income Methods
    // ─────────────────────────────────────────────────────────────────────────

    /**
     * Get paginated incomes for a user, optionally filtered by a search term.
     */
    public function getIncomes(User $user, ?string $search = null): LengthAwarePaginator
    {
        return $user->transactions()
            ->with('category')
            ->where('type', 'income')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('description', 'like', "%{$search}%")
                      ->orWhereHas('category', function ($qc) use ($search) {
                          $qc->where('name', 'like', "%{$search}%");
                      });
                });
            })
            ->orderByDesc('transaction_date')
            ->orderByDesc('id')
            ->paginate(15)
            ->withQueryString();
    }

    /**
     * Get all income categories for a user.
     */
    public function getIncomeCategories(User $user): Collection
    {
        return $user->categories()->where('type', 'income')->get();
    }

    /**
     * Create a new income transaction.
     */
    public function createIncome(User $user, array $data): Transaction
    {
        $data['type'] = 'income';
        return $user->transactions()->create($data);
    }

    /**
     * Update an existing income transaction.
     */
    public function updateIncome(Transaction $transaction, array $data): bool
    {
        return $transaction->update($data);
    }

    /**
     * Delete an income transaction.
     */
    public function deleteIncome(Transaction $transaction): bool|null
    {
        return $transaction->delete();
    }

    // ─────────────────────────────────────────────────────────────────────────
    // Expense Methods
    // ─────────────────────────────────────────────────────────────────────────

    /**
     * Get paginated expenses for a user, optionally filtered by a search term.
     */
    public function getExpenses(User $user, ?string $search = null): LengthAwarePaginator
    {
        return $user->transactions()
            ->with('category')
            ->where('type', 'expense')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('description', 'like', "%{$search}%")
                      ->orWhereHas('category', function ($qc) use ($search) {
                          $qc->where('name', 'like', "%{$search}%");
                      });
                });
            })
            ->orderByDesc('transaction_date')
            ->orderByDesc('id')
            ->paginate(15)
            ->withQueryString();
    }

    /**
     * Get all expense categories for a user.
     */
    public function getExpenseCategories(User $user): Collection
    {
        return $user->categories()->where('type', 'expense')->get();
    }

    /**
     * Create a new expense transaction.
     */
    public function createExpense(User $user, array $data): Transaction
    {
        $data['type'] = 'expense';
        return $user->transactions()->create($data);
    }

    /**
     * Update an existing expense transaction.
     */
    public function updateExpense(Transaction $transaction, array $data): bool
    {
        return $transaction->update($data);
    }

    /**
     * Delete an expense transaction.
     */
    public function deleteExpense(Transaction $transaction): bool|null
    {
        return $transaction->delete();
    }
}

