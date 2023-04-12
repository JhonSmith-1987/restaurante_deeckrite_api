<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TypeUserController;
use App\Http\Controllers\UsersClientsController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// routes user client
Route::get('userClients', [UsersClientsController::class, 'getUserClients']);
Route::get('userClient/{id}', [UsersClientsController::class, 'getUserForId']);
Route::get('userClientForClient', [UsersClientsController::class, 'getUserForClient']);
Route::post('userClient', [UsersClientsController::class, 'postUserClient']);
Route::delete('userClient/{id}', [UsersClientsController::class, 'deleteUserClient']);
Route::put('userClient/{id}', [UsersClientsController::class, 'updateUserClient']);

// routes products
Route::get('products', [ProductsController::class, 'getProducts']);
Route::get('products/{id}', [ProductsController::class, 'getProductsForId']);
Route::get('productsForClient/{id}', [ProductsController::class, 'getProductsForClient']);
Route::get('productsForClientAndCategory/{client_id}/{category}', [ProductsController::class, 'getProductsForClientAndCategory']);
Route::post('product', [ProductsController::class, 'postProduct']);
Route::delete('product/{id}', [ProductsController::class, 'deleteProduct']);

// routes type user
Route::get('typeUsers', [TypeUserController::class, 'getTypeUser']);
Route::get('typeUser/{id}', [TypeUserController::class, 'getTypeUserForId']);
Route::post('typeUser', [TypeUserController::class, 'postTypeUser']);
Route::delete('typeUser/{id}', [TypeUserController::class, 'deleteTypeUser']);
Route::put('typeUser/{id}', [TypeUserController::class, 'updateTypeUser']);

// routes category
Route::get('categories', [CategoryController::class, 'getCategories']);
Route::get('categoriesForClient/{client_id}', [CategoryController::class, 'getCategoriesForClient']);
Route::post('category', [CategoryController::class, 'postCategory']);
