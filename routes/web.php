<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter-js', function () {
    return view('counterjs');
});


Route::get('/counter-livewire', function () {
    return view('counterlivewire');
});
