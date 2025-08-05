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
    $jobs = Job::with('employer')->orderByDesc('created_at')->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::post('/jobs', function () {
    // dd(request()->all());
    Job::create(['title' => request('title'), 'salary' => request('salary'), 'employer_id' => '1']);
    return redirect('/jobs');
});


Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', ['job' => Job::find($id)]);
});

Route::get('/contact', function () {
    return view('contact');
});