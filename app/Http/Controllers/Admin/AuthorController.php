<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        return view('admin.author.index',compact('authors'));
    }

     public function add(){
        return view('admin.author.add');
    }

    public function insert(Request $request){
        $request->validate([
         'name'=>'required',
         'slug'=>'required',
        ]);
        $filename = null;
        if($request->hasfile('img')){
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/author',$filename);
        }

        Author::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'img' => $filename,
            'description' => $request->description,
            'status' => $request->status == TRUE ? '1':'0',
            'popular' => $request->popular == TRUE ? '1':'0',

        ]);
        return redirect('/author')->with('status','Author Created Successfully');
    }
    public function delete($id){
        
        $author = Author::find($id);
        if($author->image){
            $path = 'assets/uploads/author'.$author->image;
            if(File::exists($path)){
                File::delete($path);
                
            }
        }
            $author->delete();
        return redirect('/author')->with('status','Author Deleted Successfully');
    }
}
