<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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




Route::get('/user', [RegisterController::class,'showRegistrationForm'])->name('user.register');
Route::post('/user/register',[RegisterController::class,'register'])->name('user.exec.register');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/',[EmployeeController::class,'index'])->name('index');
    Route::get('/employee/create',[EmployeeController::class,'create'])->name('create');
    Route::post('/employee/store',[EmployeeController::class,'store'])->name('store');
    Route::get('/employee/{id}',[EmployeeController::class,'detail'])->name('detail');
    Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('edit');
    Route::post('/employee/update',[EmployeeController::class,'update'])->name('update');
    Route::post('/employee/delete/{id}',[EmployeeController::class,'destroy'])->name('destroy');

    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
});

Auth::routes();
