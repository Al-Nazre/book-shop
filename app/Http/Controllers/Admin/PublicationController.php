<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PublicationController extends Controller
{
    public function index(){
        $publications = Publication::all();
        return view('admin.publication.index', compact('publications'));
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

    public function delete($id){
        
        $publication = Publication::find($id);
        if($publication->image){
            $path = 'assets/uploads/publication'.$publication->image;
            if(File::exists($path)){
                File::delete($path);
                
            }
        }
            $publication->delete();
        return redirect('/publication')->with('status','Publication Deleted Successfully');
    }
}
