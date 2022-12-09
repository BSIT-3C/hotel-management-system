<?php

use App\Http\Controllers\AccountingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Daily_Time_RecordController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// frontdesk
Route::get('/frontdesk/dashboard', function () {
    return view('frontdesk/dashboard');
});

Route::get('/frontdesk/information', function () {
    return view('frontdesk/information');
});


// accounting
Route::prefix('accounting')->group(function () {
    Route::get('home', [AccountingController::class, 'index']);

    Route::get('payrolls', [AccountingController::class, 'payrolls']);
    Route::post('payrollEdit/{employee_payrolls}', [AccountingController::class, 'payrollEdit']);
    Route::get('payrollPrint/{employee_payrolls}', [AccountingController::class, 'payrollPrint']);

    Route::get('revenueEdit', [AccountingController::class, 'revenueEdit']);
    Route::get('revenuePrint', [AccountingController::class, 'revenuePrint']);

    Route::get('expensesEdit', [AccountingController::class, 'expensesEdit']);
    Route::get('expensesPrint', [AccountingController::class, 'expensesPrint']);
});


//employee
Route::controller(UserController::class)->group(function() {
    Route::post('/registration', 'store');
    Route::post('/login/auth', 'login');
});

Route::controller(EmployeeController::class)->group(function() {
    Route::get('/employee_information_system/employees', 'index')->middleware('auth');
    Route::get('/employee_information_system/profile/{list}', 'show')->middleware('auth');
    Route::get('/employee_information_system/edit/{list}', 'edit')->middleware('auth');
    Route::patch('/employee_information_system/{list}', 'update')->middleware('auth');
    Route::delete('/employee_information_system/delete/{list}', 'delete')->middleware('auth');
});

Route::controller(Daily_Time_RecordController::class)->group(function () {
    Route::get('/employee_information_system/dtr', 'show')->name('employee_information_system')->middleware('auth');
    Route::get('/employee_information_system/profile/dtr/{list}', 'show_employee_dtr')->middleware('auth');
    Route::get('/employee_information_system/record/{number}', 'store')->middleware('auth');
});

//guest info
Route::get('/guestinfo/blacklist', function () {
    return view('guest-information.blacklist');
});
Route::get('/guestinfo/guest-card-foreign', function () {
    return view('guest-information.guest_card_(Foreign)');
});
Route::get('/guestinfo/guest-card-local', function () {
    return view('guest-information.guest_card_(local)');
});
Route::get('/guestinfo/guest-card-form', function () {
    return view('guest-information.guest_card_form');
});
Route::get('/guestinfo/guest-form', function () {
    return view('guest-information.guest_information_form');
});
Route::get('/guestinfo/guest-list', function () {
    return view('guest-information.guest_list');
});
Route::get('/guestinfo/reservation-form', function () {
    return view('guest-information.reservation_form');
});
Route::get('/guestinfo/reservation-list', function () {
    return view('guest-information.reservation_list');
});

