<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\InheritanceController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\PengecekanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/moduleInheritance', function() {
    return view('inheritance');
});

Route::get('/moduleMath', function() {
    return view('mathematics');
});
Route::get('/fiturPengecekan', function() {
    return view('pengecekan');
});


Route::post('/calculateMath', [KalkulatorController::class, 'calculateFunc'] );
Route::post('/calculateWord', [PengecekanController::class, 'calculateFuncc'] );

Route::post('/suaraSapi', [InheritanceController::class, 'suaraSapi'] );
Route::post('/suaraKucing', [InheritanceController::class, 'suaraKucing'] );
Route::post('/suaraSerigala', [InheritanceController::class, 'suaraSerigala'] );

Route::get('/crud', [CRUDController::class, 'index']);
Route::get('/create', [CRUDController::class, 'create']);
Route::post('/store', [CRUDController::class, 'store']);
Route::get('/show/{id}', [CRUDController::class, 'show']);
Route::get('/edit/{id}', [CRUDController::class, 'edit']);
Route::post('/update/{id}', [CRUDController::class, 'update']);
Route::get('/delete/{id}', [CRUDController::class, 'destroy']);