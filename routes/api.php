<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
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

Route::apiResource('product', ProductController::class)->only([
    'index', 'show'
]);

Route::get('review', [ReviewController::class, 'index']);

Route::apiResource('shop', ShopController::class)->only([
    'index', 'show'
]);

Route::get('cart', [CartController::class, 'index']);
Route::get('cart-item', [CartItemController::class, 'index']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Route::post('user/{user}/shop', [ShopController::class, 'shop']);

});
