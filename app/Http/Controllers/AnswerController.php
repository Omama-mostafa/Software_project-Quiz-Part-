<?php

namespace App\Http\Controllers;

use App\answer;
use Illuminate\Http\Request;
use App\Http\Resources\AnswerResource as AnswerResource;

class AnswerController extends Controller
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
     * @param  \Illuminate\Http\Request $request
     * @return AnswerResource
     */
    public function store(Request $request)
    {
        $answer = new answer($request->all());
        $answer -> save();
        return new AnswerResource($answer);
    }

    /**
     * @param  \App\answer $answer
     * @return AnswerResource
     */
    public function show(answer $answer)
    {
        return new AnswerResource($answer);
    }

    /**
     * @param  \App\answer $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(answer $answer){}

    /**
     * @param  \Illuminate\Http\Request $request
     * @param  \App\answer $answer
     * @return AnswerResource
     */
    public function update(Request $request, answer $answer)
    {
        $answer ->update($request->all());
        $answer ->save();
        return new AnswerResource($answer);
    }

    /**
     * @param  \App\answer $answer
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(answer $answer)
    {
        $answer ->delete();
        $response = [
            'message' => "deleted"
        ];
        return response() ->json($response);
    }
}