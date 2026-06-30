<x-dashboard.widget-card>
    <x-dashboard.section-header title="Recent Transactions" />
    @if($recentTransactions->isEmpty())
        <x-dashboard.empty-state message="No recent transactions found." />
    @else
        <div class="overflow-x-auto">
            <table class="w-full text-left whitespace-nowrap">
                <thead>
                    <tr class="text-gray-500 dark:text-gray-400 text-sm border-b border-gray-200 dark:border-gray-700">
                        <th class="pb-3 font-semibold">Date</th>
                        <th class="pb-3 font-semibold">Category</th>
                        <th class="pb-3 font-semibold">Description</th>
                        <th class="pb-3 font-semibold text-right">Amount</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                    @foreach($recentTransactions as $transaction)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                            <td class="py-3 text-gray-900 dark:text-gray-100">
                                {{ $transaction->transaction_date->format('M d, Y') }}
                            </td>
                            <td class="py-3 text-gray-900 dark:text-gray-100">
                                {{ $transaction->category->name ?? '-' }}
                            </td>
                            <td class="py-3 text-gray-500 dark:text-gray-400">
                                {{ $transaction->description ?? '-' }}
                            </td>
                            <td class="py-3 text-right font-bold {{ $transaction->type === 'income' ? 'text-success' : 'text-danger' }}">
                                {{ $transaction->type === 'income' ? '+' : '-' }}${{ number_format($transaction->amount, 2) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</x-dashboard.widget-card>
