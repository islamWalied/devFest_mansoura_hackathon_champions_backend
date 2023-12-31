<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [AuthController::class,'register'])->name('register');
Route::post('/login', [AuthController::class,'login'])->name('login');


Route::middleware('auth:sanctum')
    ->group(function (){
        Route::get('/mother',[\App\Http\Controllers\UserController::class,'index']);
        Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    });


//articles
Route::get('/articles', [\App\Http\Controllers\ArticlesController::class,'index']);


//PRODUCTS
Route::get('/products', [\App\Http\Controllers\ProductController::class,'index']);

//therapists
Route::post('/therapists-register', [\App\Http\Controllers\TherapistController::class,'register']);
Route::post('/therapists-login', [\App\Http\Controllers\TherapistController::class,'login']);
