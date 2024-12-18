<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InventoryController;


Route::get('/', [OrderController::class, 'index']);


Route::get('/order', [OrderController::class, 'order_view']);
Route::post('/order', [OrderController::class, 'store']);
Route::get('/orderEdit/{id}',[OrderController::class, 'edit'] );
Route::post('/orderUpdate/{id}', [OrderController::class, 'update']);


Route::get('/inventory', [InventoryController::class, 'inventory_view']);
Route::post('/inventory', [InventoryController::class, 'store']);
Route::get('/inventoryEdit/{id}',[InventoryController::class, 'edit'] );
Route::post('/inventoryEdit/{id}', [InventoryController::class, 'update']);

Route::get('/orderDelete/{id}',[OrderController::class,'delete']);
Route::get('/inventoryDelete/{id}', [InventoryController::class, 'delete']);
