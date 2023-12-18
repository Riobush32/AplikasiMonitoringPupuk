<?php

use App\Http\Controllers\EstateController;
use Illuminate\Support\Facades\Route;

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