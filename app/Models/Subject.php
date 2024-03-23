<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subject';
    protected $fillable =[
        'name',
        'slug',
        'status',
        'popular',
    ];
    public function subSubject(): HasOne
    {
        return $this->hasone(SubSubject::class,'id','subject_id');
    }
}
