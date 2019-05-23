<?php

namespace Tests\Unit;

use Tests\TestCase;

class TestQuestion extends TestCase
{
    public function test_getQuestion()
    {
        $data = [
            'id' => '1'
        ];
        $this->json('GET', 'api/question/1', $data, ['Accept' => 'Application/json'])
            ->assertStatus(200);
    }

    public function test_addQuestion()
    {
        $data = [
            'quiz_id' => '2',
            'contents' => 'question1',
        ];
        $this->json('POST', 'api/question', $data, ['Accept' => 'Application/json'])
            ->assertStatus(201);
    }

    public function test_updateQuestion()
    {
        $data = [
            'quiz_id' => '2',
            'contents' => 'question3',
        ];
        $this->json('PUT', 'api/question/1', $data, ['Accept' => 'Application/json'])
            ->assertStatus(200);
    }

    public function test_deleteQuestion()
    {
        $data = [
            'id' => '2'
        ];
        $this->json('DELETE', 'api/question/2', $data, ['Accept' => 'Application/json'])
            ->assertStatus(404);
    }
}
