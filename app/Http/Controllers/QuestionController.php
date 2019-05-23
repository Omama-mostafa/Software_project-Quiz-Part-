<?php

namespace App\Http\Controllers;

use App\question;
use Illuminate\Http\Request;
use App\Http\Resources\QuestionResource as QuestionResource;

class QuestionController extends Controller
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
     * @return QuestionResource
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $question=new question($request->all());
        $question->save();
        return new QuestionResource($question);
    }

    /**
     * @param  \App\question  $question
     * @return QuestionResource
     */
    public function show(question $question)
    {
        return new QuestionResource($question);
    }

    /**
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question){}

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\question  $question
     * @return QuestionResource
     */
    public function update(Request $request, question $question)
    {
        $question->update($request->all());
        $question->save();
        return new QuestionResource($question);
    }

    /**
     * @param  \App\question $question
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(question $question)
    {
        $question->delete();
        $response=[
            'message'=>"deleted"
        ];
        return response()->json($response);
    }
}
