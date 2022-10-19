<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\OnboardController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('feeds');
});

// Route::get('/tasks', function () {
//     return view('tasks');
// });

Route::get('/review', function () {
    return view('review');
});

Route::get('/documentcenter', function () {
    return view('documentcenter');
});

Route::get('/people', function () {
    return view('people');
});

// Route::get('/helpdesk', function () {
//     return view('helpdesk');
// });

Route::get('/attendanceinfo', function () {
    return view('attendanceinfo');
});

Route::get('/layout', function () {
    return view('layout');
});



Route::get('/leave', function () {
    return view('leave');
});

Route::get('/leavebalance', function () {
    return view('leavebalance');
});

Route::get('/leavecalendar', function () {
    return view('leavecalendar');
});

Route::get('/holidaycalendar', function () {
    return view('holidaycalendar');
});

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/demo', function () {
    return view('demo');
});



// Route::get('/onboard', function () {
//     return view('onboard');
// });

// Route::get('/empdetails', function () {
//     return view('empdetails');
// });


Route::resource('task', TaskController::class);
Route::resource('helpdesk', HelpdeskController::class);
Route::resource('onboard', OnboardController::class);
