@props(['course' => null])

<div x-data="{ showAll: false }">
    <div class="bg-white text-black dark:bg-[#2A2A2A] dark:text-white rounded-xl p-4 space-y-2 shadow-md dark:shadow-none">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold">{{ $course->title }}</h3>
            <div class="text-black">
                @if($course->status == 'onGoing')
                    <span class="bg-yellow-400 text-xs px-2 py-1 rounded-full">{{ $course->status }}</span>
                @elseif($course->status == 'complete')
                    <span class="bg-green-400 text-xs px-2 py-1 rounded-full">{{ $course->status }}</span>
                @else
                    <span class="bg-red-400 text-xs px-2 py-1 rounded-full">{{ $course->status }}</span>
                @endif
            </div>
        </div>

        <p class="text-sm">{{ $course->description }}</p>

        <div class="flex flex-wrap gap-2">
            @foreach($course->courseSkills as $i => $courseSkill)
                <div x-show="showAll || {{ $i < 5 ? 'true' : 'false' }}" x-cloak>
                    <x-custom.skill-element :description="$courseSkill->skill->description">
                        {{ $courseSkill->skill->name }}
                    </x-custom.skill-element>
                </div>
            @endforeach

            @if(count($course->courseSkills) > 5)
                <button
                    class="text-xs text-blue-600 dark:text-blue-400 underline mt-1"
                    @click="showAll = !showAll"
                >
                    <span x-show="!showAll">+{{ count($course->courseSkills) - 5 }} more</span>
                    <span x-show="showAll">Show less</span>
                </button>
            @endif
        </div>

        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $course['institution']->name }}</p>
        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $course->start_date }} - {{ $course->end_date }}</p>
    </div>
</div>
