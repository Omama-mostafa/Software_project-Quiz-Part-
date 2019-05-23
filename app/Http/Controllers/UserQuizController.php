<?php

namespace App\Http\Controllers;

use App\UserQuiz;
use Illuminate\Http\Request;
use App\Http\Resources\UserQuizResource as UserQuizResource;

class UserQuizController extends Controller
{
    /** 
     * @return \Illuminate\Http\Response
     */
    public function index(){}

    /** 
     * @return \Illuminate\Http\Response
     */
    public function create(){}

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return UserQuizResource
     */
    public function store(Request $request)
    {
        $userQuiz=new UserQuiz($request->all());
        $userQuiz->user_score = $userQuiz->CalcUserScore();
        $userQuiz->save();
        return new UserQuizResource($userQuiz);
    }

    /**
        * @param  \App\UserQuiz  $userQuiz
        * @return UserQuizResource
     */
    public function show(UserQuiz $userQuiz)
    {
        return new UserQuizResource($userQuiz);
    }

    /**
     * @param  \App\UserQuiz  $userQuiz
     * @return \Illuminate\Http\Response
     */
    public function edit(UserQuiz $userQuiz){}

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserQuiz  $userQuiz
     * @return UserQuizResource
     */
    public function update(Request $request, UserQuiz $userQuiz)
    {
        $userQuiz ->update($request->all());
        $userQuiz->user_score = $userQuiz->CalcUserScore();
        $userQuiz ->save();
        return new UserQuizResource($userQuiz);
    }

    /**
     * @param \App\UserQuiz $userQuiz
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(UserQuiz $userQuiz)
    {
        $userQuiz ->delete();
        $response = [
            'message' => "Delete"
        ];
        return response()->json($response);
    }
}
