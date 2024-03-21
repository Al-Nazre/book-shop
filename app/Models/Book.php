<?php

namespace App\Models;

use App\Models\Author;
use App\Models\BookDetail;
use App\Models\BookType;
use App\Models\Publication;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book';
    protected $fillable =[
        'name',
        'slug',
        'img',
        'code',
        'subject_id',
        'sub_subject_id',
        'type_id',
        'publication_id',
        'author_id',
        'detail_id',
        'qty',
        'price',
        'discount',
        'status',
        'popular',
    ];

    public function detail(): HasOne
    {
        return $this->hasOne(BookDetail::class, 'id','detail_id');
    }
    public function subject(): HasOne
    {
        return $this->hasOne(Subject::class, 'id','subject_id');
    }
    public function subSubject(): HasOne
    {
        return $this->hasOne(Subject::class, 'id','sub_subject_id');
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
