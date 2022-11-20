<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfilesController;

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

Auth::routes();


//Show Post the form create()
Route::get("/p", [PostController::class,"create"])->middleware("auth");

//Store Post  store()
Route::post("/p/create", [PostController::class,"store"])->middleware("auth")->name('post.store');

//Show Post  show()
Route::get("/p/{post}", [PostController::class,"show"])->name('post.show');

//Show user profile index()
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
