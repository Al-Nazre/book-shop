<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubject extends Model
{
    use HasFactory;

    protected $table = 'sub_subject';
    protected $fillable =[
        'name',
        'slug',
        'subject_id',
        'status',
        'popular',
    ];
}
