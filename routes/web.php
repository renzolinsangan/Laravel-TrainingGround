<?php

use Illuminate\Support\Facades\Route;

// FOR THE MAIN PAGE
Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return '<h1>Available Jobs</h1>';
})->name('jobs');

// SIMPLE PASSING OF PARAMETER THROUGH ANY PARAMETERS
Route::get('/posts/{id}', function (string $id) {
    return 'Post ' . $id;
});

// PASSING OF PARAMETER THAT ACCEPTS ONLY INTEGER
Route::get('/intonly/{id}', function (string $id) {
    return 'Post ' . $id;
}); // with global routing, can be found in AppServiceProvider
// })->whereNumber('id'); // shortcut
// })->where('id', '[0-9]+'); // for longer syntax

// PASSING OF PARAMETER THAT ACCEPTS ONLY STRING
Route::get('/stringonly/{name}', function (string $name) {
    return 'Post ' . $name;
}); // with global routing, can be found in AppServiceProvider
// })->whereAlpha('id'); // shortcut
// })->where('id', '[a-zA-z]+'); // for longer syntax

Route::get('/posts/{id}/comments/{commentId}', function (string $id, string $commentId) {
    return 'Post ' . $id . ' Comments ' . $commentId;
});

// =============================== SYNTAX 1 ========================================= //
// FOR SIMPLE GET ROUTING
// Route::get('/jobs', function () {
//     return '<h1>Available Jobs</h1>';
// });

// FOR PROVIDING NAME FROM THE ROUTE
// Route::get('/getjobs', function () {
//     return '<h1>Available Get Jobs</h1>';
// })->name('getjobs');

// FOR POST SUBMIT ROUTING
// Route::post('/submit', function () {
//     return 'Submitted';
// });

// FOR MATCHING BASED ON THE ARRAY ARGUMENT BEFORE THE ROUTING PAGE NAME
// Route::match(['get', 'post'], '/confirm', function () {
//     return 'Confirmed';
// });

// ANY TYPE WILL BE CONSIDER, GET, POST, DELETE ETC.
// Route::any('/anysubmit', function () {
//     return 'Anything';
// });

// ROUTING BASED FROM THE NAME OF THE ROUTE FOR CONNECTING ONE ROUTE TO ANOTHER ROUTE
// Route::get('/test', function () {
//     $url = route('getjobs');
//     return "<a href='$url'>Click here!</a>";
// });

// ROUTING FOR PASSING JSON DATA
// Route::get('/api/users', function () {
//     return [
//         'name' => 'John Doe',
//         'email' => 'johndoe@gmail.com'
//     ];
// });
// =============================== SYNTAX 1 ========================================= //
