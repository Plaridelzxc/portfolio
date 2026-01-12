@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
<section class="py-16 px-6 bg-gray-100 dark:bg-gray-900" x-data="{ showAll: false }">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-8 text-gray-800 dark:text-gray-200">
            My Projects
        </h2>
        <livewire:project-list />
    </div>
</section>
@endsection
