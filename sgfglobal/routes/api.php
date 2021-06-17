<?php

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EndpointArticlesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/articles', function(){
    return Article::all();
});

//endpoints Articles
Route::get('/endpointArticles', [EndpointArticlesController::class, 'index']);
Route::get('/endpointArticles/{id}', [EndpointArticlesController::class, 'show']);
Route::post('/endpointArticles', [EndpointArticlesController::class, 'store']);
Route::put('/endpointArticles/{id}', [EndpointArticlesController::class, 'update']);
Route::delete('/endpointArticles/{id}', [EndpointArticlesController::class, 'destroy']);