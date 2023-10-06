<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsuarioController;
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


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/post', [HomeController::class, 'post'])->name('post');

Route::resource('posts', PostController::class);

Route::resource('categorias', CategoriaController::class);

Route::resource('usuarios', UsuarioController::class);

Route::resource('comentarios', ComentarioController::class);
Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
