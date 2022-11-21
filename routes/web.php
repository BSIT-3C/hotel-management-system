<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/accounting/payrollEdit', function () {
    return view('/accounting_information_system/payrollEdit');  
});

Route::get('/accounting/payrollPrint', function () {
    return view('/accounting_information_system/payrollPrint');  
});

Route::get('/accounting/revenueEdit', function () {
    return view('/accounting_information_system/revenueEdit');  
});

Route::get('/accounting/revenuePrint', function () {
    return view('/accounting_information_system/revenuePrint');  
});

Route::get('/accounting/expensesEdit', function () {
    return view('/accounting_information_system/expensesEdit');
});

Route::get('/accounting/expensesPrint', function () {
    return view('/accounting_information_system/expensesPrint');
});

Route::get('/accounting/home', function () {
    return view('/accounting_information_system/home');
});