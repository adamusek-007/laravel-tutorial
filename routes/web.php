<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);



Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);


Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);
