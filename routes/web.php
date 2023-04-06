<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ManageLeavesController;
use App\Http\Controllers\MyAttendanceController;
use App\Http\Controllers\SystemReportController;
use App\Http\Controllers\StudentReportController;
use App\Http\Controllers\ManageAttendanceController;
use App\Http\Controllers\UserAttendanceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MakrAllAttendance;



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
    return view('home');
});


Auth::routes([
    'verify'=>true
]);

Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/admin', function () {
        return view('admin');
    });
});

// auth routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// users
Route::resource('index', AttendanceController::class);
Route::resource('requestleave',LeaveController::class); 
Route::resource('myattendance',MyAttendanceController::class);
Route::resource('attendance',UserAttendanceController::class);
Route::resource('users',UserController::class);

// Route::resource('users', 'UserController');


// admin
Route::resource('studentreport',StudentReportController::class);
Route::resource('systemreport',SystemReportController::class);
Route::post('/report',[SystemReportController::class,'report'])->name('report');
Route::get('/month',[SystemReportController::class,'mutualReport'])->name('month');
Route::post('/singlereport',[StudentReportController::class,'report'])->name('singlereport');
Route::resource('manageleaves',ManageLeavesController::class);
Route::resource('markall',MakrAllAttendance::class);
Route::resource('manageattendance',ManageAttendanceController::class);
Route::resource('myattendance',MyAttendanceController::class);

