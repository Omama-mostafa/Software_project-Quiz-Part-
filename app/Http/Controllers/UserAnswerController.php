<?php

namespace App\Http\Controllers;

use App\User;
use App\UserAnswer;
use Illuminate\Http\Request;
use App\Http\Resources\UserAnswerResource as UserAnswerResource;

class UserAnswerController extends Controller
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
     * @return UserAnswerResource
     */
    public function store(Request $request)
    {
        $userAnswer=new UserAnswer($request->all());
        $userAnswer->answer_score = $userAnswer->getAnswerScore();
        $userAnswer->save();
        return new UserAnswerResource($userAnswer);
    }

    /** 
     * @param  \App\UserAnswer  $userAnswer
     * @return UserAnswerResource
     */
    public function show(UserAnswer $userAnswer)
    {
        return new UserAnswerResource($userAnswer);
    }

    /** 
     * @param  \App\UserAnswer  $userAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAnswer $userAnswer){}

    /** 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserAnswer  $userAnswer
     * @return UserAnswerResource
     */
    public function update(Request $request, UserAnswer $userAnswer)
    {
        $userAnswer->update($request ->all());
        $userAnswer->answer_score = $userAnswer->getAnswerScore();
        $userAnswer->save();
        return new UserAnswerResource($userAnswer);
    }

    /**
     * @param  \App\UserAnswer $userAnswer
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(UserAnswer $userAnswer)
    {
        $userAnswer->delete();
        $response = [
            'message' => "Deleted"
        ];
        return response()->json($response);
    }
}
