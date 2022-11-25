<?php

use App\Http\Controllers\AccountingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;

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

// Auth::routes();

// frontdesk
Route::get('/frontdesk/dashboard', function () {
    return view('frontdesk/dashboard');
});

Route::get('/frontdesk/information', function () {
    return view('frontdesk/information');
});


// accounting
Route::get('/accounting/payrollEdit/{position}', [AccountingController::class, 'payrollEdit']);

Route::get('/accounting/payrollPrint/{position}', [AccountingController::class, 'payrollPrint']);

Route::get('/accounting/revenueEdit', [AccountingController::class, 'revenueEdit']);

Route::get('/accounting/revenuePrint', [AccountingController::class, 'revenuePrint']);

Route::get('/accounting/expensesEdit', [AccountingController::class, 'expensesEdit']);

Route::get('/accounting/expensesPrint', [AccountingController::class, 'expensesPrint']);

Route::get('/accounting/home', [AccountingController::class, 'index']);