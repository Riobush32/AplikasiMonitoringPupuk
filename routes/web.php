<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\EstateController;

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

Route::get('/', function () {
    return view('page.home');
});

Route::get('/page2', function () {
    return view('page.page2');
});


// estate route 

Route::get('/estate', [EstateController::class, 'index']);
Route::post('/estate', [EstateController::class, 'create']);
Route::patch('/estate/{id}/update', [EstateController::class, 'update']);
Route::delete('/estate/{id}/destroy', [EstateController::class, 'destroy']);

// Field Route

Route::get('/estate/{id}', [FieldController::class, 'index']);
Route::post('/field', [FieldController::class, 'create']);
Route::patch('field/{id}/update', [FieldController::class, 'update']);
Route::delete('/field/{id}/destroy', [FieldController::class, 'destroy']);
