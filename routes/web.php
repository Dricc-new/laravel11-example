<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::prefix('/auth')->group(function () {
    Route::get('/login',function(){
        return view('pages.login');
    })->name('login');    
    
    Route::get('/register',function(){
        return view('pages.register');
    })->name('register');
});

Route::prefix('/tasks')->name('tasks')->group(function () {

    Route::get('/', function () {
        return view('pages.tasks');
    });

    Route::get('/new', function () {
        return view('pages.newtask');
    })->name('-new');
});
