<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;

    protected $table = 'author';
    protected $fillable =[
        'name',
        'img',
        'slug',
        'description',
        'status',
        'popular',
    ];
    public function books(): HasMany
    {
        return $this->hasMany(Book::class,'id','author_id');
    }
}
