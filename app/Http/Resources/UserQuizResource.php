<?php
/**
 * Created by PhpStorm.
 * User: Om-mostafa El-Hariry
 * Date: 28-Apr-19
 * Time: 01:35 PM
 */

namespace App\Http\Resources;
use App\quiz;
use Illuminate\Http\Resources\Json\JsonResource;

class UserQuizResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'user_quiz' => $this->user_quiz,
            'user_score'=> $this->CalcUserScore()
        ];
    }
}