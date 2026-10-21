<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/logeo/login', function () {
    return view('logeo.login');
})->name('login');

Route::get('/logeo/Registrar', function () {
    return view('logeo.registrar');
})->name('register');

Route::post('/logeo/login', [App\Http\Controllers\inisiar_sesion::class, 'singIN'])->name('login.submit');