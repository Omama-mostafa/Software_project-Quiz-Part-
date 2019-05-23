<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuizResource extends JsonResource
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'skill_type'=>$this->skill_type,
            'pass_score'=>$this->pass_score,
            'duration'=>$this->duration,
            'questions'=>$this->questions
        ];
    }
}
