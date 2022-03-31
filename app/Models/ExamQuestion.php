<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    // public function option()
    // {
    //     return $this->hasMany(Option::class);
    // }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function options(){
        return $this->hasMany(Option::class, 'question_id');
    }
}
