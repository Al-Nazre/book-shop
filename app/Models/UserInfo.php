<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserInfo extends Model
{
    use HasFactory;
    protected $table = 'user_info';
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'img',
        'phone',
    ];
    /**
     * Get the user associated with the UserInfo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
