<?php

namespace App\Models;
 
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BookDetail extends Model
{
    use HasFactory;

     protected $table = 'book_detail';
    protected $fillable =[
        'book_id',
        'short_description',
        'description',
        'edition',
        'publish',
        'country',
        'language',
        'meta_title',
        'meta_keywords',
        'meta_description',

    ];

    public function book(): HasOne
    {
        return $this->hasOne(Book::class, 'id','book_id');
    }
}
