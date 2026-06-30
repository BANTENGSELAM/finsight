@props(['title', 'value', 'valueClass' => 'text-gray-900 dark:text-white', 'iconClass' => ''])
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl border border-gray-100 dark:border-gray-700 p-6 flex flex-col">
    <div class="flex justify-between items-start mb-4">
        <div>
            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $title }}</p>
            <h3 class="text-3xl font-bold mt-1 {{ $valueClass }}">{{ $value }}</h3>
        </div>
        <div class="p-3 rounded-lg dark:bg-gray-700 {{ $iconClass }}">
            {{ $slot }}
        </div>
    </div>
</div>
