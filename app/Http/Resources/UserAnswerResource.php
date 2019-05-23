<?php
/**
 * Created by PhpStorm.
 * User: Om-mostafa El-Hariry
 * Date: 28-Apr-19
 * Time: 01:27 PM
 */

namespace App\Http\Resources;
use App\answer;
use Illuminate\Http\Resources\Json\JsonResource;

class UserAnswerResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'userQuiz_id' => $this->userQuiz_id,
            'user_answer'=> $this->user_answer,
            'answer_score'=> $this->getAnswerScore()
        ];
    }
}