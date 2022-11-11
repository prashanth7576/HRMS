<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\OnboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\EmployementController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\SearchController;

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



Route::get('/feeds', function () {
    return view('feeds');
});


Route::get('/review', function () {
    return view('review');
});

Route::get('/documentcenter', function () {
    return view('documentcenter');
});

Route::get('/people', function () {
    return view('people');
});



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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/info', function () {
    return view('info');
});



Route::get('/settings', function () {
    return view('settings');
});

Route::get('/timeline', function () {
    return view('timeline');
});


Route::get('/holidays', function () {
    return view('holidays');
});

Route::get('/payslip', function () {
    return view('payslip');
});

Route::get('/ytd', function () {
    return view('ytd');
});



Route::resource('task', TaskController::class);
Route::resource('helpdesk', HelpdeskController::class);

Route::resource('/onboard', OnboardController::class);

Route::post('/logout', [LogoutController::class, 'store']) ->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('auth');

    Route::get('/', [LoginController::class, 'index']) ->name('login');
Route::post('/', [LoginController::class, 'redirectTo']);

Route::get('/register', [RegisterController::class, 'index']) ->name('register');
Route::post('/register', [RegisterController::class, 'store']);





Route::get('/data', [DataController::class, 'index']);

Route::get('/sample', [SampleController::class, 'index']);
Route::post('/sample', [SampleController::class, 'upload']);

Route::get('/download/{file}', [SampleController::class, 'download']);
Route::get('/downloads/{aadhaar}', [SampleController::class, 'downloads']);
Route::get('/view/{id}', [SampleController::class, 'view']);

Route::resource('employement', EmployementController::class);

Route::get('/permanentaddress/{permanentaddress}', [EmployementController::class, 'permanentaddress']);
Route::get('/presentaddress/{presentaddress}', [EmployementController::class, 'presentaddress']);
Route::get('/qualification/{qualificationdetails}', [EmployementController::class, 'qualification']);
Route::get('/previousemployement/{previousemployement}', [EmployementController::class, 'previousemployement']);
Route::get('/bankaccountdetails/{bankaccount}', [EmployementController::class, 'bankaccountdetails']);
Route::get('/permanentaccountnumber/{permanentaccountnumber}', [EmployementController::class, 'permanentaccountnumber']);
Route::get('/aadhaar/{aadhaar}', [EmployementController::class, 'aadhaar']);
Route::get('/passport/{passport}', [EmployementController::class, 'passport']);


Route::resource('leave', LeaveController::class);
Route::get('/review', [LeaveController::class, 'display']);
Route::get('/pending/{id}', [LeaveController::class, 'pending']);

Route::get('/approved/{id}', [LeaveController::class, 'approved']);
Route::get('/canceled/{id}', [LeaveController::class, 'canceled']);

Route::get('/pending', function () {
    return view('pending');
});

Route::get('/leavehistory', function () {
    return view('leavehistory');
});

Route::get('/leavehistory', [LeaveController::class, 'leavehistory']);




