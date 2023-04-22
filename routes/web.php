<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/', [IndexController::class, 'index']);
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin')->name('login');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('/rubrika', [IndexController::class, 'showrub'])->name('rubric');
Route::get('/add_form', [IndexController::class, 'add_form'])->name('add_form');
Route::get('/statya/{id}',  [IndexController::class, 'show'])->name('show');
Route::get('/rubrika/{title}',  [IndexController::class, 'showrub'])->name('showrub');
Route::post('/add_form',  [IndexController::class, 'add_form'])->name('add_form');
Route::post('/add',  [IndexController::class, 'add'])->name('add');
Route::get('/add',  [IndexController::class, 'add'])->name('add');
//Route::delete('/delete/{id}', [IndexController::class, 'delete'])->name('delete');
Route::get('/delete/{id}', [IndexController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
