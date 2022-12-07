<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\DepartmentController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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

    Route::middleware(['auth'])->group(function(){
    Route::get('',[InventoryController:: class, 'redirect'])->name('dashboard');
    Route::get('/edit_inventory/{id}',[InventoryController::class, 'edit'])->name('editinventory');
    Route::post('/update_inventory/{id}',[InventoryController::class, 'update'])->name('updateinventory');
    Route::get('/delete_inventory/{id}',[InventoryController::class, 'delete_inventory'])->name('deleteinventory');
    Route::get('/dashboard',[InventoryController:: class, 'index'])->name('dashboard');
    Route::get('/addinventory',[InventoryController::class, 'addinventory']);
    Route::get('/inventory',[InventoryController::class, 'manage_inventory'])->middleware('auth');
    Route::get('/expired_inventory',[InventoryController::class, 'expired_inventory'])->middleware('auth');
    Route::get('/remove.inventory',[InventoryController::class, 'remove_inventory']);
    Route::get('/adjust.inventory',[InventoryController::class, 'adjust_inventory']);
    Route::post('/saveinventory', [InventoryController::class, 'save_inventory'])->name('saveinventory');
    

    //resourse route for the department
    Route::resource('/departments', DepartmentController::class);
    

    //route for inventory report
    Route::get('/inventory-reports', [InventoryController::class, 'invtoryreport'])->name('inventory-report');

});


