<!DOCTYPE html>
<html lang="{{ config('app.locale', 'en') }}" class="scroll-smooth">
<head>
    <title>Alex van Poppel | E-Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/Other/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/Other/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/Other/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href=" {{ asset('storage/Other/favicon_io/site.webmanifest') }}">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Explore the portfolio of Alex van Poppel — Software Development student at Thomas More, showcasing web development, AI, and clean UI/UX design.">
    <meta name="keywords" content="Alex van Poppel, Software Developer, Portfolio, Web Development, AI, UI/UX, Laravel, Thomas More">
    <meta name="author" content="Alex van Poppel">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Alex van Poppel | E-Portfolio">
    <meta property="og:description" content="Explore the portfolio of Alex van Poppel — Software Development student at Thomas More.">
    <meta property="og:image" content="{{ asset('storage/Other/profileImage.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Alex van Poppel | E-Portfolio">
    <meta name="twitter:description" content="Software Development student at Thomas More. Check out my projects and skills.">
    <meta name="twitter:image" content="{{ asset('storage/Other/profileImage.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('storage/Icons/favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dm-sans:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>


<!-- Floating Toggle Button - Bottom Left -->
<button
    @click="darkMode = !darkMode"
    class="fixed bottom-4 left-4 z-50 bg-[#A880A2] hover:bg-[#c79bc4] text-white dark:bg-[#A880A2] dark:hover:bg-[#c79bc4] p-3 rounded-full shadow-lg transition-all duration-300 ease-in-out"
    title="Toggle Dark Mode"
>
    <template x-if="darkMode">
        <x-heroicon-o-sun class="w-6 h-6 text-yellow-300" />
    </template>
    <template x-if="!darkMode">
        <x-heroicon-o-moon class="w-6 h-6 text-white" />
    </template>
</button>

<!-- Scroll to Top Button - Bottom Right -->
<button
    @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
    class="fixed bottom-4 right-4 z-50 bg-[#A880A2] hover:bg-[#c79bc4] text-white dark:bg-[#A880A2] dark:hover:bg-[#c79bc4] p-3 rounded-full shadow-lg transition-all duration-300 ease-in-out"
    title="Back to Top"
>
    <x-heroicon-o-arrow-up class="w-6 h-6" />
</button>


<body class="font-sans antialiased"
      x-data="{darkMode: localStorage.getItem('darkMode') === 'true'}"
      x-init="$watch('darkMode', value => localStorage.setItem('darkMode', value))"
      :class="{ 'dark': darkMode }">

<div class="min-h-screen w-full space-y-2 text-gray-800 bg-gray-200 dark:bg-[#121212] dark:text-white">
    <main class="flex flex-col md:flex-row w-full lg:w-10/12 xl:w-8/12 mx-auto flex-1 px-4">
        <div class="w-full md:w-3/12">
            <livewire:side-bar></livewire:side-bar>
        </div>
        <div class="w-full md:w-9/12 min-h-screen">
            <x-custom.main-section>
                {{ $slot }}
            </x-custom.main-section>
        </div>
    </main>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
