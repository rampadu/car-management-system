<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\Setup\CarClassController;
use App\Http\Controllers\Backend\Setup\CarYearController;
use App\Http\Controllers\Backend\Setup\FeeCategoryController;
use App\Http\Controllers\Backend\Setup\FeeAmountController;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {    
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

Route::get('/admin/login', [AdminController::class, 'Login'])->name('admin.login');

//User Management All Routes

Route::prefix('users')->group(function(){  

Route::get('/view', [UserController::class, 'UserView'])->name('user.view')->middleware("Cors");
Route::get('/add', [UserController::class, 'UserAdd'])->name('users.add');
Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');

});

//User Profile and Change Password
Route::prefix('profile')->group(function(){  

    Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
    Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
    Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
    Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');  
    Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update'); 

    });

//Setup Management
Route::prefix('setups')->group(function(){  

    // Car Class Routes
    Route::get('car/class/view', [CarClassController::class, 'ViewCar'])->name('car.class.view');
    Route::get('car/class/add', [CarClassController::class, 'CarClassAdd'])->name('car.class.add');
    Route::post('car/class/store', [CarClassController::class, 'CarClassStore'])->name('store.car.class');
    Route::get('car/class/edit/{id}', [CarClassController::class, 'CarClassEdit'])->name('car.class.edit');
    Route::post('car/class/update/{id}', [CarClassController::class, 'CarClassUpdate'])->name('car.class.update');
    Route::get('car/class/delete/{id}', [CarClassController::class, 'CarClassDelete'])->name('car.class.delete');
    
    // Car YearModel Routes
    Route::get('car/year/view', [CarYearController::class, 'ViewYear'])->name('car.year.view');
    Route::get('car/year/add', [CarYearController::class, 'CarYearAdd'])->name('car.year.add');
    Route::post('car/year/store', [CarYearController::class, 'CarYearStore'])->name('store.car.year');
    Route::get('car/year/edit/{id}', [CarYearController::class, 'CarYearEdit'])->name('car.year.edit');
    Route::post('car/year/update/{id}', [CarYearController::class, 'CarYearUpdate'])->name('car.year.update');
    Route::get('car/year/delete/{id}', [CarYearController::class, 'CarYearDelete'])->name('car.year.delete');

    // Fee Category Routes
    Route::get('fee/category/view', [FeeCategoryController::class, 'ViewFeeCat'])->name('fee.category.view');
    Route::get('fee/category/add', [FeeCategoryController::class, 'FeeCatAdd'])->name('fee.category.add');
    Route::post('fee/category/store', [FeeCategoryController::class, 'FeeCatStore'])->name('store.fee.category');
    Route::get('fee/category/edit/{id}', [FeeCategoryController::class, 'FeeCatEdit'])->name('fee.category.edit');
    Route::post('fee/category/edit/{id}', [FeeCategoryController::class, 'FeeCatUpdate'])->name('update.fee.category');
    Route::get('fee/category/delete/{id}', [FeeCategoryController::class, 'FeeCatDelete'])->name('fee.category.delete');

    // Fee Category Amount Route
    Route::get('fee/amount/view', [FeeAmountController::class, 'ViewFeeAmount'])->name('fee.amount.view');
    Route::get('fee/amount/add', [FeeAmountController::class, 'AddFeeAmount'])->name('fee.amount.add');
    Route::post('fee/amount/store', [FeeAmountController::class, 'StoreFeeAmount'])->name('store.fee.amount');
    Route::get('fee/amount/edit/{fee_category_id}', [FeeAmountController::class, 'EditFeeAmount'])->name('fee.amount.edit');
    Route::post('fee/amount/update/{fee_category_id}', [FeeAmountController::class, 'UpdateFeeAmount'])->name('update.fee.amount');

    });    