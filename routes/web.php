<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMeController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the Routehip-hopProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});


// Path: routes\web.php


Route::get("/index", [HomeController::class, "index"])->name("index");
Route::get("/contact", [HomeController::class, "contact"])->name("contact");
// Route::post("/contact/store", [ContactMeController::class, "store"])->name("contact.store");
Route::get("/blues", [HomeController::class, "blues"])->name("blues");
Route::get("/gospel", [HomeController::class, "gospel"])->name("gospel");
Route::get("/hip-hop", [HomeController::class, "hip-hop"])->name("hip-hop");
Route::get("/jazz", [HomeController::class, "jazz"])->name("jazz");
Route::get("/regge", [HomeController::class, "regge"])->name("regge");
Route::get("/tracks", [HomeController::class, "tracks"])->name("tracks");

