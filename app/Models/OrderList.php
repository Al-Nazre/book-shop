<?php

namespace App\Models;

use App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderList extends Model
{
    use HasFactory;
    protected $table = 'order_list';
    protected $fillable = [
            'order_id',
            'book_id',
            'qty',
            'price',
    ];

    public function order(): HasOne {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }
}
