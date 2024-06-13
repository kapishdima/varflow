<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProjectsController;
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

Route::view('/admin/{path?}', 'backoffice.admin')->where('path', '.*');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects/{id}', [ProjectsController::class, 'show'])->name('show');
Route::get('/projects/', [ProjectsController::class, 'index'])->name('index');
