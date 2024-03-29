<?php

namespace App\Models;

use App\Models\OrderList;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $fillable = [
            'order_no',
            'tracking_no',
            'user_id',
            'name',
            'email',
            'phone',
            'address',
            'city',
            'house',
            'zip',
            'status',
            'messeage',
    ];

    public function list(): BelongsToMany 
    {
        return $this->belongsToMany(OrderList::class, 'order_id');
    }
    /**
     * Get the user associated with the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
