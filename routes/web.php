<?php

use App\Http\Controllers\accounts\CountsController;
use App\Http\Controllers\carnets\CarnetController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\http\Controllers\SignupController;
use App\Http\Controllers\d_users\IndexController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\role_permission\PermissonController;
use App\Http\Controllers\role_permission\RoleController;

use App\Http\Controllers\user\UserController;

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
Route::get('/Welcomepage', [HomeController::class, 'Welcomepage'])->name('wp');
Route::get('/inseruser', [HomeController::class, 'insert'])->name('inst');
Route::get('/updateuser/{id}', [HomeController::class, 'updateuser'])->name('upd');
Route::get('/', [LoginController::class, 'Login'])->name('lgn');
Route::get('/signup', [SignupController::class, 'Signup'])->name('sgn');
//UPDATE PROFILE
Route::get('/updateusers/{id}',[UserController::class, 'updateusers'])->name('updpro');
//Route::get('/updateuser/{id}', [HomeController::class, 'updateuser'])->name('upd');
//USERS
Route::get('/home', [HomeController::class, 'index'])->name('hp');
Route::get('/user', [UserController::class, 'index'])->name('us');
//ACCOUNTS
Route::get('/accounts', [CountsController::class, 'index'])->name('ac');
Route::get('/gestneur', [CountsController::class, 'gestionnaire'])->name('gest');
//ACCOUNT0
Route::get('/carnet', [CarnetController::class, 'index'])->name('car');


