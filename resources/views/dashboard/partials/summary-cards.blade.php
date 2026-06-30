<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <x-dashboard.stat-card title="Current Balance" value="${{ number_format($currentBalance, 2) }}" iconClass="bg-blue-50 text-primary">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
    </x-dashboard.stat-card>

    <x-dashboard.stat-card title="Monthly Income" value="+${{ number_format($monthlyIncome, 2) }}" valueClass="text-success" iconClass="bg-green-50 text-success">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </x-dashboard.stat-card>

    <x-dashboard.stat-card title="Monthly Expense" value="-${{ number_format($monthlyExpense, 2) }}" valueClass="text-danger" iconClass="bg-red-50 text-danger">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
    </x-dashboard.stat-card>

    <x-dashboard.stat-card title="Net Cash Flow" value="{{ $netCashFlow >= 0 ? '+' : '-' }}${{ number_format(abs($netCashFlow), 2) }}" valueClass="{{ $netCashFlow >= 0 ? 'text-success' : 'text-danger' }}" iconClass="{{ $netCashFlow >= 0 ? 'bg-green-50 text-success' : 'bg-red-50 text-danger' }}">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
    </x-dashboard.stat-card>
</div>
