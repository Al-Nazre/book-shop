<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookTypeController extends Controller
{
    public function index(){
        return view('admin.book-type.index');
    }

     public function add(){
        return view('admin.book-type.add');
    }
}
