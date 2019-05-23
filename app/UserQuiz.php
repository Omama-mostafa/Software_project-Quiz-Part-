<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserQuiz extends Model
{
    protected $fillable = ['user_id', 'quiz_id', 'user_score'];

    public function user_quiz()
    {
        return $this->belongsTo('App\quiz', 'quiz_id');
    }

    public function userQuizAnswers()
    {
        return $this->hasMany('App\UserAnswer', 'userQuiz_id');
    }

    public function CalcUserScore()
    {
        $userAnswers = $this->userQuizAnswers;
        $score = 0;
        foreach ($userAnswers as $userAnswer)
        {
            if ($userAnswer->user_id == $this->user_id && $userAnswer->userQuiz_id == $this->id)
            {
                if ($userAnswer->getAnswerScore() != 0)
                {
                    $score += $userAnswer->getAnswerScore();
                }
            }
        }
        return $score;
    }
}