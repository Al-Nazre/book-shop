<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';
    protected $fillable =[
        'user_id',
        'address',
        'city',
        'house',
        'zip',
        
    ];
    public function subject(): HasOne
    {
        return $this->hasOne(Subject::class, 'id','subject_id');
    }
}
