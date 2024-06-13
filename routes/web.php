<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;


Route::get('/', function () {
    return view('welcome');
});




Route::get('/backend/dashboard',[BackendController::class, 'index'])->name('index');
