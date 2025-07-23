@props([
    'project' => null,
    'skills'=> null
])

<div x-data="{ showAll: false }">
    <div class="bg-white text-black dark:bg-[#2A2A2A] dark:text-white rounded-xl space-y-3 shadow-md dark:shadow-none">
        <a href="/project/{{ $project['id'] }}">
            <div
                class="h-32 rounded-t-xl bg-gray-200 dark:bg-gray-600 bg-center bg-no-repeat bg-cover"
                style="background-image: url('{{ asset('storage/' . $project['imageLocation']) }}');">
            </div>
        </a>

        <div class="p-4">
            <a href="/project/{{ $project['id'] }}">
                <h3 class="font-semibold hover:underline">{{ $project['name'] }}</h3>
            </a>

            <div class="flex flex-wrap gap-2">
                @foreach($skills as $i => $skill)
                    <div x-show="showAll || {{ $i < 5 ? 'true' : 'false' }}" x-cloak>
                        <x-custom.skill-element :description="$skill->description">
                            {{ $skill->name }}
                        </x-custom.skill-element>
                    </div>
                @endforeach
                @if(count($skills) > 5)
                    <button
                        class="text-xs text-blue-600 dark:text-blue-400 underline mt-1"
                        @click="showAll = !showAll"
                    >
                        <span x-show="!showAll">+{{ count($skills) - 5 }} more</span>
                        <span x-show="showAll">Show less</span>
                    </button>
                @endif
            </div>

            <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">{{ $project['tinyDescription'] }}</p>
            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $project->start_date }} - {{ $project->end_date }}</p>

            <a href="/project/{{ $project['id'] }}">
                <button class="text-sm text-black dark:text-white underline flex items-center gap-1">more →</button>
            </a>
        </div>
    </div>
</div>
