<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\BookDetail;
use App\Models\BookType;
use App\Models\Publication;
use App\Models\Subject;
use App\Models\SubSubject;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('admin.book.index');
    }

     public function add(){
        $subjects = Subject::all();
        $subSubjects = SubSubject::all();
        $authors = Author::all();
        $publications = Publication::all();
        $types = BookType::all();
        return view('admin.book.add', compact('subjects','subSubjects','authors','publications', 'types'));
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
            $file->move('assets/uploads/book',$filename);
        }

        $book = Book::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'img' => $filename,
            'code' => $request->code,
            'subject_id' => $request->subject_id,
            'sub_subject_id' => $request->sub_subject_id,
            'type_id' => $request->type_id,
            'publication_id' => $request->publication_id,
            'author_id' => $request->author_id,
            'price' => $request->price,
            'qty' => $request->qty,
            'discount' => $request->discount,
            'status' => $request->status == TRUE ? '1':'0',
            'popular' => $request->popular == TRUE ? '1':'0',

        ]);
        $book_detail = BookDetail::create([
            'book_id'=>$book->id,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'edition' => $request->edition,
            'publish' => $request->publish,
            'country' => $request->country,
            'language' => $request->language,
        ]);


        return redirect('/book')->with('status','Publication Created Successfully');
    }
}
