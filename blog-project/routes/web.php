<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
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
    return view('Frontend.blog');
});
Route::get('/detail', function () {
    return view('Frontend.detail');
});
Route::get('/categories', function () {
    return view('Frontend.categories');
});
Route::resource('admin/category', CategoryController::class);
Route::resource('admin/blog', BlogController::class);
