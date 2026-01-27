<?php

use Illuminate\Support\Facades\Route;

// FOR THE MAIN PAGE
Route::get('/', function () {
    return view('welcome');
});

// FOR SIMPLE GET ROUTING
Route::get('/jobs', function () {
    return '<h1>Available Jobs</h1>';
});

// FOR PROVIDING NAME FROM THE ROUTE
Route::get('/getjobs', function () {
    return '<h1>Available Get Jobs</h1>';
})->name('getjobs');

// FOR POST SUBMIT ROUTING
Route::post('/submit', function () {
    return 'Submitted';
});

// FOR MATCHING BASED ON THE ARRAY ARGUMENT BEFORE THE ROUTING PAGE NAME
Route::match(['get', 'post'], '/confirm', function () {
    return 'Confirmed';
});

// ANY TYPE WILL BE CONSIDER, GET, POST, DELETE ETC.
Route::any('/anysubmit', function () {
    return 'Anything';
});

// ROUTING BASED FROM THE NAME OF THE ROUTE FOR CONNECTING ONE ROUTE TO ANOTHER ROUTE
Route::get('/test', function () {
    $url = route('getjobs');
    return "<a href='$url'>Click here!</a>";
});

// ROUTING FOR PASSING JSON DATA
Route::get('/api/users', function () {
    return [
        'name' => 'John Doe',
        'email' => 'johndoe@gmail.com'
    ];
});
