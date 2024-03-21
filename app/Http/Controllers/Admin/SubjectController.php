<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        return view('admin.subject.index');
    }
    
    public function add(){
        return view('admin.subject.add');
    }
    public function insert(Request $request){
        $request->validate([
         'name'=>'required',
         'slug'=>'required',
        ]);
        
        Subject::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status == TRUE ? '1':'0',
            'popular' => $request->popular == TRUE ? '1':'0',

        ]);
        return redirect('/subject')->with('status','Subject Created Successfully');
    }
}
