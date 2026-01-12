@extends('layouts.app')

@section('title', 'Programming Languages')

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
            Programming Languages I Use
        </h2>

        <div class="grid grid-cols-3 gap-6">
            @foreach ([
            ['src'=>'php-original.svg','alt'=>'PHP','label'=>'PHP'],
            ['src'=>'javascript-original.svg','alt'=>'JavaScript','label'=>'JavaScript'],
            ['src'=>'python-original.svg','alt'=>'Python','label'=>'Python'],
            ['src'=>'java-original.svg','alt'=>'Java','label'=>'Java'],
            ['src'=>'html5-original.svg','alt'=>'HTML5','label'=>'HTML5'],
            ['src'=>'css3-original.svg','alt'=>'CSS3','label'=>'CSS3'],
            ] as $lang)
            <div class="slide-in bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition transform duration-1000 opacity-0 translate-x-10"
                style="transition-delay: {{ 150 * ($loop->index + 1) }}ms;">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/{{ strtolower($lang['label']) }}/{{ $lang['src'] }}"
                    alt="{{ $lang['alt'] }}" class="h-12 mx-auto mb-3">
                <p class="text-lg font-medium text-gray-700 dark:text-gray-100">{{ $lang['label'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection