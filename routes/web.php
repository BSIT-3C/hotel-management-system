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
    Route::get('/home/employees', 'index')->middleware('auth');
    Route::get('/home/profile/{list}', 'show')->middleware('auth');
    Route::get('/home/edit/{list}', 'edit')->middleware('auth');
    Route::patch('/home/{list}', 'update')->middleware('auth');
    Route::delete('/home/delete/{list}', 'delete')->middleware('auth');
});

Route::controller(Daily_Time_RecordController::class)->group(function () {
    Route::get('/home/dtr', 'show')->name('home')->middleware('auth');
    Route::get('/home/profile/dtr/{list}', 'show_employee_dtr')->middleware('auth');
});

//guest info
Route::get('/guestinfo/guest-form', function () {
    return view('guest-information/Guest Information Form');
});

Route::get('/guestinfo/reservation', function () {
    return view('guest-information/Reservation');
});

Route::get('/guestinfo/reservation-list', function () {
    return view('guest-information/Reservation List');
});

Route::get('/guestinfo/blacklist', function () {
    return view('guest-information/Blacklist');
});

