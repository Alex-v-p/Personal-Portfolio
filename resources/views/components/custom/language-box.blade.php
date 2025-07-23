@props([
    'language',
])

<div class="flex justify-between bg-gray-200 px-3 py-2 rounded text-black dark:bg-[#2A2A2A] dark:text-white">
    <span>{{ $language->name }}</span>
    <span class="font-semibold">Level: {{ $language->level }}</span>
</div>
