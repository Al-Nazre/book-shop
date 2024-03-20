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

Route::get('/home', [App\Http\Controllers\SiteController::class, 'index'])->name('home');

    

Route::middleware(['auth', 'isAdmin'])->group(function () {
   // Route::get('/dashboard','Admin\HomeController@index')->name('adminHome');
    Route::get('/dashboard',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminHome');



    Route::get('/subject',[App\Http\Controllers\Admin\SubjectController::class, 'index'])->name('subject.index');
    Route::get('/add-subject',[App\Http\Controllers\Admin\SubjectController::class, 'add'])->name('subject.add');



    Route::get('/author',[App\Http\Controllers\Admin\AuthorController::class, 'index'])->name('author.index');
    Route::get('/add-author',[App\Http\Controllers\Admin\AuthorController::class, 'add'])->name('author.add');



    Route::get('/publication',[App\Http\Controllers\Admin\PublicationController::class, 'index'])->name('publication.index');
    Route::get('/add-publication',[App\Http\Controllers\Admin\PublicationController::class, 'add'])->name('publication.add');



    Route::get('/book',[App\Http\Controllers\Admin\BookController::class, 'index'])->name('book.index');
    Route::get('/add-book',[App\Http\Controllers\Admin\BookController::class, 'add'])->name('book.add');

    Route::get('/book-type',[App\Http\Controllers\Admin\BookTypeController::class, 'index'])->name('book-type.index');
    Route::get('/add-book-type',[App\Http\Controllers\Admin\BookTypeController::class, 'add'])->name('book-type.add');
    
    Route::get('/user',[App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');
    Route::get('/add-user',[App\Http\Controllers\Admin\UserController::class, 'add'])->name('user.add');



});
// Route::middleware('isAdmin')->group(function () {
//     Route::get('/dashboard', function () {
//       return "this is admin";
//    });
// });