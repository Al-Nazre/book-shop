<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book';
    protected $fillable =[
        'name',
        'img',
        'subject_id',
        'type_id',
        'publication_id',
        'author_id',
        'short_description',
        'description',
        'qty',
        'price',
        'discount',
        'status',
        'popular',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
