<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // carrega home.blade.php
});
