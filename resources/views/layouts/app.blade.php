<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'My Portfolio')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- Alpine Core & Intersection plugin -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-white dark:bg-[#0a0a0a] text-gray-800 dark:text-gray-100 font-sans">

    <!-- Navigation Bar -->
    <header class="bg-black shadow-md p-2">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-extrabold text-red-400 hover:text-white">
                Ralph Tillana
            </a>

            <!-- Hamburger Menu (mobile) -->
            <div x-data="{ open: false }" class="md:hidden">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <i :class="open ? 'ph ph-x' : 'ph ph-list'" class="text-2xl"></i>
                </button>
            </div>

            <!-- Desktop Links -->
            <nav class="hidden md:flex gap-6 text-sm font-medium">
                <a href="{{ url('/') }}" class="hover:text-red-600 dark:hover:text-red-400">Home</a>
                <a href="{{ url('my-projects') }}" class="hover:text-red-600 dark:hover:text-red-400">Projects</a>
                <a href="{{ url('about-me') }}" class="hover:text-red-600 dark:hover:text-red-400">About Me</a>
                <a href="{{ url('graphics') }}" class="hover:text-red-600 dark:hover:text-red-400">Graphic Design</a>
                <a href="{{ url('programming-languages') }}"
                    class="hover:text-red-600 dark:hover:text-red-400">Languages</a>
                <a href="{{ url('frameworks-used') }}" class="hover:text-red-600 dark:hover:text-red-400">Frameworks</a>
                <a href="{{ url('experience') }}" class="hover:text-red-600 dark:hover:text-red-400">Experience</a>
            </nav>
        </div>

        <!-- Mobile Dropdown -->
        <div x-show="open" x-transition class="md:hidden px-6 pb-4">
            <a href="{{ url('/') }}" class="block py-2 hover:text-red-600 dark:hover:text-red-400">Home</a>
            <a href="{{ url('my-projects') }}"
                class="block py-2 hover:text-red-600 dark:hover:text-red-400">Projects</a>
            <a href="{{ url('about-me') }}" class="block py-2 hover:text-red-600 dark:hover:text-red-400">About Me</a>
            <a href="{{ url('graphics') }}" class="block py-2 hover:text-red-600 dark:hover:text-red-400">Graphic Design</a>
            <a href="{{ url('programming-languages') }}"
                class="block py-2 hover:text-red-600 dark:hover:text-red-400">Languages</a>
            <a href="{{ url('frameworks-used') }}"
                class="block py-2 hover:text-red-600 dark:hover:text-red-400">Frameworks</a>
            <a href="{{ url('experience') }}"
                class="block py-2 hover:text-red-600 dark:hover:text-red-400">Experience</a>
            <a href="{{ url()->previous() }}"
                class="block mt-2 px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-white hover:text-red-600 hover:border-red-600 border transition">
                <i class="ph ph-arrow-left mr-1"></i> Back
            </a>
        </div>
    </header>

    @yield('content')

    <!-- Footer Contact Section -->
    <section id="contact" class="py-8 px-4 bg-black">
        <div class="max-w-4xl mx-auto text-center">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Gmail -->
                <a href="mailto:ralphcalisotillana@gmail.com" target="_blank"
                    class="flex flex-col items-center bg-white dark:bg-gray-800 p-4 rounded-xl shadow hover:shadow-md transition"
                    data-aos="slide-up" data-aos-delay="200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500 mb-2" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M12 13.5l-11-7.5v13.5h22v-13.5l-11 7.5zm11-9h-22l11 7.5 11-7.5z" />
                    </svg>
                    <p class="text-sm text-gray-800 dark:text-gray-200">ralphcalisotillana@gmail.com</p>
                </a>

                <!-- Facebook -->
                <a href="https://www.facebook.com/2tocarter143" target="_blank"
                    class="flex flex-col items-center bg-white dark:bg-gray-800 p-4 rounded-xl shadow hover:shadow-md transition"
                    data-aos="slide-up" data-aos-delay="400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 mb-2" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M22 12c0-5.522-4.478-10-10-10s-10 4.478-10 10c0 5.003 3.657 9.128 8.438 9.877v-6.987h-2.54v-2.89h2.54v-2.2c0-2.507 1.493-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.242 0-1.63.771-1.63 1.562v1.873h2.773l-.443 2.89h-2.33v6.987c4.781-.749 8.438-4.874 8.438-9.877z" />
                    </svg>
                    <p class="text-sm text-gray-800 dark:text-gray-200">Ralph Tillana</p>
                </a>

                <!-- GitHub -->
                <a href="https://github.com/Plaridelzxc" target="_blank"
                    class="flex flex-col items-center bg-white dark:bg-gray-800 p-4 rounded-xl shadow hover:shadow-md transition"
                    data-aos="slide-up" data-aos-delay="600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-800 dark:text-gray-200 mb-2"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 .5c-6.627 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.113.82-.26.82-.577 0-.285-.01-1.04-.015-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.385-1.333-1.754-1.333-1.754-1.09-.745.083-.729.083-.729 1.204.085 1.837 1.236 1.837 1.236 1.07 1.834 2.809 1.304 3.495.997.108-.775.418-1.305.76-1.605-2.665-.304-5.467-1.333-5.467-5.931 0-1.31.467-2.381 1.236-3.221-.124-.303-.536-1.524.117-3.176 0 0 1.008-.322 3.296 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.29-1.552 3.296-1.23 3.296-1.23.654 1.653.242 2.874.119 3.176.77.84 1.233 1.911 1.233 3.221 0 4.609-2.807 5.625-5.48 5.921.43.37.814 1.096.814 2.211 0 1.596-.015 2.884-.015 3.275 0 .319.216.694.825.576 4.765-1.589 8.2-6.084 8.2-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                    <p class="text-sm text-gray-800 dark:text-gray-200">github.com/Plaridelzxc</p>
                </a>

                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/ralph-tillana-5b4708314/" target="_blank"
                    class="flex flex-col items-center bg-white dark:bg-gray-800 p-4 rounded-xl shadow hover:shadow-md transition"
                    data-aos="slide-up" data-aos-delay="800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700 mb-2" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.5 8h4V24h-4V8zm7.5 0h3.78v2.16h.05c.53-1 1.83-2.16 3.78-2.16 4.05 0 4.8 2.66 4.8 6.12V24h-4V14.16c0-2.34-.04-5.36-3.26-5.36-3.26 0-3.76 2.55-3.76 5.18V24h-4V8z" />
                    </svg>
                    <p class="text-sm text-gray-800 dark:text-gray-200">Ralph Tillana</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Compact Footer -->
    <footer class="bg-black text-white text-center py-2 text-sm">
        &copy; {{ now()->year }} Ralph Tillana. All rights reserved.
    </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
        duration: 500,
        once: true,
    });
    </script>

</body>

</html>