<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    // $jobs = Job::all();
    // dd($jobs);
    return view('home');
});
Route::get('/jobs', function () {
    // $jobs = Job::with('employer')->get();
    // $job
    $jobs = Job::with('employer')->simplePaginate(3);
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', ['job' => Job::find($id)]);
});

Route::get('/contact', function () {
    return view('contact');
});