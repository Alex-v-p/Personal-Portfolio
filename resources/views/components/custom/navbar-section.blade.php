@props([
    'featured-link' => null,
])

<div
    x-data="{
    showMenu: false,
    showProjects: false,
    isMobile: window.innerWidth < 768,

    init() {
        const mediaQuery = window.matchMedia('(min-width: 768px)');
        const updateIsMobile = () => {
            this.isMobile = !mediaQuery.matches;
            // Reset menu state based on screen
            this.showMenu = !this.isMobile;
        };
        mediaQuery.addEventListener('change', updateIsMobile);
        updateIsMobile(); // initialize on load
    }
}"
    class="flex flex-col flex-1 md:flex-1 w-full h-full pt-2 p-1 rounded-lg border border-[#A880A2] bg-white dark:bg-[#1E1E1F]"
>
    <!-- Mobile toggle button -->
    <div class="flex justify-center md:hidden px-3 hover:text-[#c79bc4] cursor-pointer" @click="showMenu = !showMenu">
        <button class="text-[#A880A2] focus:outline-none">
            <x-heroicon-o-bars-3 class="w-6 h-6" />
        </button>
    </div>

    <!-- Section Content (with animated height only on small screens) -->
    <div
        x-ref="menu"
        x-bind:style="isMobile ? (showMenu ? 'max-height:' + $refs.menu.scrollHeight + 'px' : 'max-height: 0px') : ''"
        class="flex flex-col flex-1 overflow-hidden md:overflow-visible transition-all duration-500 ease-in-out"
    >
        <div class="text-center md:text-start text-sm space-y-2 text-black dark:text-white px-3 pt-4">
            <!-- About -->
            <a href="/#about" class="flex items-center space-x-2 hover:underline w-full">
                <x-heroicon-o-user class="w-5 h-5" />
                <span>About me</span>
            </a>

            <!-- Projects (Expandable) -->
            <div class="space-y-1">
                <button
                    @click="showProjects = !showProjects"
                    class="flex items-center justify-between w-full hover:underline"
                >
                    <div class="flex items-center space-x-2">
                        <x-heroicon-o-document-chart-bar class="w-5 h-5" />
                        <span>Projects</span>
                    </div>
                    <x-heroicon-o-chevron-down
                        class="w-4 h-4 transition-transform duration-200"
                        x-bind:class="showProjects ? 'rotate-180' : ''"
                    />
                </button>

                <div x-show="showProjects" x-cloak x-transition class="ml-7 space-y-1 pt-1">
                    <a href="/myProjects" class="block hover:underline">All Projects</a>
                    {{ $featured }}
                </div>
            </div>

            <!-- Courses -->
            <a href="/myCourses" class="flex items-center space-x-2 hover:underline w-full">
                <x-heroicon-o-academic-cap class="w-5 h-5" />
                <span>Courses</span>
            </a>

            <!-- Languages -->
            <a href="/#language" class="flex items-center space-x-2 hover:underline w-full">
                <x-heroicon-o-language class="w-5 h-5" />
                <span>Languages</span>
            </a>

            <!-- Contact -->
            <a href="/#contact" class="flex items-center space-x-2 hover:underline w-full">
                <x-heroicon-o-envelope class="w-5 h-5" />
                <span>Contact</span>
            </a>
        </div>

        <!-- Resume Buttons -->
        <div class="flex flex-col justify-end flex-1 px-3 pt-6 pb-4 space-y-2">
            <a
                href="{{ $cvLink }}"
                target="_blank"
                class="w-full inline-flex justify-center items-center px-4 py-2 text-sm bg-[#A880A2] text-white rounded-md hover:bg-[#c79bc4] transition"
            >
                <x-heroicon-o-eye class="w-4 h-4 mr-2" /> View CV
            </a>
            <a
                href="{{ $cvLink }}"
                download
                class="w-full inline-flex justify-center items-center px-4 py-2 text-sm bg-[#A880A2] text-white rounded-md hover:bg-[#c79bc4] transition"
            >
                <x-heroicon-o-arrow-down-tray class="w-4 h-4 mr-2" /> Download CV
            </a>
        </div>
    </div>
</div>
