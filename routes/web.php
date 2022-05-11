<?php

use App\Http\Controllers\experienceController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [frontendController::class, 'front'])->name('front');

Auth::routes([
    // 'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [userController::class , 'edit'])->name('user.edit');
Route::put('/update/{user_id}' , [userController::class , 'update'])->name('user.update');
Route::get('/add/experience' , [experienceController::class , 'experience'])->name('experience');
Route::post('/store/experience' , [experienceController::class , 'store'])->name('store.experience');

Route::get('/front/show', function () {
  return view('admin.front.front');
})->name('front.show');