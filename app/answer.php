<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $fillable = ['question_id', 'contents', 'is_correct'];
}