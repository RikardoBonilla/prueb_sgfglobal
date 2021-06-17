<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/articles','App\Http\Controllers\ArticleController');
Route::resource('/categories','App\Http\Controllers\CategoryController');


//realizacion de middleware
Route::get('dataAllArticles', function() {
    return redirect('api/articles');
})->middleware('header');

Route::get('notAuthorized', function(){
    return "Usuario no posee permiso para ingresar a esta ruta";
}); 
