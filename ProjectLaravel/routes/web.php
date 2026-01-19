<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('portofolio');
});

// route untuk menampilkan project lewat controller
Route::get('/project', [ProjectController::class, 'index']);
