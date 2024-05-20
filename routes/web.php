<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/kursus', function () {
    return view('kursus', ['title' => 'Kursus']);
});

Route::get('/jual-beli', function () {
    return view('jual-beli', ['title' => 'Jual Beli']);
});

Route::get('/harga-pasar', function () {
    return view('harga-pasar', ['title' => 'Harga Pasar']);
});

Route::get('/titik-kesuburan-tanah', function () {
    return view('titik-kesuburan-tanah', ['title' => 'Titik Kesuburan Tanah']);
});
