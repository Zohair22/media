<?php

use App\Http\Controllers\UserController;
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

git add .
git commit -m "existing file"
git push


*/
Route::middleware('guest')->group(function (){
    Route::get('/register', [UserController::class, 'create'])->name('register');
    Route::post('/register', [UserController::class, 'store'])->name('registerDone');

    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'loged'])->name('loged');
});

Route::middleware('auth')->group(function (){
    Route::get('/home', function (){
        return inertia('Home');
    })->name('home');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
