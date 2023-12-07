<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('/login');
});


Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('newUser', [AuthController::class, 'newUser'])->name('newUser');
Route::post('loginUser', [AuthController::class, 'loginUser'])->name('loginUser');

Route::post('newProduct', [AuthController::class, 'newProduct'])->name('newProduct');


Route::group(['middleware'=>['AuthCheck']], function () {
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::get('/register', [AuthController::class,'register'])->name('register');
    Route::get('/index', [AuthController::class,'index'])->name('index');
    Route::get('/addProduct', [AuthController::class,'addProduct'])->name('addProduct');
});
