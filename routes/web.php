<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Without Login
// Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::middleware(['auth', 'second'])->group(function () {
    

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
      return "this is admin";
   });
});
// Route::middleware('isAdmin')->group(function () {
//     Route::get('/dashboard', function () {
//       return "this is admin";
//    });
// });