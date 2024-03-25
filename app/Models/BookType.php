<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BookType extends Model
{
    use HasFactory;

    protected $table = 'book_type';
    protected $fillable =[
        'name',
        'slug',
        'status',
        'popular',
    ];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class,'id','type_id');
    }
}
