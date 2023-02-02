<?php

use App\Http\Controllers\LandpageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\RoomGridController;
use App\Http\Controllers\RoomDetailsController;
use App\Http\Controllers\RoomListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandpageController::class, 'renderView']);

Route::get('/contact', [ContactController::class, 'renderView']);
Route::post('/contact', [ContactController::class, 'saveForm'])->name('contact.saveForm');

Route::get('/about-us', [AboutusController::class, 'renderView']);

Route::get('/offers', [OffersController::class, 'renderView']);

Route::get('/rooms-grid', [RoomGridController::class, 'renderRoomGrid']);
Route::get('/rooms-details/{id}', [RoomDetailsController::class, 'renderRoomDetails'])->where('id', '[0-9]+');
Route::get('/rooms-list', [RoomListController::class, 'renderRoomList']);
