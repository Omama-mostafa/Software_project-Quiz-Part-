<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'contents'=>$this->contents,
            'quiz_id'=>$this->quiz_id,
            'answers'=>$this->answers,
            'correct_answer'=>$this->GetCorrectAnswer()
        ];
    }
}
