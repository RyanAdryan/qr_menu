<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// TESTER BIASA
// Route::get('/hello', function (){
//     return "Hello QRMENU";
// });

// DASHBOARD
Route::get('/', [DashboardController::class, 'index']);

// TESTER WITH APP.BLADE dari views
Route::get('/hello', function (){
    return view('test.hello');
});

// routing ke category controller
Route::get('/category', [CategoryController::class, 'index']);
// create category
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
// update / edit category
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'update']);
// Delete category
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);


// menus controller
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/create', [MenuController::class, 'create']);
Route::post('/menu/store', [MenuController::class, 'store']);
// update / edit menu
Route::get('/menu/edit/{id}', [MenuController::class, 'edit']);
Route::post('/menu/update/{id}', [MenuController::class, 'update']);
// Delete menu
Route::get('/menu/delete/{id}', [MenuController::class, 'destroy']);