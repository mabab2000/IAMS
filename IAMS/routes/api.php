<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controller\Auth\LoginAuthController;
use App\Http\Controller\RequestsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('add_role', [RoleController::class, 'store']);
Route::post('store-student',[StudentsController::class,'store_student']);
Route::post('add_department',[DepartmentController::class,'store']);
Route::post('add_user',[UserController::class,'store']);
Route::put('update_student/{id}',[StudentsController::class,'student_update']);
Route::put('view_student',[StudentsController::class,'student_view']);
Route::get('delete_student/{id}',[StudentsController::class,'student_delete']);
Route::post('login',[LoginAuthController::class,'login']);
Route::post('add_request',[RequestsController::class,'store']);