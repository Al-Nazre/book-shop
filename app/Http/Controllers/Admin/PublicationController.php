<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index(){
        return view('admin.publication.index');
    }
     public function add(){
        return view('admin.publication.add');
    }
}
