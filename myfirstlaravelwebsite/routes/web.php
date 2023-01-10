<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

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

Route::get('/',[FrontendController::class,'home']);
Route::get('/about',[FrontendController::class,'about']);
Route::get('/service',[FrontendController::class,'service']);
Route::get('/portfolio',[FrontendController::class,'portfolio']);
Route::get('/contact',[FrontendController::class,'contact']);
