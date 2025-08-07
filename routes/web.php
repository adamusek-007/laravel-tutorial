<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});


// Route::get('/jobs', JobController::class, 'index');
// Display all jobs - index
Route::get('/jobs', [JobController::class, 'index']);

// Store new job
Route::post('/jobs', [JobController::class, 'store']);

// Create new job
Route::get('/jobs/create', [JobController::class, 'create']);

// Show  
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Edit  
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// Update
Route::patch('/jobs/{job}', [JobController::class, 'update']);

// destroy
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

Route::get('/contact', function () {
    return view('contact');
});