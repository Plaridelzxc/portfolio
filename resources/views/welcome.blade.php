<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AOS Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>

<body class="bg-black text-gray-800 dark:text-gray-100 font-sans">

    <!-- Hero Section -->
    <section
        class="min-h-screen flex flex-col lg:flex-row items-center justify-center text-center lg:text-left gap-10 px-6 py-12"
        data-aos="slide-up" data-aos-offset="0">
        <!-- Image -->
        <div class="flex-shrink-0" data-aos="slide-right" data-aos-offset="0">
            <img src="{{ asset('images/gradpic.png') }}" alt="Ralph Tillana"
                class="w-54 h-54 rounded-full shadow-lg ring-4 ring-blue-500 dark:ring-blue-400" />
        </div>

        <!-- Text -->
        <div data-aos="slide-left" data-aos-offset="0">
            <h1 class="text-4xl sm:text-6xl font-extrabold mb-4 text-white">
                Hello, I'm <span class="text-blue-600 dark:text-red-600">Ralph</span>
            </h1>
            <p class="text-lg sm:text-xl font-bold text-gray-600 dark:text-gray-300 mb-6 max-w-xl">
                A passionate <span class="font-semibold text-blue-500">IT Developer</span> crafting modern web
                experiences.
            </p>

            <p class="text-md sm:text-lg text-gray-600 dark:text-gray-300 mb-6 max-w-xl">
                Welcome to my portfolio. I am a passionate and detail-oriented individual with a strong background in
                Information Technology. This portfolio showcases my academic projects, technical skills, and real-world
                experiences that reflect my growth and dedication to continuous learning. I aim to contribute innovative
                solutions and deliver quality work in every opportunity I take.
            </p>

            <div class="space-y-4" data-aos="slide-up" data-aos-offset="0" data-aos-delay="200">
                <!-- Row 1: About Me, My Projects, Frameworks Used -->
                <div class="flex flex-wrap gap-4">
                    <!-- About Me -->
                    <a href="about-me"
                        class="flex items-center gap-2 px-6 py-3 rounded-xl shadow-md bg-red-600 text-white hover:bg-white hover:text-red-600 transition"
                        data-aos="slide-up" data-aos-offset="0" data-aos-delay="300">
                        <i class="ph ph-user text-lg"></i>
                        About Me
                    </a>

                    <!-- My Projects -->
                    <a href="my-projects" @click.prevent="showCards = true"
                        class="flex items-center gap-2 px-6 py-3 rounded-xl shadow-md bg-red-600 text-white hover:bg-white hover:text-red-600 transition"
                        data-aos="slide-up" data-aos-offset="0" data-aos-delay="400">
                        <i class="ph ph-briefcase text-lg"></i>
                        My Projects
                    </a>

                    <!-- Frameworks Used -->
                    <a href="frameworks-used"
                        class="flex items-center gap-2 px-6 py-3 rounded-xl shadow-md bg-red-600 text-white hover:bg-white hover:text-red-600 transition"
                        data-aos="slide-up" data-aos-offset="0" data-aos-delay="500">
                        <i class="ph ph-stack text-lg"></i>
                        Frameworks Used
                    </a>
                </div>

                <!-- Row 2: Programming Languages -->
                <div class="flex flex-wrap gap-4">
                    <a href="graphics"
                        class="flex items-center gap-2 px-6 py-3 rounded-xl shadow-md bg-red-600 text-white hover:bg-white hover:text-red-600 transition"
                        data-aos="slide-up" data-aos-offset="0" data-aos-delay="600">
                        <i class="ph ph-palette text-lg"></i>
                        Graphic Designs
                    </a>
                    <a href="programming-languages"
                        class="flex items-center gap-2 px-6 py-3 rounded-xl shadow-md bg-red-600 text-white hover:bg-white hover:text-red-600 transition"
                        data-aos="slide-up" data-aos-offset="0" data-aos-delay="600">
                        <i class="ph ph-code text-lg"></i>
                        Programming Languages
                    </a>

                    <a href="experience"
                        class="flex items-center gap-2 px-6 py-3 rounded-xl shadow-md bg-red-600 text-white hover:bg-white hover:text-red-600 transition"
                        data-aos="slide-up" data-aos-offset="0" data-aos-delay="700">
                        <i class="ph ph-palette text-lg"></i>
                        Experience
                    </a>
                </div>
            </div>
    </section>

    <!-- Projects Section -->
    <section id="contact" class="py-8 px-4 bg-gray-100 dark:bg-gray-900">
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



    <!-- Footer (no AOS so it only appears normally unless you add later) -->
    <footer class="py-8 text-center text-gray-500 dark:text-gray-400">
        &copy; {{ date('Y') }} Ralph Tillana. All rights reserved.
    </footer>

    <script>
        AOS.init({
      offset: 0,      // trigger elements at very top
      duration: 1200, // slower animations
      once: false
    });
    </script>
</body>

</html>