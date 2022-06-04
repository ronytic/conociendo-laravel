<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\Route as RoutingRoute;

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


Route::group(['prefix' => 'products'], function () {
    Route::post('create', [ProductController::class, 'create']);
    Route::get('list', [ProductController::class, 'list']);
    Route::get('show/{product}', [ProductController::class, 'show']);
    Route::delete('{product}', [ProductController::class, 'delete']);
    Route::put("{product}", [ProductController::class, 'update']);
});
// Route::prefix('products')->group(function () {
// });


// Route::post('products/create', [ProductController::class, 'create']);
// Route::get('products/list', [ProductController::class, 'list']);
// Route::get('products/show/{product}', [ProductController::class, 'show']);
// Route::delete('products/{product}', [ProductController::class, 'delete']);
// Route::put("products/{product}", [ProductController::class, 'update']);
