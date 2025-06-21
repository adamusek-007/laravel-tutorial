<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$jobs = [
    [
        'id' => '1',
        'title' => 'Directory',
        'salary' => '$50,000'
    ],
    [
        'id' => '2',
        'title' => 'Programmer',
        'salary' => '$100,000'
    ],
    [
        'id' => '3',
        'title' => 'Teacher',
        'salary' => '$75,000'
    ]
];

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function ()use ($jobs) {
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) use ($jobs) {

    $job = Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});