<x-dashboard.widget-card>
    <x-dashboard.section-header title="Upcoming Subscriptions" />
    @if($upcomingSubscriptions->isEmpty())
        <x-dashboard.empty-state message="No upcoming subscriptions." />
    @else
        <div class="space-y-4">
            @foreach($upcomingSubscriptions as $subscription)
                <div class="flex justify-between items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700/50 border border-gray-100 dark:border-gray-600">
                    <div>
                        <p class="font-semibold text-gray-900 dark:text-white">{{ $subscription->name }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Due: {{ $subscription->next_due_date->format('M d, Y') }}</p>
                    </div>
                    <div class="font-bold text-gray-900 dark:text-white">
                        ${{ number_format($subscription->amount, 2) }}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</x-dashboard.widget-card>
