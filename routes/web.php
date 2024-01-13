<?php

use App\Http\Controllers\DataPemupukanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\SemesterController;
use App\Models\DataPemupukan;

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

Route::get('/estate', [EstateController::class, 'index'])->name('estate');
Route::post('/estate', [EstateController::class, 'create']);
Route::patch('/estate/{id}/update', [EstateController::class, 'update']);
Route::delete('/estate/{id}/destroy', [EstateController::class, 'destroy']);

// devisi route

Route::get('/estate/{id}', [DivisiController::class, 'index']);
Route::post('/divisi', [DivisiController::class, 'create']);
Route::patch('/divisi/{id}/update', [DivisiController::class, 'update']);
Route::delete('divisi/{id}/destroy', [DivisiController::class, 'destroy']);

// Field Route

Route::get('/divisi/{id}', [FieldController::class, 'index'])->name('field');
Route::post('/field', [FieldController::class, 'create']);
Route::patch('field/{id}/update', [FieldController::class, 'update']);
Route::delete('/field/{id}/destroy', [FieldController::class, 'destroy']);

//semester Route 

Route::get('/field/{id}', [SemesterController::class, 'index']);
Route::post('/semester', [SemesterController::class, 'create']);
Route::patch('semester/{id}/update', [SemesterController::class, 'update']);
Route::delete('/semester/{id}/destroy', [SemesterController::class, 'destroy']);

//  pupuk Route

Route::get('/pupuk', [PupukController::class, 'index']);
Route::post('/pupuk', [PupukController::class, 'create']);
Route::patch('/pupuk/{id}/update', [PupukController::class, 'update']);
Route::delete('/pupuk/{id}/destroy', [PupukController::class, 'destroy']);

// data pemupukan Route

Route::get('semester/{id}', [DataPemupukanController::class, 'index']);
Route::post('/pemupukan', [DataPemupukanController::class, 'create']);