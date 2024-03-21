<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookType;
use Illuminate\Http\Request;

class BookTypeController extends Controller
{
    public function index(){
        return view('admin.book-type.index');
    }

     public function add(){
        return view('admin.book-type.add');
    }

    public function insert(Request $request){
        $request->validate([
         'name'=>'required',
         'slug'=>'required',
        ]);
        
        BookType::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status == TRUE ? '1':'0',
            'popular' => $request->popular == TRUE ? '1':'0',

        ]);
        return redirect('/subject')->with('status','Book Type Created Successfully');
    }
}
