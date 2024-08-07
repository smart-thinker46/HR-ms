<?php

use Illuminate\Support\Facades\Route;

/** for side bar menu active */
function set_active($route) {
    if (is_array($route )){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}
/** for side bar menu show */
function set_show($route) {
    if (is_array($route )){
        return in_array(Request::path(), $route) ? 'show' : '';
    }
    return Request::path() == $route ? 'show' : '';
}

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('dashboard.home');
    });
    Route::get('home',function()
    {
        return view('dashboard.home');
    });
});

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Auth'],function()
{
    // -----------------------------login----------------------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('logout/page', 'logoutPage')->name('logout/page');
    });

    // ------------------------------ register ----------------------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/register','storeUser')->name('register');    
    });

    // ----------------------------- forget password ----------------------------//
    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('forget-password', 'getEmail')->name('forget-password');
        Route::post('forget-password', 'postEmail')->name('forget-password');    
    });

    // ----------------------------- reset password -----------------------------//
    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('reset-password/{token}', 'getPassword');
        Route::post('reset-password', 'updatePassword');    
    });
});

Route::group(['namespace' => 'App\Http\Controllers'],function()
{
    // -------------------------- main dashboard ----------------------//
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'index')->middleware('auth')->name('home');
    });

    // -------------------------- pages ----------------------//
    Route::controller(AccountController::class)->group(function () {
        Route::get('page/account', 'index')->middleware('auth')->name('page/account');
    });

    // -------------------------- hr ----------------------//
    Route::controller(HRController::class)->group(function () {
        Route::get('hr/employee/list', 'employeeList')->middleware('auth')->name('hr/employee/list');
        Route::post('hr/employee/save', 'employeeSaveRecord')->middleware('auth')->name('hr/employee/save'); // save employee record
        Route::post('hr/employee/update', 'employeeUpdateRecord')->middleware('auth')->name('hr/employee/update'); // update employee record
        Route::post('hr/employee/delete', 'employeeDeleteRecord')->middleware('auth')->name('hr/employee/delete'); // delete employee record
        Route::get('hr/holidays/page', 'holidayPage')->middleware('auth')->name('hr/holidays/page');
        Route::post('hr/holidays/save', 'holidaySaveRecord')->middleware('auth')->name('hr/holidays/save'); // save or update record
        Route::post('hr/holidays/delete', 'holidayDeleteRecord')->middleware('auth')->name('hr/holidays/delete'); // delete record
        Route::get('hr/leave/employee/page', 'leaveEmployee')->middleware('auth')->name('hr/leave/employee/page');
        Route::get('hr/create/leave/employee/page', 'createLeaveEmployee')->middleware('auth')->name('hr/create/leave/employee/page');
        Route::get('hr/leave/hr/page', 'leaveHR')->middleware('auth')->name('hr/leave/hr/page');
        Route::get('hr/attendance/page', 'attendance')->middleware('auth')->name('hr/attendance/page');
        Route::get('hr/create/leave/hr/page', 'createLeaveHR')->middleware('auth')->name('hr/create/leave/hr/page');
        Route::get('hr/attendance/main/page', 'attendanceMain')->middleware('auth')->name('hr/attendance/main/page');
        Route::get('hr/department/page', 'department')->middleware('auth')->name('hr/department/page');
        Route::post('hr/department/save', 'saveRecorddepartment')->middleware('auth')->name('hr/department/save');
        Route::post('hr/department/delete', 'deleteRecorddepartment')->middleware('auth')->name('hr/department/delete');
    });
});


