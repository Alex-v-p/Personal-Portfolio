<div class="w-full pb-2"
     x-data="{ collapsed: false, userToggled: false }"
     @scroll.window="
        if (window.scrollY === 0) {
            userToggled = false;
        }
        if (!userToggled) {
            collapsed = window.scrollY > 150;
        }">

    <div class="bg-white dark:bg-[#1E1E1F] p-1 rounded-lg border border-[#A880A2] dark:border-[#A880A2]">
        <!-- Collapsible content -->
        <div
            class="overflow-hidden transition-all duration-500 ease-in-out"
            :style="collapsed ? 'max-height: 190px' : 'max-height: 1000px'">
            <div class="flex flex-row md:flex-col items-center text-sm space-y-2">
                <div class="w-6/12 sm:w-4/12 md:w-auto p-5 md:p-0">
                    <div>
                        <div class="md:hidden">
                            <!-- Name -->
                            <div class="font-semibold text-black dark:text-white">{{ $aboutMeItem['name'] }}</div>

                            <!-- Title -->
                            <div class="bg-gray-200 text-black dark:bg-[#2A2A2A] px-2 py-1 text-xs dark:text-white rounded-md shadow-md dark:shadow-none">{{ $aboutMeItem['occupation'] }}</div>
                        </div>
                    </div>

                    <div class="flex flex-col items-start md:items-center">
                        <!-- Profile Image -->
                        <div class="pt-3">
                            <a href="/">
                                <div class="rounded-xl w-32 h-32 bg-gray-400 bg-center bg-no-repeat bg-cover border border-[#A880A2] dark:border-[#A880A2]"
                                     style="background-image: url('{{ asset('storage/' . $aboutMeItem['imageLocation']) }}');">
                                </div>
                            </a>
                        </div>

                        <!-- normal screen  -->
                        <div class="hidden md:flex flex-col items-center">
                            <!-- Name -->
                            <div class="font-semibold text-black dark:text-white">{{ $aboutMeItem['name'] }}</div>

                            <!-- Title -->
                            <div class="px-2">
                                <div class="bg-gray-200 text-black dark:bg-[#2A2A2A] px-2 py-1 text-xs dark:text-white rounded-md shadow-md dark:shadow-none text-left md:text-center xl:text-left">{{ $aboutMeItem['occupation'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-6/12 sm:w-8/12 md:w-10/12 px-5 md:px-0 pt-2">
                    <div class="flex flex-col justify-end md:block">
                        <ul class="space-y-4 text-sm text-black dark:text-white">
                            <li class="flex items-start gap-4">
                                <div class="w-full">
                                    <p class="font-semibold text-xs uppercase text-gray-500 dark:text-gray-400">Email</p>
                                    <a href="mailto:{{ $aboutMeItem['displayEmail'] }}" class="hover:underline">
                                        {{ $aboutMeItem['displayEmail'] }}
                                    </a>
                                </div>
                            </li>

                            <li class="flex items-start gap-4">
                                <div>
                                    <p class="font-semibold text-xs uppercase text-gray-500 dark:text-gray-400">Phone</p>
                                    <a href="tel:{{ $aboutMeItem['displayPhone'] }}" class="hover:underline">
                                        {{ $aboutMeItem['displayPhone'] }}
                                    </a>
                                </div>
                            </li>

                            <li class="flex items-start gap-4">
                                <div>
                                    <p class="font-semibold text-xs uppercase text-gray-500 dark:text-gray-400">BirthDate</p>
                                    @php
                                        $birthDate = \Carbon\Carbon::parse($aboutMeItem['birthDay']);
                                        $age = $birthDate->age;
                                    @endphp
                                    <time datetime="{{ $birthDate->toDateString() }}">
                                        {{ $birthDate->format('F j, Y') }} <br>
                                        ({{ $age }} years old)
                                    </time>
                                </div>

                            </li>

                            <li class="flex items-start gap-4">
                                <div>
                                    <p class="font-semibold text-xs uppercase text-gray-500 dark:text-gray-400">Location</p>
                                    <address>{{ $aboutMeItem['location'] }}</address>
                                </div>
                            </li>
                        </ul>

                        <!-- Icons -->
                        <div class="flex items-center justify-end md:justify-center space-x-2 pt-2">
                            <a href="{{ $aboutMeItem['displayGithub'] }}" target="_blank" rel="noopener noreferrer" class="group">
                                <img src="{{ asset('storage/Icons/github_log.svg') }}"
                                     alt="GitHub Logo"
                                     class="w-6 filter brightness-[0.8] grayscale transition duration-200 group-hover:brightness-[0.6]" />
                            </a>
                            <a href="{{ $aboutMeItem['displayLinkedIn'] }}" target="_blank" rel="noopener noreferrer" class="group">
                                <img src="{{ asset('storage/Icons/linkedin_log.svg') }}"
                                     alt="LinkedIn Logo"
                                     class="w-6 filter brightness-[0.8] grayscale transition duration-200 group-hover:brightness-[0.6]" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden md:block pt-2 text-xl text-center cursor-pointer">
            <span
                @click="collapsed = !collapsed; userToggled = true"
                :class="collapsed ? 'rotate-180' : 'rotate-0'"
                class="inline-block transition-transform duration-300 ease-in-out text-black dark:text-white"
            >
                <svg class="w-6 text-black dark:text-white" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                    <!-- Set fill to currentColor so it inherits text color -->
                    <path d="M14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z" fill="currentColor"/>
                    <path d="M0-.75h48v48h-48z" fill="none"/>
                </svg>
            </span>
        </div>

    </div>
</div>
