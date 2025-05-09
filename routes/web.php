<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


// Route::get('/', function () {
//     return view('landingpage');
// });
Route::get('/', [AdminController::class, 'index']);
