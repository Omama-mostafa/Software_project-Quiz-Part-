<?php


namespace Tests\Unit;

use App\quiz;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class TestQuiz extends TestCase
{
    public function test_getQuiz()
    {
        $data = [
            'id' => '1'
        ];
        $this->json('GET', 'api/quiz/1', $data, ['Accept' => 'Application/json'])
            ->assertStatus(200);
    }

    public function test_addQuiz()
    {
        $data = [
            'title' => 'quiz1',
            'skill_type' => 'abc',
            'pass_score' => '20',
            'duration' => '5',
            'questions'=> 'question1, question2'
        ];
        $this->json('POST', 'api/quiz', $data, ['Accept' => 'Application/json'])
            ->assertStatus(201);
    }

    public function test_updateQuiz()
    {
        $data = [
            'title' => 'quiz5',
            'skill_type' => 'aaa',
            'pass_score' => '14',
            'duration' => '3',
            'questions'=> 'question7, question2'
        ];
        $this->json('PUT', 'api/quiz/1', $data, ['Accept' => 'Application/json'])
            ->assertStatus(200);
    }

    public function test_deleteQuiz()
    {
        $data = [
            'id' => '2'
        ];
        $this->json('DELETE', 'api/quiz/2', $data, ['Accept' => 'Application/json'])
            ->assertStatus(404);
    }
}