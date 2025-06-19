<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\OlahragaController;
use App\Http\Controllers\HiburanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\OtomotifController;
use App\Http\Controllers\EsportController;
use App\Http\Controllers\TeknologiController;

Route::get('/', [HomeController::class, 'index'], function () {
    return view('home', ['title' => 'Trending']);
});

Route::get('/olahraga', [OlahragaController::class, 'index'], function () {
    return view('olahraga', ['title' => 'Olahraga']);
});

Route::get('/teknologi', [TeknologiController::class, 'index'], function () {
    return view('teknologi', ['title' => 'Teknologi']);
});

Route::get('/hiburan', [HiburanController::class, 'index'], function () {
    return view('hiburan', ['title' => 'Hiburan']);
});

Route::get('/otomotif', [OtomotifController::class, 'index'], function () {
    return view('otomotif', ['title' => 'Otomotif']);
});

Route::get('/esport', [EsportController::class, 'index'], function () {
    return view('esport', ['title' => 'Esport']);
});

Route::get('/search', [BeritaController::class, 'search'])->name('search');

Route::get('/{slug}', [BeritaController::class, 'show'])->name('show');