<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/login', [AuthController::class, 'showClientLoginPage']);

Route::get('/admin/login', [AuthController::class, 'showAdminLoginPage']);

Route::get('/admin/app', [AdminController::class, 'showAdminDashboard']);

Route::post('/filterLoginMethod', [AuthController::class, 'filterValidateLoginMethod']);
