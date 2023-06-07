<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'learning_content';
    protected $primaryKey = 'id';
    protected $fillable = ['chp_content', 'content_text', 'content_vid'];
}
