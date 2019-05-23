<?php

use App\UserQuiz;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Answer Apis
//Route::post('addAnswer','AnswerController@store');
//Route::get('getAnswer','AnswerController@show');
//Route::put('updateAnswer','AnswerController@update');
//Route::delete('deleteAnswer','AnswerController@destroy');
//----------------------------------------------------------------------------------------------
Route::resource('question', 'QuestionController');
Route::resource('quiz', 'QuizController');
Route::resource('answer', 'AnswerController');
Route::resource('userAnswer', 'UserAnswerController');
Route::resource('userQuiz', 'UserQuizController');