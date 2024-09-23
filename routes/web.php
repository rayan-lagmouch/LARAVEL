<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => [
            [
                'íd' => 1,
                'title' => 'director',
                'salary' => '50,000'
            ],
            [
                'íd' => 2,
                'title' => 'programmer',
                'salary' => '10,000'
            ],
            [
                'íd' => 3,
                'title' => 'teacher',
                'salary' => '40,000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
            [
                'íd' => 1,
                'title' => 'director',
                'salary' => '50,000'
            ],
            [
                'íd' => 2,
                'title' => 'programmer',
                'salary' => '10,000'
            ],
            [
                'íd' => 3,
                'title' => 'teacher',
                'salary' => '40,000'
            ]
        ];
    $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] =$id);


    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
