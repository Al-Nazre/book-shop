<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('admin.book.index');
    }

     public function add(){
        return view('admin.book.add');
    }
}