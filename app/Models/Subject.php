<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'home',
    ];
    public function subSubjects(): HasMany
    {
        return $this->hasMany(SubSubject::class,'id','subject_id');
    }
    public function books(): HasMany
    {
        return $this->hasMany(Book::class,'id','subject_id');
    }
}
