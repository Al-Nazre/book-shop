<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\SubSubject;
use Illuminate\Http\Request;

class SubSubjectController extends Controller
{
    public function index(){
        $subSubjects = SubSubject::all();

        return view('admin.sub-subject.index',compact('subSubjects'));
    }
    
    public function add(){
        $subjects = Subject::all();
        return view('admin.sub-subject.add', compact('subjects',));
    }
    public function insert(Request $request){
        $request->validate([
         'name'=>'required',
         'slug'=>'required',
        ]);
        
        SubSubject::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'subject_id'=>$request->subject_id,
            'status' => $request->status == TRUE ? '1':'0',
            'popular' => $request->popular == TRUE ? '1':'0',

        ]);
        return redirect('/sub-subject')->with('status','Subject Created Successfully');
    }
    public function delete($id){
        $subSubject = SubSubject::find($id);
    
            $subSubject->delete();
        return redirect('/sub-subject')->with('status','Sub Subject Deleted Successfully');
    }
}
