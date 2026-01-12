<?php

use Illuminate\Support\Facades\Route;

Route::view('/about-me', 'about-me')->name('about-me');
Route::view('/my-projects', 'my-projects')->name('my-projects');
Route::view('/frameworks-used', 'frameworks-used')->name('frameworks-used');
Route::view('/programming-languages', 'programming-languages')->name('programming-languages');
Route::view('/experience', 'experience')->name('experience');
Route::view('/graphics', 'graphics')->name('graphics');

Route::get('/', function () {
    return view('welcome');
});
