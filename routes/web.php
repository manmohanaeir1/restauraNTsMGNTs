<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;


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



Route::get("/", [HomeController::class,"index"]);
 
Route::get("/users", [AdminController::class,"users"]);

Route::get("/foodmenu", [AdminController::class,"foodmenu"]);

Route::post("/uploadfood", [AdminController::class,"upload"]);

Route::get("/deletefoodmenu/{id}", [AdminController::class,"deletefoodmenu"]);

Route::get("/updatefoodview/{id}", [AdminController::class,"updatefoodview"]);

Route::post("/update/{id}", [AdminController::class,"update"]);


Route::post("/reservation/", [AdminController::class,"reservation"]);
Route::get("/viewreservation/", [AdminController::class,"viewreservation"]);





Route::get("/deleteuser/{id}", [AdminController::class,"deleteuser"]);


Route::get("redirects/", [HomeController::class,"redirects"]);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
