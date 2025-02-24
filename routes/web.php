<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(LandingPageController::class)->group(function(){

    Route::get('/','index')->name('welcome');
    Route::get('contact','contact')->name('contact');
    Route::get('about','about')->name('about');
    Route::get('classes','classes')->name('classes');
    Route::get('services','services')->name('services');
    Route::get('team','team')->name('team');
    Route::get('class-timetable','classTimetable')->name('class-timetable');
    Route::get('gallery','gallery')->name('gallery');
    Route::get('blog','blog')->name('blog');
    Route::get('blog-details','blogDetails')->name('blog-details');
});


Route::fallback(function(){
    return view('404');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
