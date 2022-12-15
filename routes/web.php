<?php

use App\Http\Controllers\AccountingController;
use App\Http\Controllers\BlacklistController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HousekeepingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Daily_Time_RecordController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ReservationController;
use App\Models\Blacklist;
use App\Models\Reservation;
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
// test
Route::controller(UserController::class)->group(function () {
    Route::post('/registration', 'store');
    Route::post('/login/auth', 'login');
});

Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employee_information_system/employees', 'index')->middleware('auth');
    Route::get('/employee_information_system/profile/{list}', 'show')->middleware('auth');
    Route::get('/employee_information_system/edit/{list}', 'edit')->middleware('auth');
    Route::patch('/employee_information_system/{list}', 'update')->middleware('auth');
    Route::delete('/employee_information_system/delete/{list}', 'delete')->middleware('auth');
});

Route::controller(Daily_Time_RecordController::class)->group(function () {
    Route::get('/employee_information_system/dtr', 'show')->middleware('auth');
    Route::get('/employee_information_system/profile/dtr/{employee}', 'show_employee_dtr')->middleware('auth');
    Route::post('/employee_information_system/record/timeIn', 'timeIn')->middleware('auth');
    Route::post('/employee_information_system/record/timeOut', 'timeOut')->middleware('auth');
});


//guest info



// GUEST-INFO
Route::prefix('guestinfo')->group(function () {
    Route::get('guest-form', [ReservationController::class, 'form'])->middleware('auth');;
    Route::get('reservation', [ReservationController::class, 'reservation'])->middleware('auth');;
    Route::post('reservation/save', [ReservationController::class, 'store'])->middleware('auth');;
    Route::get('reservation/result', [ReservationController::class, 'result'])->name('result')->middleware('auth');;


    // TODOS: BACKEND
    Route::get('reservation/list', [ReservationController::class, 'list']);

    // Blacklist
    Route::get('blacklist', [BlacklistController::class, 'index']);
    Route::put('blacklist/store', [BlacklistController::class, 'store']);
    Route::get('blacklist/form', [BlacklistController::class, 'form']);
    Route::delete('blacklist/delete/{blacklist}', [BlacklistController::class, 'delete']);
    Route::get('blacklist/update/form/{blacklist}', [BlacklistController::class, 'update_form']);
    Route::patch('blacklist/update/{blacklist}', [BlacklistController::class, 'update']);
    // End Blacklist Route

    // Guest Card
    Route::get('guest-card-foreign', function () {
        return view('guest-information.guest_card_(Foreign)');
    });
    Route::get('guest-card-local', function () {
        return view('guest-information.guest_card_(local)');
    });
    Route::get('guest-card-form', function () {
        return view('guest-information.guest_card_form');
    });

    // Guest List
    Route::get('guest-list', function () {
        return view('guest-information.guest_list');
    });
});


 //housekeeping
 Route::controller(HousekeepingController::class)->group(function () {
    
    Route::delete('/housekeeping/lostandfound/delete/{id}', 'process_delete_lostandfound')->middleware('auth');
    Route::get('/housekeeping/manage', 'show_manage')->middleware('auth')->name('manage-page');
    Route::get('/housekeeping/viewall', 'show_rooms')->middleware('auth')->name('viewall-page');
    Route::get('/housekeeping/lostandfound', 'show_lostandfound')->middleware('auth')->name('lostandfound-page');
    Route::get('/housekeeping/assign', 'show_assign_housekeeper')->middleware('auth')->name('assign-page');

    Route::get('/housekeeping/viewall/{id}', 'view_single_room')->middleware('auth');

    Route::get('/housekeeping/lostandfound/{id}', 'update_lostandfound')->middleware('auth');
    Route::post('/housekeeping/lostandfound-process_update/{id}', 'process_update_lostandfound')->middleware('auth');
    Route::post('/housekeeping/lostandfound', 'create_lostandfound')->middleware('auth');

    Route::get('/housekeeping/manage/{id}', 'update_manage')->middleware('auth');
    Route::post('/housekeeping/manage-process_update/{id}', 'process_update_manage')->middleware('auth');

 });
 
Auth::routes();

Route::get('/housekeeping/home', [App\Http\Controllers\HousekeepingController::class, 'index']);