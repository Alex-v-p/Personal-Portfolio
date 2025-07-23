@props([
    'skills' => null,
])

<div class="w-full mb-4">
    <div class="flex items-center space-x-2 bg-white dark:bg-[#1E1E1F] py-2 rounded-xl">
        <input
            type="text"
            wire:model.lazy="search"
            placeholder="Search..."
            class="w-full px-4 py-2 rounded-lg bg-gray-100 text-gray-900 dark:bg-[#2A2A2A] dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
        >


        <select
            wire:model.lazy="skillFilter"
            class="px-3 py-2 rounded-lg bg-gray-100 text-gray-900 dark:bg-[#2A2A2A] dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            <option value="">All Skills</option>
            @foreach($skills as $skill)
                <option value="{{ $skill->name }}">{{ $skill->name }}</option>
            @endforeach
        </select>
    </div>
</div>
