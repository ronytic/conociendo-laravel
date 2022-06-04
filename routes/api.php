<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PassportController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\BuyProductController;

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


Route::post('register', [PassportController::class, 'register']);
Route::post('login', [PassportController::class, 'login']);


Route::group(['prefix' => 'products', 'middleware' => 'auth:api'], function () {
    Route::post('create', [ProductController::class, 'create']);
    Route::get('list', [ProductController::class, 'list']);
    Route::get('show/{product}', [ProductController::class, 'show']);
    Route::delete('{product}', [ProductController::class, 'delete']);
    Route::put("{product}", [ProductController::class, 'update']);
});

Route::middleware('auth:api')->prefix('buys')->group(function () {
    Route::apiResource("products", BuyProductController::class);
});







// Route::post('products/create', [ProductController::class, 'create']);
// Route::get('products/list', [ProductController::class, 'list']);
// Route::get('products/show/{product}', [ProductController::class, 'show']);
// Route::delete('products/{product}', [ProductController::class, 'delete']);
// Route::put("products/{product}", [ProductController::class, 'update']);
