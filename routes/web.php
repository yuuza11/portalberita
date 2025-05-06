<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Trending']);
});

Route::get('/olahraga', function () {
    return view('olahraga', ['title' => 'Olahraga']);
});

Route::get('/teknologi', function () {
    return view('teknologi', ['title' => 'Teknologi']);
});

Route::get('/hiburan', function () {
    return view('hiburan', ['title' => 'Hiburan']);
});

Route::get('/otomotif', function () {
    return view('otomotif', ['title' => 'Otomotif']);
});

Route::get('/politik', function () {
    return view('politik', ['title' => 'Politik']);
});