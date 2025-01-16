<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', [\App\Http\Controllers\DasboardController::class, 'index'])->name('dasboard.index');
Route::get('/admin/profile', [\App\Http\Controllers\DasboardController::class, 'profile'])->name('dasboard.profile');