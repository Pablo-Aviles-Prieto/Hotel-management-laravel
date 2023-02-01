<?php

use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RoomsController::class, 'landpage']);
