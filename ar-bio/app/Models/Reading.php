<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;
    public $table = "reading";

    protected $fillable= [
        'reading',
        'reading_title',
        'chapter',
        'form'

    ];

    protected $casts = [
        'chapter' => 'float' // or 'integer' depending on the data type of 'chapter'
    ];
}
