<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookDetail;
use App\Models\Subject;
use App\Models\SubSubject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function index()
    {
        $trend_subjects = Subject::where('home', 1)->get();
        return view('website.home',compact('trend_subjects'));
    }
    function testUi(){
        return view('test');
    }

    public function subjectBooks($slug){
        if(Subject::where('slug',$slug)->exists()){
            $subject = Subject::where('slug',$slug)->first();
            $books = Book::where('subject_id',$subject->id)->get();
            return view('website.subjectBook', compact('books' , 'subject'));
        }
        else{
            return redirect('/')->with('status', 'No such Category');
        }
    }

    public function subSubjectBooks($subject_slug, $sub_subject_slug){
        if(SubSubject::where('slug', $sub_subject_slug)->exists()){

           $sub_subject = SubSubject::where('slug', $sub_subject_slug)->first();
            $books = Book::where('sub_subject_id',$sub_subject->id)->get();

            return view('website.subSubjectBooks', compact('books', 'sub_subject'));
        }
        else{
            return redirect('/')->with('status', 'No such Category');
        }

    }

    public function bookDetail($slug){
        if(Book::where('slug',$slug)->exists()){
            $book = Book::where('slug',$slug)->first();
            $bookDetail = BookDetail::where('book_id',$book->id)->first();
            return view('website.bookDetail',compact('book'));
        }
        else{
            return redirect('/')->with('status', 'No such Book');
        }
    }

    public function subjectView($slug){
        if(Subject::where('slug',$slug)->exists())
        {
            $subject = Subject::where('slug',$slug)->first();
            $sub_subjects = SubSubject::where('subject_id', $subject->id)->get();
            return view('website.subjectView', compact('subject','sub_subjects'));
        }
        else
        {
            return redirect('/')->with('status', 'No such Category');
        }

    }

    
}
