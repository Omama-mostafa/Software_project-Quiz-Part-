<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;


class AnswerResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'question_id' => $this->question_id,
            'contents' => $this->contents,
            'is_correct' => $this->is_correct
        ];
    }
}