<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        return view('admin.author.index');
    }

     public function add(){
        return view('admin.author.add');
    }
}
