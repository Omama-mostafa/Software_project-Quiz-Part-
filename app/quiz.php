<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $fillable = ['title', 'skill_type', 'pass_score', 'duration'];

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
