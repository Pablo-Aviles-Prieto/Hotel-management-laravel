<?php

use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RoomsController::class, 'landpage']);

Route::get('/contact', [ContactController::class, 'contactView']);
Route::post('/contact', [ContactController::class, 'saveForm'])->name('contact.saveForm');;
