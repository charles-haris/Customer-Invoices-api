<?php

use App\Http\Controllers\API\V1\CustomerController;
use App\Http\Controllers\API\V1\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::apiResource('customers', CustomerController::class);

    Route::prefix('auth/login')->group(function (){

    });

    Route::prefix('user')->group(function (){
        //Route::get('invoices', [InvoiceController::class, 'index']);
        Route::apiResource('invoices', InvoiceController::class);

    })->middleware('auth:sanctum');

});
