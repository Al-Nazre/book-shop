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


Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/book-detail/', [App\Http\Controllers\HomeController::class, 'detail'])->name('home');
Route::get('/category-books/{slug}', [App\Http\Controllers\HomeController::class, 'categoryBooks'])->name('home');
Route::get('/book/{slug}', [App\Http\Controllers\HomeController::class, 'bookDetail'])->name('home');

Route::middleware(['auth', 'auth'])->group(function () {
    
});
    

Route::middleware(['auth', 'isAdmin'])->group(function () {
   // Route::get('/dashboard','Admin\HomeController@index')->name('adminHome');
    Route::get('/dashboard',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminHome');



    Route::get('/subject',[App\Http\Controllers\Admin\SubjectController::class, 'index'])->name('subject.index');
    Route::get('/add-subject',[App\Http\Controllers\Admin\SubjectController::class, 'add'])->name('subject.add');
    Route::post('/insert-subject',[App\Http\Controllers\Admin\SubjectController::class, 'insert'])->name('subject.insert');
    Route::get('/delete-subject/{id}',[App\Http\Controllers\Admin\SubjectController::class, 'delete'])->name('subject.delete');


    Route::get('/sub-subject',[App\Http\Controllers\Admin\SubSubjectController::class, 'index'])->name('sub-subject.index');
    Route::get('/add-sub-subject',[App\Http\Controllers\Admin\SubSubjectController::class, 'add'])->name('sub-subject.add');
    Route::post('/insert-sub-subject',[App\Http\Controllers\Admin\SubSubjectController::class, 'insert'])->name('sub-subject.insert');
    Route::get('/delete-sub-subject/{id}',[App\Http\Controllers\Admin\SubSubjectController::class, 'delete'])->name('sub-subject.delete');
    




    Route::get('/author',[App\Http\Controllers\Admin\AuthorController::class, 'index'])->name('author.index');
    Route::get('/add-author',[App\Http\Controllers\Admin\AuthorController::class, 'add'])->name('author.add');
    Route::post('/insert-author',[App\Http\Controllers\Admin\AuthorController::class, 'insert'])->name('author.insert');
    Route::get('/delete-author/{id}',[App\Http\Controllers\Admin\AuthorController::class, 'delete'])->name('author.delete');




    Route::get('/publication',[App\Http\Controllers\Admin\PublicationController::class, 'index'])->name('publication.index');
    Route::get('/add-publication',[App\Http\Controllers\Admin\PublicationController::class, 'add'])->name('publication.add');
    Route::post('/insert-publication',[App\Http\Controllers\Admin\PublicationController::class, 'insert'])->name('publication.insert');
    Route::get('/delete-publication/{id}',[App\Http\Controllers\Admin\PublicationController::class, 'delete'])->name('publication.delete');




    Route::get('/book',[App\Http\Controllers\Admin\BookController::class, 'index'])->name('book.index');
    Route::get('/add-book',[App\Http\Controllers\Admin\BookController::class, 'add'])->name('book.add');
    Route::post('/insert-book',[App\Http\Controllers\Admin\BookController::class, 'insert'])->name('book.insert');
    Route::get('/delete-book/{id}',[App\Http\Controllers\Admin\BookController::class, 'delete'])->name('book.delete');




    Route::get('/book-type',[App\Http\Controllers\Admin\BookTypeController::class, 'index'])->name('book-type.index');
    Route::get('/add-book-type',[App\Http\Controllers\Admin\BookTypeController::class, 'add'])->name('book-type.add');
    Route::post('/insert-book-type',[App\Http\Controllers\Admin\BookTypeController::class, 'insert'])->name('book-type.insert');
    Route::get('/delete-book-type/{id}',[App\Http\Controllers\Admin\BookTypeController::class, 'delete'])->name('book-type.delete');


    
    Route::get('/user',[App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');
    Route::get('/add-user',[App\Http\Controllers\Admin\UserController::class, 'add'])->name('user.add');



});
