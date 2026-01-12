@extends('layouts.app')

@section('title', 'Graphic Designs')

@section('content')
<section class="py-16 px-6 bg-gray-100 dark:bg-gray-900" x-data="{ showAll: false }">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-8 text-gray-800 dark:text-gray-200">
            Graphic Designs
        </h2>
        <livewire:graphic-design />
    </div>
</section>
@endsection
