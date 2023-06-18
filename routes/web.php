<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EatableController;
use App\Http\Controllers\OrderController;

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

Route::get('/register', [AuthController::class, 'showClientRegisterPage']);

Route::get('/admin/login', [AuthController::class, 'showAdminLoginPage']);

Route::get('/admin/app', [AdminController::class, 'showAdminDashboard']);

Route::get('/client/app', [ClientController::class, 'showClientDashboard']);

Route::get('/admin/category', [CategoryController::class, 'showAddCategoryPage']);

Route::get('/admin/eatable', [EatableController::class, 'showManageEatablePage']);

Route::post('/filterLoginMethod', [AuthController::class, 'filterValidateLoginMethod']);

Route::post('/addNewCategory', [CategoryController::class, 'addNewCatgeory']);

Route::post('/addNewEatable', [EatableController::class, 'addNewEatable']);

Route::post('/registerNewCustomer', [AuthController::class, 'registerNewCustomerDetails']);

Route::get('/client/eatables', [ClientController::class, 'showOrderEatablesPage']);

Route::get('/client/cart', [CartController::class, 'showCartPage']);

Route::post('/client/addItemToCart', [CartController::class, 'addItemToCart']);

Route::post('/client/placeNewOrder', [OrderController::class, 'placeNewOrder']);

Route::get('/client/orders', [OrderController::class, 'showClientManageOrdersPage']);

Route::get('/client/orderItems/{orderId}', [OrderController::class, 'showOrderItemsPage']);

Route::get('/admin/orders', [OrderController::class, 'showOrderRequestPageAdmin']);

Route::get('/admin/orderItems/{orderId}', [OrderController::class, 'showAdminOrderItemsPage']);

Route::post('/admin/changeOrderStatus', [OrderController::class, 'changeOrderStatus']);