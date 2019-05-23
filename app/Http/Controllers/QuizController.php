<?php
namespace App\Http\Controllers;

use App\quiz;
use Illuminate\Http\Request;
use App\Http\Resources\QuizResource as QuizResource;

class QuizController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return QuizResource::collection(quiz::all());
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create(){}

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return QuizResource
     */
    public function store(Request $request)
    {
        $quiz=new quiz($request->all());
        $quiz->save();
        return new QuizResource($quiz);
    }

    /**
     * @param  \App\quiz  $quiz
     * @return QuizResource
     */
    public function show(quiz $quiz)
    {
        return new QuizResource($quiz);
    }

    /**
     * @param  \App\quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(quiz $quiz){}

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\quiz  $quiz
     * @return QuizResource
     */
    public function update(Request $request, quiz $quiz)
    {
        $quiz->update($request->all());
        $quiz->save();
        return new QuizResource($quiz);
    }

    /**
     * @param  \App\quiz $quiz
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(quiz $quiz)
    {
        $quiz->delete();
        $response=[
            'message'=>"deleted"
        ];
        return response()->json($response);
    }
}
