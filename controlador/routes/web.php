<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    
    Route::get('/correo1', function () {
        return view('pages.correo1');
    })->name('correo1');

    Route::get('/correo2', function () {
        return view('pages.correo2');
    })->name('correo2');

    Route::get('/correo3', function () {
        return view('pages.correo3');
    })->name('correo3');

    Route::get('/correo4', function () {
        return view('pages.correo4');
    })->name('correo4');
    
});


Route::get('/working/{page}', function ($page) {
        return view('working', ['page' => $page]);
})->name('working');

require __DIR__.'/settings.php';
