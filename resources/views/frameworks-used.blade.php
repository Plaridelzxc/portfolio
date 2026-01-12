@extends('layouts.app')

@section('title', 'Frameworks Used')

@section('content')
<section class="py-16 px-6 bg-gray-100 dark:bg-gray-900" x-data x-init="
      (() => {
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('opacity-100','translate-x-0');
              observer.unobserve(entry.target);
            }
          });
        }, { threshold: 0.2 });

        document.querySelectorAll('.slide-in').forEach(el => {
          observer.observe(el);
        });
      })()
    ">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="slide-in transform transition duration-1000 opacity-0 -translate-x-10 text-3xl sm:text-4xl font-bold mb-10 text-gray-800 dark:text-gray-200"
            style="transition-delay: 0ms;">
            Frameworks I Use
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ([
            ['src'=>'logomark.min.svg','alt'=>'Laravel','label'=>'Laravel','base'=>'laravel.com/img'],
            ['src'=>'Vue.js_Logo_2.svg','alt'=>'Vue.js','label'=>'Vue.js','base'=>'upload.wikimedia.org/wikipedia/commons/9/95'],
            ['src'=>'React-icon.svg','alt'=>'React','label'=>'React','base'=>'upload.wikimedia.org/wikipedia/commons/a/a7'],
            ['src'=>'tailwindcss-logotype.a1069bda.svg','alt'=>'Tailwind CSS','label'=>'Tailwind
            CSS','base'=>'tailwindcss.com/_next/static/media'],
            ['src'=>'logo.svg','alt'=>'Laravel Livewire','label'=>'Laravel
            Livewire','base'=>'livewire.laravel.com/img'],
            ['src'=>'logo-logomark.png','alt'=>'Firebase','label'=>'Firebase','base'=>'firebase.google.com/downloads/brand-guidelines/PNG'],
            ] as $framework)
            <div class="slide-in bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transform transition duration-1000 opacity-0 translate-x-10"
                style="transition-delay: {{ 150 * ($loop->index + 1) }}ms;">
                <img src="https://{{ $framework['base'] }}/{{ $framework['src'] }}" alt="{{ $framework['alt'] }}"
                    class="h-12 mx-auto mb-3">
                <p class="text-lg font-medium text-gray-700 dark:text-gray-100">{{ $framework['label'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection