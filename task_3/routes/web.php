<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


// Route to display the contact form
Route::get('/', [ContactController::class, 'showForm'])->name('contact.form');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');

// Route to handle the form submission
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

// Route to display the confirmation page
Route::get('/confirmation', [ContactController::class, 'showConfirmation'])->name('contact.confirmation');
