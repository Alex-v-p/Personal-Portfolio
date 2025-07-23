@if($showWelcomePopup)
    <div x-data="{ open: true }">
        <template x-if="open">
            <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg text-center max-w-md w-full">
                    <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Hey there, welcome!</h2>
                    <p class="text-gray-700 dark:text-gray-300">
                        I’m Alex van Poppel, a Software Development student at Thomas More in Geel. <br><br>
                        This portfolio is a glimpse into the projects I've worked on, the skills I’ve picked up, and the kind of developer I’m becoming. <br><br>
                        Feel free to look around, and thanks for stopping by!
                    </p>
                    <button @click="open = false" class="mt-4 px-4 py-2 bg-[#A880A2] text-white rounded hover:bg-[#c79bc4] transition">
                        Go!
                    </button>
                </div>
            </div>
        </template>
    </div>
@endif


<div id="content" class="h-full space-y-12 text-black dark:text-white">
    <!-- About me -->
    <section class="space-y-4" id="about">
        <h2 class="text-xl font-bold heading text-black dark:text-white" data-section="about">
            <span class="border-b border-[#A880A2] dark:border-[#A880A2] transition-all duration-300 block w-fit">
                About me
            </span>
        </h2>

        <div class="text-sm leading-relaxed text-black dark:text-white">
            {!! $description !!}
        </div>
    </section>

    <!-- Featured Project -->
    <section class="space-y-4" id="project">
        <h2 class="text-lg font-semibold heading text-black dark:text-white" data-section="project">
            <span class="border-b border-[#A880A2] dark:border-[#A880A2] transition-all duration-300 block w-fit">
                Featured Project
            </span>
        </h2>
        <x-custom.project-box :project="$featuredProject" :skills="$uniqueSkills"/>
        <a href="myProjects">
            <button class="text-sm underline text-black dark:text-white">See all →</button>
        </a>
    </section>

    <!-- Courses taken -->
    <section class="space-y-4" id="courses">
        <h2 class="text-lg font-semibold heading text-black dark:text-white" data-section="courses">
            <span class="border-b border-[#A880A2] dark:border-[#A880A2] transition-all duration-300 block w-fit">
                Courses taken
            </span>
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach($courses as $course)
                <x-custom.course-box :course="$course"/>
            @endforeach
        </div>
        <a href="/myCourses">
            <button class="text-sm underline text-black dark:text-white">See all →</button>
        </a>
    </section>

    <!-- Languages -->
    <section class="space-y-4" id="language">
        <h2 class="text-lg font-semibold heading text-black dark:text-white" data-section="language">
        <span class="border-b border-[#A880A2] dark:border-[#A880A2] transition-all duration-300 block w-fit">
            Languages
        </span>
        </h2>
        <div class="space-y-2">
            @foreach($languages as $language)
                <x-custom.language-box :language="$language" />
            @endforeach
        </div>
    </section>


    <!-- Contact -->
    @livewire('contact-form')

</div>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sections = document.querySelectorAll('section');
        const headings = document.querySelectorAll('.heading');

        const options = {
            root: null,
            rootMargin: '0px',
            threshold: Array.from({ length: 101 }, (_, i) => i / 100)
        };

        const visibilityMap = new Map();

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                visibilityMap.set(entry.target.id, entry.intersectionRatio);
            });

            // Find the section with the highest visibility
            let mostVisibleId = null;
            let maxRatio = 0;

            visibilityMap.forEach((ratio, id) => {
                if (ratio > maxRatio) {
                    maxRatio = ratio;
                    mostVisibleId = id;
                }
            });

            headings.forEach(heading => {
                const span = heading.querySelector('span');
                if (heading.dataset.section === mostVisibleId) {
                    span.classList.add('border-b-4');
                } else {
                    span.classList.remove('border-b-4');
                }
            });
        }, options);

        sections.forEach(section => observer.observe(section));
    });

</script>
