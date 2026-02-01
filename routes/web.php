<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
// use Illuminate\Http\Request; // used in syntax 3 to syntax 5

// FOR THE MAIN PAGE
Route::get('/', [HomeController::class, 'index']);

// FOR THE JOB PAGE
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{id}', [JobController::class, 'show']); // this should be below the /jobs/create and for future references
Route::post('/jobs', [JobController::class, 'store']); // for post, it is okay to have same directory as long as different params

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

// =============================== SYNTAX 2 ========================================= //
// SIMPLE PASSING OF PARAMETER THROUGH ANY PARAMETERS
// Route::get('/posts/{id}', function (string $id) {
//     return 'Post ' . $id;
// });

// PASSING OF PARAMETER THAT ACCEPTS ONLY INTEGER
// Route::get('/intonly/{id}', function (string $id) {
//     return 'Post ' . $id;
// }); // with global routing, can be found in AppServiceProvider
// })->whereNumber('id'); // shortcut
// })->where('id', '[0-9]+'); // for longer syntax

// PASSING OF PARAMETER THAT ACCEPTS ONLY STRING
// Route::get('/stringonly/{name}', function (string $name) {
//     return 'Post ' . $name;
// }); // with global routing, can be found in AppServiceProvider
// })->whereAlpha('id'); // shortcut
// })->where('id', '[a-zA-z]+'); // for longer syntax

// PASSING OF MULTIPLE PARAMETERS
// Route::get('/posts/{id}/comments/{commentId}', function (string $id, string $commentId) {
//     return 'Post ' . $id . ' Comments ' . $commentId;
// });
// =============================== SYNTAX 2 ========================================= //

// =============================== SYNTAX 3 ========================================= //
// FOR PROCESSING THE REQUEST USE
// Route::get('/test', function (Request $request) {
//     return [
//         'method' => $request->method(),
//         'url' => $request->url(),
//         'path' => $request->path(),
//         'fullUrl' => $request->fullUrl(),
//         'ip' => $request->ip(),
//         'userAgent' => $request->userAgent(),
//         'header' => $request->header()
//     ];
// });

// FOR QUERY PARAMS ACQUIRING DATA
// Route::get('/users', function (Request $request) {
//     return $request->query('name');
// });

// FOR QUERY PARAMS ACQUIRING MULTIPLE DATA
// Route::get('/users', function (Request $request) {
//     return $request->only(['name', 'age']);
// });

// FOR QUERY PARAMS ACQURING ALL DATA
// Route::get('/users', function (Request $request) {
//     return $request->all();
// });

// FOR QUERY PARAMS CHECKING IF THERE IS DATA OR NOT, IT IS IN BOOLEAN FORM
// Route::get('/users', function (Request $request) {
//     return $request->has('name');
// });

// FOR QUERY PARAMS THAT WILL WORK BOTH IN URL AND INPUT FORM FIELDS
// Route::get('/users', function (Request $request) {
//     return $request->input('name', 'Default Name'); // second parameter is for setting default value
// });

// FOR QUERY PARAMS THAT WILL PROVIDE AN EXCEPTION TO NOT BE INCLUDED IN THE RETURN REQUEST
// Route::get('/users', function (Request $request) {
//     return $request->except(['name']);
// });
// =============================== SYNTAX 3 ========================================= //

// =============================== SYNTAX 4 ========================================= //
// FOR RESPONSE HELPER
// Route::get('/test', function () {
//     return response('Hello World', 200);
// });

// FOR PAGE NOT FOUND OR ERROR IN THE WEBPAGE
// Route::get('notfound', function () {
//     return response('Page Not Found', 404); // the second parameter is for the status
// });

// FOR HEADER RESPONSE
// Route::get('/test', function () {
//     return response('<h1>Hello World</h1>', 200)->header('Content-Type', 'text/plain'); // for plain header
//     // return response('<h1>Hello World</h1>', 200)->header('Content-Type', 'text/html'); // for html header
// });

// FOR RESPONSE JSON
// Route::get('/test', function () {
//     return response()->json(['name' => 'John Doe']);
// });

// FOR SETTING VALUE TO COOKIES
// Route::get('/test', function () {
//     return response()->json(['name' => 'John Doe'])->cookie('name', 'John Doe');
// });

// FOR DOWNLOADING FILES, ANY FILES
// Route::get('/download', function () {
//     return response()->download(public_path('favicon.ico'));
// });

// FOR CHECKING IF THERE IS COOKIE
// Route::get('/read-cookie', function (Request $response) {
//     $cookieValue = $response->cookie('name');
//     return response()->json(['cookie' => $cookieValue]);
// });
// =============================== SYNTAX 4 ========================================= //

// =============================== SYNTAX 5 ========================================= //
// BEFORE CONTROLLER METHOD

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/jobs', function () {
// return view('jobs.index')->with('title', 'Available Jobs'); // for more simpler passing of data
// return view('jobs.index', [
//     'title' => 'Available Jobs'
// ]); // for more complex, if want to pass multiple data
// })->name('jobs');

// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// })->name('create');
// =============================== SYNTAX 5 ========================================= //