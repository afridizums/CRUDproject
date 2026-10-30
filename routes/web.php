<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::View('/add-employee','add-employees');
Route::Post('/add-employee',[EmployeeController::class,'add']);
Route::Get('/show-employee',[EmployeeController::class,'show']);


Route::get('/', function () {
    return view('welcome');
});
