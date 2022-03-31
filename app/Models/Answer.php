<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function question()
    {
        return $this->belongsTo(ExamQuestion::class);
    }
    public function option()
    {
        return $this->hasOne(Option::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public function result(){
    //     return $this->hasMany(Result::class);
    // }
}
