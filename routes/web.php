<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OlahragaController;
use App\Http\Controllers\HiburanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;

Route::get('/', [HomeController::class, 'index'], function () {
    return view('home', ['title' => 'Trending']);
});

Route::get('/olahraga', [OlahragaController::class, 'index'], function () {
    return view('olahraga', ['title' => 'Olahraga']);
});

Route::get('/teknologi', function () {
    return view('teknologi', ['title' => 'Teknologi']);
});

Route::get('/hiburan', [HiburanController::class, 'index'], function () {
    return view('hiburan', ['title' => 'Hiburan']);
});

Route::get('/otomotif', function () {
    return view('otomotif', ['title' => 'Otomotif']);
});

Route::get('/politik', function () {
    return view('politik', ['title' => 'Politik']);
});

Route::get('/{slug}', [BeritaController::class, 'show'])->name('show');