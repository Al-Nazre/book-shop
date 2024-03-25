<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookDetail;
use App\Models\Subject;
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

    public function categoryBooks($slug){
        if(Subject::where('slug',$slug)->exists()){
            $subject = Subject::where('slug',$slug)->first();
            $books = Book::where('subject_id',$subject->id)->get();
            return view('website.subjectBook', compact('books'));
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
}
