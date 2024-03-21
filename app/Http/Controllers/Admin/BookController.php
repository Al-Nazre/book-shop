<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Subject;
use App\Models\SubSubject;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('admin.book.index');
    }

     public function add(){
        $subjects = Subject::all();
        $subSubjects = SubSubject::all();
        $authors = Author::all();
        return view('admin.book.add', compact('subjects','subSubjects','authors'));
    }
}
