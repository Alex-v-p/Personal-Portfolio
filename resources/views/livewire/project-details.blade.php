<div class="text-black dark:text-white space-y-8">
    <!-- Header -->
    <div>
        <div class=" mb-4">
            <h1 class="text-3xl font-bold">
                {{ $project->name }}
            </h1>
            <p class="ml-1 text-md text-gray-600 dark:text-gray-400">{{ $project->start_date }} - {{ $project->end_date }}</p>
        </div>

        <div class="flex flex-wrap">
            @foreach ($project->sections as $section)
                @foreach ($section->sectionSkills as $sectionSkill)
                    <div class="p-1">
                        <x-custom.skill-element :description="$sectionSkill->skill->description">
                            {{ $sectionSkill->skill->name }}
                        </x-custom.skill-element>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>

    @foreach ($project->sections as $index => $section)
        <div class="mb-12">
            <h2 class="text-xl font-semibold mb-4">{{ $section->title }}</h2>
            @php
                $image = optional($section->sectionImages->first())->image;
            @endphp

            @if ($image && $image->imageLocation)
                <div class="grid md:grid-cols-2 gap-6 items-stretch">
                    @if ($index % 2 === 0)
                        <!-- Text Left, Image Right -->
                        <div class="space-y-4 text-sm leading-relaxed h-full">
                            <p>{!! $section->content !!}</p>
                        </div>
                        <div class="w-full h-full overflow-hidden flex items-center">
                            <img src="{{ asset('storage/' . $image->imageLocation) }}"
                                 alt="Project Image"
                                 class="w-full h-auto max-h-full object-cover rounded-lg" />
                        </div>
                    @else
                        <!-- Image Left, Text Right -->
                        <div class="w-full h-full overflow-hidden flex items-center">
                            <img src="{{ asset('storage/' . $image->imageLocation) }}"
                                 alt="Project Image"
                                 class="w-full h-auto max-h-full object-cover rounded-lg" />
                        </div>
                        <div class="space-y-4 text-sm leading-relaxed h-full">
                            <p>{!! $section->content !!}</p>
                        </div>
                    @endif
                </div>
            @else
                <!-- Full-width Text (no image) -->
                <div class="space-y-4 text-sm leading-relaxed">
                    <p>{!! $section->content !!}</p>
                </div>
            @endif

            @if($section->extra_paragraph)
                <div class="text-sm leading-relaxed mt-6">
                    <p>{{ $section->extra_paragraph }}</p>
                </div>
            @endif
        </div>
    @endforeach

    <!-- Download Project ZIP Button -->
    @if($project->projectZipLocation === "")
        <div class="flex justify-end px-3 pb-4">
            <a
                class="w-full sm:w-auto inline-flex justify-center items-center px-4 py-2 text-sm bg-[#A880A2] text-white rounded-md hover:bg-[#c79bc4] transition"
            >
                <x-heroicon-o-arrow-down-tray class="w-4 h-4 mr-2" /> Coming soon
            </a>
        </div>
    @else
        <div class="flex justify-end px-3 pb-4">
            <a
                href="{{ asset('storage/' . $project->projectZipLocation) }}"
                download
                class="w-full sm:w-auto inline-flex justify-center items-center px-4 py-2 text-sm bg-[#A880A2] text-white rounded-md transition"
            >
                <x-heroicon-o-arrow-down-tray class="w-4 h-4 mr-2" /> Download
            </a>
        </div>
    @endif
</div>
