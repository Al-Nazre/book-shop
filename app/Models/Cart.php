<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';
    protected $fillable=[
        'user_id',
        'book_id',
        'qty',
        'session_id',
    ];
    /**
     * Get the book associated with the Cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function book(): HasOne
    {
        return $this->hasOne(Book::class, 'id', 'book_id');
    }
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
