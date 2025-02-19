<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog', [PartController::class, 'index'])->name('catalog.index');
Route::get('/part-details/{part}', [PartController::class, 'details'])->name('part.details');