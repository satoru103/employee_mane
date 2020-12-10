<?php

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


Route::get('/',[EmployeeController::class,'index'])->name('index');
Route::get('/employee/{id}',[EmployeeController::class,'detail'])->name('detail');
Route::get('/employee/create',[EmployeeController::class,'create'])->name('create');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
