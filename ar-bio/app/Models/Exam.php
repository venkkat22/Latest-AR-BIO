<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_name',
        'subject_id',
        'date',
        'time',
        'attempt',
        'marks'
    ];

    public function subject()
    {
        return $this->hasMany(Subject::class,'id','subject_id');
    }

    public function getQnaExam()
    {
        return $this->hasMany(QnaExam::class,'exam_id','id');
    }

    // public function getIdAttribute($value)
    // {
    //     $attemptCount = ExamAttempt::where(['exam_id'=>$value,'user_id'=> auth()->user()->id])->;
    //     $this->count = $attemptCount;
    // }
}
