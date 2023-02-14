<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Products;
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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
})->middleware('auth');

Route::get('redirect',[HomeController::class,"redirect"]);
Route::get('/',[HomeController::class,"index"]);
Route::post('/logout',[HomeController::class,"logout"]);
Route::post('/logoutAdmin',[HomeController::class,"logoutAdmin"]);
Route::get('/addProduct',[ProductController::class,"addProduct"]);
Route::post('/add',[ProductController::class,"add"]);
Route::get('showProduct',[ProductController::class,"show"]);
Route::get('single/{id}',[ProductController::class,"single"]);
Route::get('/all_product',[ProductController::class,"all_product"]);
Route::get('/editProduct/{id}',[ProductController::class,"editProduct"]);
Route::put('/edit/{id}',[ProductController::class,"edit"]);
Route::delete('/delete/{id}',[ProductController::class,"delete"]);
Route::get("/addUsers",[AdminController::class,"addUsers"]);
Route::post('add_user',[AdminController::class,"add"]);
Route::get('/print/{id}',[ProductController::class,"print"])->middleware('auth');
Route::post('/order',[ProductController::class,"order"]);
Route::get("/confirm",[AdminController::class,"confirm"]);
Route::get("/print_invoice/{id}",[AdminController::class,"print_invoice"]);
Route::get('/all_users',[AdminController::class,"allUsers"]);
Route::delete("/delete_user/{id}",[AdminController::class,"deleteUser"]);