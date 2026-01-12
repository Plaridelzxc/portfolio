<div class="py-16 px-6 bg-gray-100 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold mb-16 text-center text-gray-800 dark:text-gray-200">
            Work Experiences
        </h2>

        @foreach ($experiences as $experience)
        <div class="flex flex-col md:flex-row items-center gap-12 mb-24 
                   {{ $loop->iteration % 2 === 0 ? 'md:flex-row-reverse' : '' }}"
            data-aos="{{ $loop->iteration % 2 === 0 ? 'fade-left' : 'fade-right' }}" data-aos-duration="800" x-data="{ 
                current: 0, 
                next: null,
                images: {{ json_encode($experience['images']) }},
                sliding: false,
                nextImage() {
                    if (this.sliding || this.images.length <= 1) return;
                    this.sliding = true;
                    this.next = (this.current + 1) % this.images.length;

                    // After animation duration, finalize
                    setTimeout(() => {
                        this.current = this.next;
                        this.next = null;
                        this.sliding = false;
                    }, 300);
                }
            }">

            <!-- Image -->
            <div class="md:w-[600px] relative group rounded-2xl h-[400px]">
                <!-- Images -->
                <template x-for="(img, index) in images" :key="index">
                    <div class="absolute inset-0 w-full h-full rounded-2xl cursor-pointer transition-transform duration-500 ring-4 ring-red-600 ring-offset-0
                    group-hover:scale-105" :class="{
                'translate-x-0 opacity-100': index === current && !sliding,
                '-translate-x-full opacity-0': index === current && sliding,
                'translate-x-full opacity-0': index === next && !sliding,
                'translate-x-0 opacity-100': index === next && sliding,
                'hidden': index !== current && index !== next
            }" @click="nextImage()">
                        <img :src="img" alt="{{ $experience['title'] }}" class="w-full h-full object-cover rounded-2xl">
                    </div>
                </template>
            </div>

            <!-- Text -->
            <div class="md:w-2/5 text-center md:text-left">
                <h3 class="text-3xl font-semibold text-gray-800 dark:text-gray-200">
                    {{ $experience['title'] }}
                </h3>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    {{ $experience['long'] }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>