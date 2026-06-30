@props(['title' => null, 'message', 'icon' => null, 'size' => 'small'])
@if($size === 'large')
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-2xl border border-gray-100 dark:border-gray-700 p-10 text-center">
    @if($icon)
        <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-full bg-blue-50 dark:bg-gray-700 text-blue-500 mb-6">
            {{ $icon }}
        </div>
    @endif
    @if($title)
        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ $title }}</h3>
    @endif
    <p class="text-gray-500 dark:text-gray-400 max-w-md mx-auto mb-8">{{ $message }}</p>
    {{ $slot }}
</div>
@else
<div class="flex items-center justify-center h-64 text-gray-500 text-center">
    {{ $message }}
</div>
@endif
