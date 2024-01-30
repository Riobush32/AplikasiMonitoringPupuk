<?php

use App\Models\DataPemupukan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\DataPemupukanController;

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
    return view('home.home',[
        'active' => ''
    ]);
});

Route::get('/page2', function () {
    return view('page.page2');
});


// estate route 

Route::get('/estate', [EstateController::class, 'index'])->name('estate')->middleware('auth');
Route::post('/estate', [EstateController::class, 'create'])->middleware('auth');
Route::patch('/estate/{id}/update', [EstateController::class, 'update'])->middleware('auth');
Route::delete('/estate/{id}/destroy', [EstateController::class, 'destroy'])->middleware('auth');

// devisi route

Route::get('/estate/{id}/', [DivisiController::class, 'index'])->middleware('auth');
Route::post('/divisi', [DivisiController::class, 'create'])->middleware('auth');
Route::patch('/divisi/{id}/update', [DivisiController::class, 'update'])->middleware('auth');
Route::delete('divisi/{id}/destroy', [DivisiController::class, 'destroy'])->middleware('auth');

// Field Route

Route::get('/divisi/{id}', [FieldController::class, 'index'])->middleware('auth')->name('field')->middleware('auth');
Route::post('/field', [FieldController::class, 'create'])->middleware('auth');
Route::patch('field/{id}/update', [FieldController::class, 'update'])->middleware('auth');
Route::delete('/field/{id}/destroy', [FieldController::class, 'destroy'])->middleware('auth');

//semester Route 

Route::get('/field/{id}', [SemesterController::class, 'index'])->middleware('auth');
Route::post('/semester', [SemesterController::class, 'create'])->middleware('auth');
Route::patch('semester/{id}/update', [SemesterController::class, 'update'])->middleware('auth');
Route::delete('/semester/{id}/destroy', [SemesterController::class, 'destroy'])->middleware('auth');

//  pupuk Route

Route::get('/pupuk', [PupukController::class, 'index'])->middleware('auth');
Route::post('/pupuk', [PupukController::class, 'create'])->middleware('auth');
Route::patch('/pupuk/{id}/update', [PupukController::class, 'update'])->middleware('auth');
Route::delete('/pupuk/{id}/destroy', [PupukController::class, 'destroy'])->middleware('auth');

// data pemupukan Route

Route::get('semester/{id}', [DataPemupukanController::class, 'index'])->middleware('auth');
Route::post('/pemupukan', [DataPemupukanController::class, 'create'])->middleware('auth');
Route::patch('/pemupukan/{id}/update', [DataPemupukanController::class, 'update'])->middleware('auth');
Route::delete('/pemupukan/{id}/destroy', [DataPemupukanController::class, 'destroy'])->middleware('auth');

// Route Laporan
Route::get('/laporan/print', [LaporanController::class, 'index'])->middleware('auth');

