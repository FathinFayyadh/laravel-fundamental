<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FormController;

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


Route::get('/list-menu/get-all-data',[MenuController::class,'getAllMenu']);
Route::get('/list-menu',[MenuController::class,'getMenu']);
Route::get('/list-menu/{menu}/{harga}',[MenuController::class,'getMenuDetail']);
Route::get('/cafe-amandemy',[ProdukController::class,'product'])->name("list.product");
Route::get('/form',[ProdukController::class,'form'])->name("form.create");
Route::post('/form',[ProdukController::class,'formCreate'])->name("form.store");