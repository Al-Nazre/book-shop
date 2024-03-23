<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookType;
use Illuminate\Http\Request;

class BookTypeController extends Controller
{
    public function index(){
        $types = BookType::all();
        return view('admin.book-type.index',compact('types'));
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
        return redirect('/book-type')->with('status','Book Type Created Successfully');
    }
    public function delete($id){
        
        $type = BookType::find($id);
        $name = $type->name;
        
            $type->delete();
        return redirect('/book-type')->with('status',$name.' Deleted Successfully');
    }
}
