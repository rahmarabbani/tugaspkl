<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function(){
//     return view('welcome');
// });
Route::get('/', function () {
    return view('tampilan');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/login', [loginController::class, 'login']);
Route::post('/login', [loginController::class, 'authenticate']);


Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [LoginController::class, 'dashboard']);