<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $fillable = ['user_id', 'answer_id', 'userQuiz_id', 'answer_score'];

    public function user_answer()
    {
        return $this->belongsTo('App\answer', 'answer_id');
    }

    public function getAnswerScore()
    {
        $user_answer = $this->user_answer;
        $score = 0;
        if($user_answer->is_correct == 1)
            $score++;
        return $score;
    }
}
