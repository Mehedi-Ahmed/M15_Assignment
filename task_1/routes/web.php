<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Resume page
Route::get('/resume', function () {
    return view('resume');
})->name('resume');

// Projects page
Route::get('/projects', function () {
    return view('projects');
})->name('projects');

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
