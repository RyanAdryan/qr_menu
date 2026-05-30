<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

// TESTER BIASA
// Route::get('/hello', function (){
//     return "Hello QRMENU";
// });

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

