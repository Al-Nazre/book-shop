<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\SubSubject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return view('admin.subject.index',compact('subjects'));
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
    public function delete($id){
        $allsub = SubSubject::where('subject_id',$id);
        if($allsub){
            $sub = $allsub->count();
        }
        else{
            $sub = 0;
        }
        $subject = Subject::find($id);
        $subSubject = SubSubject::where('subject_id',$id)->get();
    if($subSubject){
        return redirect('/subject')->with('status','Subject not deleted!!!'.$sub.' Sub-Subjects located in the subject ');

    }
    else{
            $subject->delete();
        return redirect('/subject')->with('status','Subject Deleted Successfully');


    }
        

    }
}
