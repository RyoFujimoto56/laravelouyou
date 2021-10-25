<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('welcome');
  });

Route::get('/index', [HelloController::class, 'index']);
Route::post('/thanks', [TestController::class, 'index']);