@props(['description'])


<div class="bg-gray-200 text-black px-3 py-1 rounded-full text-sm" title="{{ $description }}">
    {{ $slot }}
</div>
