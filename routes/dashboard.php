<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|
| dashboard Routes
|
*/

Route::prefix('/dashboard')->middleware(['auth:admin', 'verified'])->name('dashboard.')->group(function () {
    Route::get('', [IndexController::class, 'index'])->name('index');
    Route::view('/skills', 'dashboard.skills.index')->name('skills');
    Route::view('/subscribers', 'dashboard.subscribers.index')->name('subscribers');
    Route::view('/counters', 'dashboard.counters.index')->name('counters');
    Route::view('/services', 'dashboard.services.index')->name('services');
    Route::view('/messages', 'dashboard.messages.index')->name('messages');
    Route::view('/categories', 'dashboard.categories.index')->name('categories');
    Route::view('/projects', 'dashboard.projects.index')->name('projects');
    Route::view('/testimonials', 'dashboard.testimonials.index')->name('testimonials');
    Route::view('/members', 'dashboard.members.index')->name('members');
    Route::view('/admins', 'dashboard.admins.index')->name('admins');
    Route::view('/settings', 'dashboard.settings.index')->name('settings');
});

Route::prefix('/auth/')->middleware('guest:admin')->group(function () {
    Route::view('login', 'dashboard.auth.login')->name('auth.login');
    Route::get('password/forgot', [AuthController::class, 'forgotPassword'])
        ->name('auth.forgotPassword');

    Route::post('password/forgot', [AuthController::class, 'requestResetPassword'])
        ->name('auth.requestResetPassword');

    Route::get('password/forgot/{token}', [AuthController::class, 'resetPassword'])
        ->name('password.reset');

    Route::put('password/forgot', [AuthController::class, 'changePassword'])
        ->name('auth.changePassword');
});


Route::prefix('email')->middleware(['auth:admin'])->group(function () {

    Route::get('verification', [AuthController::class, 'showEmailVerification'])
        ->name('verification.notice');

    Route::post('verification', [AuthController::class, 'emailVerification'])
        ->middleware('throttle:3,3')
        ->name('auth.emailVerification');

    Route::get('verification/{id}/{hash}', [AuthController::class, 'verify'])
        ->middleware('signed')
        ->name('verification.verify');
});
