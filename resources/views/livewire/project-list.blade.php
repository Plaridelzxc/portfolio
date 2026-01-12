<div class="py-16 px-6 bg-gray-100 dark:bg-gray-900" id="my-projects">
    <div class="max-w-7xl mx-auto">
        @foreach ($projects as $index => $project)
        <div class="flex flex-col md:flex-row items-center gap-12 mb-24 
                    {{ $loop->iteration % 2 === 0 ? 'md:flex-row-reverse' : '' }}"
            data-aos="{{ $loop->iteration % 2 === 0 ? 'fade-left' : 'fade-right' }}" data-aos-duration="800"
            x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">

            <!-- Image -->
            <div class="md:w-3/5 relative group rounded-2xl h-[400px] overflow-hidden ring-4 ring-red-600 ring-offset-0 transition-transform duration-500"
                :class="hover ? 'scale-[1.02] shadow-2xl' : 'scale-100 shadow-lg'">
                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                    class="w-full h-full object-cover rounded-2xl transition-transform duration-500"
                    :class="hover ? 'scale-105' : 'scale-100'">
                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-30 transition-opacity duration-300 flex items-center justify-center text-white text-lg font-semibold">
                    View Project →
                </div>
            </div>

            <!-- Text -->
            <div class="md:w-2/5 text-center md:text-left">
                <h3 class="text-3xl font-semibold text-gray-800 dark:text-gray-200 transition-colors duration-300"
                    :class="hover ? 'text-green-600' : 'text-gray-800 dark:text-gray-200'">
                    {{ $project['title'] }}
                </h3>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    {{ $project['description'] }}
                </p>
                <a href="{{ $project['link'] }}" target="_blank"
                    class="mt-6 inline-block px-6 py-3 bg-green-600 text-white font-medium rounded-xl shadow hover:bg-green-700 transition-colors duration-300">
                    Visit Project
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>