<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quiz/start', 'QuizController@start')->name('quiz.start');
Route::post('/quiz/quizmensen', 'QuizController@storequizmensen')->name('quizmensen.store');
Route::get('/quiz/quizlocatie', 'QuizController@quizlocatie')->name('quizlocatie.show');
Route::post('/quiz/quizlocatie', 'QuizController@storequizlocatie')->name('quizlocatie.store');
