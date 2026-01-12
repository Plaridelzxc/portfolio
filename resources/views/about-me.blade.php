@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<section id="aboutme" class="py-20 px-6 bg-gray-100 dark:bg-gray-900" x-data x-init="
    (() => {
      const obs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
          if (e.isIntersecting) {
            e.target.classList.add('opacity-100','translate-y-0','translate-x-0');
            obs.unobserve(e.target);
          }
        });
      }, { threshold: 0.1 });

      document.querySelectorAll('.reveal').forEach(el => {
        obs.observe(el);
      });
    })()
  ">

  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-14">

    <!-- Alpine.js CDN -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <div x-data="{ 
    images: [
      '{{ asset('images/sando.jpg') }}',
      '{{ asset('images/guitar.jpg') }}',
      '{{ asset('images/side.jpg') }}',
      '{{ asset('images/beat.jpg') }}',
      '{{ asset('images/grad.jpg') }}'
    ], 
    currentIndex: 0,
    direction: 'next',
    ready: false,
    init() {
      // allow transitions after first render
      this.$nextTick(() => { this.ready = true });
    },
    changeImage(dir) {
      this.direction = dir;
      this.ready = false; // disable transition for a tick so Alpine recalculates
      this.$nextTick(() => {
        if (dir === 'next') {
          this.currentIndex = (this.currentIndex + 1) % this.images.length;
        } else {
          this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
        }
        this.ready = true; // re-enable transitions
      });
    }
  }" class="relative flex-shrink-0 w-full md:w-1/2">

      <!-- Image Wrapper -->
      <div class="relative overflow-hidden rounded-2xl shadow-xl w-full ring-4 ring-red-600 dark:ring-red-400"
        style="height: 650px;">

        <template x-for="(image, index) in images" :key="index">
          <div x-show="index === currentIndex" x-cloak
            x-transition:enter="transform transition duration-500 ease-in-out"
            :x-transition:enter-start="ready ? (direction === 'next' ? 'translate-x-full opacity-0' : '-translate-x-full opacity-0') : ''"
            x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transform transition duration-500 ease-in-out"
            :x-transition:leave-start="ready ? 'translate-x-0 opacity-100' : ''"
            :x-transition:leave-end="ready ? (direction === 'next' ? '-translate-x-full opacity-0' : 'translate-x-full opacity-0') : ''"
            class="absolute inset-0 flex justify-center items-center bg-black">
            <img :src="image" alt="Slider Image" class="w-full h-full object-cover rounded-2xl">
          </div>
        </template>

        <!-- Previous Button -->
        <button @click="changeImage('prev')"
          class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white dark:bg-gray-800 rounded-full ml-4 p-3 shadow hover:bg-gray-100 dark:hover:bg-gray-700 scale-100 hover:scale-110 transition">
          &#10094;
        </button>

        <!-- Next Button -->
        <button @click="changeImage('next')"
          class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white dark:bg-gray-800 rounded-full mr-4 p-3 shadow hover:bg-gray-100 dark:hover:bg-gray-700 scale-100 hover:scale-110 transition">
          &#10095;
        </button>
      </div>

    <!-- Dots Indicator Below Image -->
    <div class="flex justify-center mt-4 space-x-3">
      <template x-for="(image, index) in images" :key="index">
        <div @click="currentIndex = index" class="w-4 h-4 rounded-full cursor-pointer transition"
          :class="currentIndex === index ? 'bg-red-600' : 'bg-gray-400'">
        </div>
      </template>
    </div>
  </div>

  <!-- Text Section -->
  <div class="w-full mb-16 md:w-1/2 space-y-6 text-center md:text-left">
    <h2
      class="reveal text-3xl sm:text-4xl font-extrabold mb-6 text-gray-900 dark:text-white transform transition duration-1000 opacity-0 translate-y-10">
      About Me
    </h2>

    <p
      class="reveal text-lg text-gray-700 dark:text-gray-300 leading-relaxed transform transition duration-1000 opacity-0 translate-y-10">
      I'm Ralph Tillana, an enthusiastic and dedicated IT Developer with a deep passion for technology,
      problem-solving, and innovation. I specialize in building responsive and interactive web applications
      using modern development stacks such as Laravel, Livewire, and Tailwind CSS.
    </p>

    <p
      class="reveal text-lg text-gray-700 dark:text-gray-300 leading-relaxed transform transition duration-1000 opacity-0 translate-y-10">
      With a strong foundation in both front-end and back-end development, I focus on writing clean,
      maintainable code and creating user-friendly interfaces that enhance the overall experience.
    </p>

    <p
      class="reveal text-lg text-gray-700 dark:text-gray-300 leading-relaxed transform transition duration-1000 opacity-0 translate-y-10">
      Aside from coding, I continuously seek to improve my skills through real-world projects, team
      collaborations, and learning new tools and frameworks. I'm excited about building scalable, secure, and
      efficient systems that solve real problems—and I’m always up for the next challenge.
    </p>
  </div>

  </div>
</section>
@endsection