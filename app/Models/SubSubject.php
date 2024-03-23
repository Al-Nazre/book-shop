<?php

namespace App\Models;

use App\Models\BookDetail;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
    public function subject(): BelongsTo
{
   return $this->belongsTo(Subject::class,'subject_id','id');
}


}
