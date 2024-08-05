<?php

use Illuminate\Support\Facades\Route;

/*
|
| frontend Routes
|
*/

Route::prefix('/')->name('front.')->group(function () {
    Route::view('', 'frontend.index')->name('index');
    Route::view('about', 'frontend.about')->name('about');
    Route::view('services', 'frontend.service')->name('service');
    Route::view('projects', 'frontend.project')->name('project');
    Route::view('team', 'frontend.team')->name('page.team');
    Route::view('testimonials', 'frontend.testimonial')->name('page.testimonial');
    Route::view('contact', 'frontend.contact')->name('contact');
});
