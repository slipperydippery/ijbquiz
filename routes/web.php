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

Auth::routes();

Route::get('/', 'QuizController@start');

Route::get('/quiz/start', 'QuizController@start')->name('quiz.start');

Route::get('/quiz/location', 'QuizController@location')->name('location.show');
Route::get('/quiz/locationtype', 'QuizController@locationtype')->name('locationtype.show');
Route::get('/quiz/employeecount', 'QuizController@employeecount')->name('quiz.employeecount');
Route::get('/quiz/employeeorigin', 'QuizController@employeeorigin')->name('employeeorigin.show');
Route::get('/quiz/employeemobility', 'QuizController@employeemobility')->name('employeemobility.show');
Route::get('/quiz/inhousemobility', 'QuizController@inhousemobility')->name('inhousemobility.show');
Route::get('/quiz/electricmobility', 'QuizController@electricmobility')->name('electricmobility.show');

Route::get('/quiz/results', 'QuizController@results')->name('results.show');

Route::post('/api/session/updatelocation', 'ApiSessionController@updatelocation');
Route::post('/api/session/updatelocationtype', 'ApiSessionController@updatelocationtype');
Route::post('/api/session/updateemployeecount', 'ApiSessionController@updateemployeecount');
Route::post('/api/session/updateemployeeorigin', 'ApiSessionController@updateemployeeorigin');
Route::post('/api/session/updateemployeemobility', 'ApiSessionController@updateemployeemobility');
Route::post('/api/session/updateinhousemobility', 'ApiSessionController@updateinhousemobility');
Route::post('/api/session/updateelectricmobility', 'ApiSessionController@updateelectricmobility');

Route::resource('measure', 'MeasureController');
Route::post('/api/measure', 'ApiMeasureController@store');
Route::patch('/api/measure/{measure}', 'ApiMeasureController@update');
Route::delete('/api/measure/{measure}', 'ApiMeasureController@destroy');

Route::get('/api/answeroption/{answeroption}/measure', 'ApiAnsweroptionMeasureController@index');
Route::post('/api/answeroption/{answeroption}/measure', 'ApiAnsweroptionMeasureController@store');

// Route::post('/api/session/updateinhousemobilitytype', 'ApiSessionController@updateinhousemobilitytype');
// Route::post('/quiz/employeemobility', 'QuizController@storeemployeemobility')->name('employeemobility.store');
// Route::post('/quiz/inhousemobility', 'QuizController@storeinhousemobility')->name('inhousemobility.store');
// Route::get('/quiz/rushhour', 'QuizController@rushhour')->name('rushhour.show');
// Route::post('/quiz/rushhour', 'QuizController@storerushhour')->name('rushhour.store');
// Route::get('/quiz/contactpermission', 'QuizController@contactpermission')->name('contactpermission.show');
// Route::post('/quiz/contactpermission', 'QuizController@storecontactpermission')->name('contactpermission.store');




