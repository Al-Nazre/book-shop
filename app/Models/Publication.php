<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'publication';
    protected $fillable =[
        'name',
        'slug',
        'img',
        'description',
        'status',
        'popular',
    ];
    public function books(): HasMany
    {
        return $this->hasMany(Book::class,'id','publication_id');
    }
}
