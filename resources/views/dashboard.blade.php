<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            @if(!$hasTransactions)
                <!-- Empty State -->
                <x-dashboard.empty-state 
                    size="large"
                    title="Welcome to FinSight!" 
                    message="You haven't recorded any transactions yet. Get started by adding your first income or expense.">
                    <x-slot name="icon">
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </x-slot>
                    <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-8">
                        <div class="w-full sm:w-auto">
                            <x-dashboard.action-button href="{{ route('income.create') }}" type="primary">
                                + Add Income
                            </x-dashboard.action-button>
                        </div>
                        <div class="w-full sm:w-auto">
                            <x-dashboard.action-button href="{{ route('expense.create') }}" type="secondary">
                                + Add Expense
                            </x-dashboard.action-button>
                        </div>
                    </div>
                </x-dashboard.empty-state>
            @endif

            @if($hasTransactions)
                <!-- Summary Cards -->
                @include('dashboard.partials.summary-cards')

                <!-- Dashboard Layout Improvement: 2-Column Grid for Widgets -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
                    <!-- Left Column (Main) -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Charts -->
                        @include('dashboard.partials.charts')

                        <!-- Recent Transactions Widget -->
                        @include('dashboard.partials.recent-transactions')
                    </div>

                    <!-- Right Column (Sidebar) -->
                    <div class="space-y-6">
                        <!-- Quick Actions Section -->
                        @include('dashboard.partials.quick-actions')

                        <!-- Upcoming Subscriptions Widget -->
                        @include('dashboard.partials.subscription-widget')
                    </div>
                </div>
            @endif

        </div>
    </div>

    @if($hasTransactions)
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if($chartIncomeVsExpense['hasData'])
            const ctxIncomeExpense = document.getElementById('incomeExpenseChart').getContext('2d');
            new Chart(ctxIncomeExpense, {
                type: 'line',
                data: {
                    labels: {!! json_encode($chartIncomeVsExpense['labels']) !!},
                    datasets: [
                        {
                            label: 'Income',
                            data: {!! json_encode($chartIncomeVsExpense['income']) !!},
                            borderColor: '#22C55E',
                            backgroundColor: 'rgba(34, 197, 94, 0.1)',
                            tension: 0.4,
                            fill: true
                        },
                        {
                            label: 'Expense',
                            data: {!! json_encode($chartIncomeVsExpense['expense']) !!},
                            borderColor: '#EF4444',
                            backgroundColor: 'rgba(239, 68, 68, 0.1)',
                            tension: 0.4,
                            fill: true
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { position: 'bottom' } },
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
            @endif

            @if($chartExpenseByCategory['hasData'])
            const ctxCategory = document.getElementById('expenseCategoryChart').getContext('2d');
            new Chart(ctxCategory, {
                type: 'doughnut',
                data: {
                    labels: {!! json_encode($chartExpenseByCategory['labels']) !!},
                    datasets: [{
                        data: {!! json_encode($chartExpenseByCategory['data']) !!},
                        backgroundColor: [
                            '#3B82F6', '#EF4444', '#10B981', '#F59E0B', '#6366F1', '#8B5CF6', '#EC4899', '#14B8A6'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { position: 'right' } },
                    cutout: '70%'
                }
            });
            @endif
        });
    </script>
    @endif
</x-app-layout>
