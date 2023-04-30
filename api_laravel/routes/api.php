<?php

// use App\Http\Controllers\InvoicesController;
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

//  api/vi
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Ccontrollers\Api\V1' ], function(){
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoicesController::class);

});
