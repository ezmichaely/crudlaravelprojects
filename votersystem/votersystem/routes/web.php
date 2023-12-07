<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\VotersController;

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
    return redirect('/login');
});

Route::group(['middleware'=>['AuthCheck']], function () {
    Route::get('/login', [AccountsController::class, 'login'])->name('login');
    Route::get('/register', [AccountsController::class, 'register'])->name('register');
    Route::get('/home', [AccountsController::class, 'home'])->name('home');
    Route::get('/addvoter', [AccountsController::class, 'addvoter'])->name('addvoter');
});


Route::post('addaccount', [AccountsController::class, 'addaccount'])->name('addaccount');
Route::post('loginaccount', [AccountsController::class, 'loginaccount'])->name('loginaccount');

Route::get('logout', [AccountsController::class, 'logout'])->name('logout');

Route::post('newvoter', [AccountsController::class, 'newvoter'])->name('newvoter');


