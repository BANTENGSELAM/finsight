@props(['href', 'type' => 'primary'])
<a href="{{ $href }}">
    @if($type === 'primary')
        <x-primary-button class="w-full justify-center py-3">
            {{ $slot }}
        </x-primary-button>
    @else
        <x-secondary-button class="w-full justify-center py-3">
            {{ $slot }}
        </x-secondary-button>
    @endif
</a>
