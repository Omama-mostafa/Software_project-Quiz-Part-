<?php


namespace Tests\Unit;
use Tests\TestCase;

class TestUserAnswer extends TestCase
{
    public function test_getUserAnswer()
    {
        $data = [
            'id' => '3'
        ];
        $this->json('GET', 'api/userAnswer/3', $data, ['Accept' => 'Application/json'])
            ->assertStatus(200);
    }

    public function test_addUserAnswer()
    {
        $data = [
            'user_id' => '7',
            'answer_id' => '1',
            'userQuiz_id' => '3'
        ];
        $this->json('POST', 'api/userAnswer', $data, ['Accept' => 'Application/json'])
            ->assertStatus(201);
    }

    public function test_updateUserAnswer()
    {
        $data = [
            'user_id' => '5',
            'quiz_id' => '3',
            'answer_id' => '1'
        ];
        $this->json('PUT', 'api/userAnswer/4', $data, ['Accept' => 'Application/json'])
            ->assertStatus(200);
    }

    public function test_deleteUserAnswer()
    {
        $data = [
            'id' => '13'
        ];
        $this->json('DELETE', 'api/userAnswer/13', $data, ['Accept' => 'Application/json'])
            ->assertStatus(404);
    }
}