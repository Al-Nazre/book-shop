<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function subject(): HasOne
    {
        return $this->hasOne(Subject::class, 'id','subject_id');
    }
    public function type(): HasOne
    {
        return $this->hasOne(BookType::class, 'id','type_id');
    }
    public function author(): HasOne
    {
        return $this->hasOne(Author::class, 'id','author_id');
    }
    public function publication(): HasOne
    {
        return $this->hasOne(Publication::class, 'id','publication_id');
    }
}
