<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlipdetailController;

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
    return view('form');
});
Route::get('/index',[SlipdetailController::class,'index']);
Route::get('/downloadPDF/{id}',[SlipdetailController::class,'dowloadPDF']);
Route::post('submitForm',[SlipdetailController::class,'store']);
