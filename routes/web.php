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
<<<<<<< HEAD
use App\Http\Controllers\JobController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AttendanceinfoController;
use App\Http\Controllers\ShiftsController;
use App\Models\Onboard;
use App\Http\Controllers\RandomController;
=======
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpController;
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f


use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\YtdController;
use App\Http\Controllers\ReportController;

use App\Http\Controllers\AttandanceController;
use App\Http\Controllers\StatusController;
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


<<<<<<< HEAD
Route::get('/employeshifts', function () {
   
    $data = DB::table('employes')->orderby('employeeid', 'ASC')->get();
    return view('employeshifts', compact('data'));
});

=======
Route::get('/viewinfo', function () {
    return view('viewinfo');
});

Route::get('/timeline', function () {
    return view('timeline');
});


Route::get('/holidays', function () {
    return view('holidays');
});

Route::get('/sample', function () {
    return view('sample');
});







Route::get('/settings', function () {
    return view('settings');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');
Route::post('/home', [HomeController::class, 'in'])->name('home') ;
Route::post('/signout', [HomeController::class, 'out']) ->name('signout');
    Route::get('/leave', [App\Http\Controllers\LeaveController::class, 'index'])->name('leave');



Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('user');


Route::get('/', [LoginController::class, 'index']) ->name('login');
Route::post('/', [LoginController::class, 'redirectTo']);

Route::get('/register', [RegisterController::class, 'index']) ->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/emp', EmpController::class);


Route::resource('/onboard', OnboardController::class)->middleware('admin');

Route::post('/logout', [LogoutController::class, 'store']) ->name('logout');

Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgot.password.get');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forgot.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/info', [InfoController::class, 'index']) ->name('info');

Route::get('/change-password', [PasswordController::class, 'changepassword']) ->name('change-password');
Route::post('/change-password', [PasswordController::class, 'updatepassword']) ->name('update-password');


Route::resource('/form', FormController::class);
Route::get('/payslip', [PayslipController::class, 'index']) ->name('payslip');
Route::resource('/ytd', YtdController::class);
Route::get('/report', [ReportController::class, 'index']) ->name('report');

Route::resource('customsearch', CustomSearchController::class);
Route::get('filter', [ProductController::class, 'filterProduct'])->name('filter');


Route::get('/admin.create', [SigninController::class, 'index']) ->name('admin.create');
Route::post('/admin.create', [SigninController::class, 'in'])->name('admin') ;


Route::post('/signout', [SigninController::class, 'out']) ->name('signout');

Route::get('/attendance', [AttandanceController::class, 'index']) ;
Route::get('/status', [StatusController::class, 'index']) ;

Route::post('/status', [StatusController::class, 'search']) ->name('status');

>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f

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


Route::get('/hello', function () {
    return view('hello');
});




Route::resource('task', TaskController::class);
// Route::get('/task', [TaskController::class, 'task']);
Route::get('/active/update', [TaskController::class, 'updateActive'])->name('update.active');


Route::resource('helpdesk', HelpdeskController::class);

Route::resource('/onboard', OnboardController::class);

Route::post('/logout', [LogoutController::class, 'store']) ->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


 Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('auth');

//     Route::get('/admin.create', [SigninController::class, 'index']) ->name('admin.create');
// Route::post('/admin.create', [SigninController::class, 'in'])->name('admin') ;

// Route::post('/signout', [SigninController::class, 'out']) ->name('signout');

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

<<<<<<< HEAD

Route::resource('hello', JobController::class);

// Route::get('/active/update', [JobController::class, 'updateActive'])->name('update.active');

Route::get('/change-password', [PasswordController::class, 'changepassword']) ->name('change-password');
Route::post('/change-password', [PasswordController::class, 'updatepassword']) ->name('update-password');

Route::get('/attendanceinfo', [AttendanceinfoController::class, 'index']);

=======
Route::get('/admin.create', [SigninController::class, 'index']) ->name('admin.create');
Route::post('/admin.create', [SigninController::class, 'in'])->name('admin') ;
Route::post('/signout', [SigninController::class, 'out']) ->name('signout');
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f


Route::resource('shifts', ShiftsController::class);
Route::get('shiftedit/{id}', [OnboardController::class, 'display']);
Route::put('shiftedit/{id}', [OnboardController::class, 'change']);

Route::get('random', [RandomController::class, 'index']);