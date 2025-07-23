<div>
    <h2 class="text-xl font-bold">Courses Taken</h2>

    <x-custom.search-bar :skills="$skills"/>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach($courses as $course)
            <div id="course-{{ $course->id }}-{{ rand(1000, 9999) }}" class="course-item">
                <x-custom.course-box :course="$course"></x-custom.course-box>
            </div>
        @endforeach
    </div>
</div>
