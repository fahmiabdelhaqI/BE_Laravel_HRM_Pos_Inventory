<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//login
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

//logout
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

//roles
Route
::apiResource('/roles', App\Http\Controllers\Api\RoleController::class)->middleware('auth:sanctum');

//departments
Route::apiResource('/departments', App\Http\Controllers\Api\DepartmentController::class)->middleware('auth:sanctum');

//designation
Route::apiResource('/designations', App\Http\Controllers\Api\DesignationController::class)->middleware('auth:sanctum');

//shifts
Route::apiResource('/shifts', App\Http\Controllers\Api\ShiftController::class)->middleware('auth:sanctum');

//basic salaries
Route::apiResource('/basic-salaries', App\Http\Controllers\Api\BasicSalaryController::class)->middleware('auth:sanctum');

//holidays
Route::apiResource('/holidays', App\Http\Controllers\Api\HolidayController::class)->middleware('auth:sanctum');
