<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['quiz_id', 'contents'];

    public function answers()
    {
        return $this->hasMany('App\answer');
    }

    public function GetCorrectAnswer()
    {
        $answers = $this->answers;
        foreach ($answers as $answer)
        {
            if ($answer->is_correct == 1)
            {
                return $answer;
            }
        }
    }
}
