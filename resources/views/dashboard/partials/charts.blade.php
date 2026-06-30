<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Income vs Expense Trend -->
    <x-dashboard.widget-card>
        <x-dashboard.section-header title="Income vs Expense (6 Months)" />
        @if($chartIncomeVsExpense['hasData'])
            <div class="relative h-64 w-full">
                <canvas id="incomeExpenseChart"></canvas>
            </div>
        @else
            <x-dashboard.empty-state message="No data available for the last 6 months." />
        @endif
    </x-dashboard.widget-card>

    <!-- Expense by Category -->
    <x-dashboard.widget-card>
        <x-dashboard.section-header title="Expense by Category (This Month)" />
        @if($chartExpenseByCategory['hasData'])
            <div class="relative h-64 w-full flex justify-center">
                <canvas id="expenseCategoryChart"></canvas>
            </div>
        @else
            <x-dashboard.empty-state message="No expenses recorded this month." />
        @endif
    </x-dashboard.widget-card>
</div>
