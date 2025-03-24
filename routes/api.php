<?php

use App\Http\Controllers\Api\EmployeeController;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employees', [EmployeeController::class,'index']);
Route::get('/employee/{id}', [EmployeeController::class,'show']);
Route::post('/employee/insert', [EmployeeController::class,'store']);
Route::put('/employee/{id}/update', [EmployeeController::class,'update']);
Route::delete('/employee/{id}/delete', [EmployeeController::class,'destroy']);