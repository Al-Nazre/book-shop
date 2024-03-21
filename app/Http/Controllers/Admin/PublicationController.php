<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index(){
        return view('admin.publication.index');
    }
     public function add(){
        return view('admin.publication.add');
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
            $file->move('assets/uploads/publication',$filename);
        }

        Publication::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'img' => $filename,
            'description' => $request->description,
            'status' => $request->status == TRUE ? '1':'0',
            'popular' => $request->popular == TRUE ? '1':'0',

        ]);
        return redirect('/publication')->with('status','Publication Created Successfully');
    }
}
