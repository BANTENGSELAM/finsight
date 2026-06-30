<x-dashboard.widget-card>
    <x-dashboard.section-header title="Quick Actions" />
    <div class="flex flex-col gap-3">
        <x-dashboard.action-button href="{{ route('income.create') }}" type="primary">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Add Income
        </x-dashboard.action-button>
        <x-dashboard.action-button href="{{ route('expense.create') }}" type="secondary">
            <svg class="w-5 h-5 mr-2 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
            Add Expense
        </x-dashboard.action-button>
        <x-dashboard.action-button href="#" type="secondary">
            <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            Add Subscription
        </x-dashboard.action-button>
    </div>
</x-dashboard.widget-card>
