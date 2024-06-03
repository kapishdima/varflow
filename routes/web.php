<?php

use App\Http\Controllers\Web\HomeController;
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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/project', function () {
    return view('pages.project');
});
