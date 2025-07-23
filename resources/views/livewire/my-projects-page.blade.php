<div>
    <h2 class="text-xl font-bold">My projects</h2>

    <x-custom.search-bar :skills="$skills"/>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach($projects as $project)
            @php
                $skills = $project->sections->flatMap(function ($section) {
                    return $section->sectionSkills->pluck('skill');
                });
            @endphp

            <div id="course-{{ $project->id }}-{{ rand(1000, 9999) }}" class="project-item">
                <x-custom.project-box :project="$project" :skills="$skills" />
            </div>
        @endforeach
    </div>

</div>
