<?php

namespace Tests\Unit;

use Tests\TestCase;

class TestAnswer extends TestCase
{
    public function test_getAnswer()
    {
        $data = [
            'id' => '1'
        ];
        $this->json('GET', 'api/answer/1', $data, ['Accept' => 'Application/json'])
            ->assertStatus(200);
    }

    public function test_addAnswer()
    {
        $data = [
            'question_id' => '5',
            'contents' => 'rrr',
            'is_correct' => '0'
        ];
        $this->json('POST', 'api/answer', $data, ['Accept' => 'Application/json'])
            ->assertStatus(201);
    }

    public function test_updateAnswer()
    {
        $data = [
            'question_id' => '2',
            'contents' => 'answer3',
            'is_correct' => '1'
        ];
        $this->json('PUT', 'api/answer/1', $data, ['Accept' => 'Application/json'])
            ->assertStatus(200);
    }

    public function test_deleteAnswer()
    {
        $data = [
            'id' => '2'
        ];
        $this->json('DELETE', 'api/answer/2', $data, ['Accept' => 'Application/json'])
            ->assertStatus(404);
    }
}