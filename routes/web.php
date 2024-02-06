<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\KeywordsController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get("/", [Homecontroller::class, 'index']);

//Route::get("/", [CategoriesController::class, 'categories']);
Route::post("/", [CategoriesController::class, 'add']);

Route::get("/data", [KeywordsController::class, 'showCategories']);
Route::post("/data", [KeywordsController::class, 'insertKeywords']);
