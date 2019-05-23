<?php


namespace Tests\Unit;
use Tests\TestCase;


class TestUserQuiz extends TestCase
{
    public function test_getUserQuiz()
    {
        $data = [
            'id' => '3'
        ];
        $this->json('GET', 'api/userQuiz/3', $data, ['Accept' => 'Application/json'])
            ->assertStatus(200);
    }

    public function test_addUserQuiz()
    {
        $data = [
            'user_id' => '8',
            'quiz_id' => '2',
            'user_score' => '20'
        ];
        $this->json('POST', 'api/userQuiz', $data, ['Accept' => 'Application/json'])
            ->assertStatus(201);
    }

    public function test_updateUserQuiz()
    {
        $data = [
            'user_id' => '5',
            'quiz_id' => '7'
            ];
        $this->json('PUT', 'api/userQuiz/3', $data, ['Accept' => 'Application/json'])
            ->assertStatus(200);
    }

    public function test_deleteUserQuiz()
    {
        $data = [
            'id' => '2'
        ];
        $this->json('DELETE', 'api/userQuiz/2', $data, ['Accept' => 'Application/json'])
            ->assertStatus(404);
    }
}