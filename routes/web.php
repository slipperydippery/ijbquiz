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

Route::get('/', 'QuizController@location');

Route::get('/quiz/location', 'QuizController@location')->name('location.show');
Route::post('/quiz/location', 'QuizController@storelocation')->name('location.store');
Route::get('/quiz/locationtype', 'QuizController@locationtype')->name('locationtype.show');
Route::post('/quiz/locationtype', 'QuizController@storelocationtype')->name('locationtype.store');
Route::get('/quiz/employeeorigin', 'QuizController@employeeorigin')->name('employeeorigin.show');
Route::post('/quiz/employeeorigin', 'QuizController@storeemployeeorigin')->name('employeeorigin.store');
Route::get('/quiz/employeemobility', 'QuizController@employeemobility')->name('employeemobility.show');
Route::post('/quiz/employeemobility', 'QuizController@storeemployeemobility')->name('employeemobility.store');
Route::get('/quiz/inhousemobility', 'QuizController@inhousemobility')->name('inhousemobility.show');
Route::post('/quiz/inhousemobility', 'QuizController@storeinhousemobility')->name('inhousemobility.store');
Route::get('/quiz/rushhour', 'QuizController@rushhour')->name('rushhour.show');
Route::post('/quiz/rushhour', 'QuizController@storerushhour')->name('rushhour.store');
Route::get('/quiz/contactpermission', 'QuizController@contactpermission')->name('contactpermission.show');
Route::post('/quiz/contactpermission', 'QuizController@storecontactpermission')->name('contactpermission.store');
Route::get('/quiz/results', 'QuizController@results')->name('results.show');
Route::get('/quiz/start', 'QuizController@start')->name('quiz.start');
Route::post('/quiz/people', 'QuizController@storepeople')->name('people.store');

Route::post('/api/session/updatelocation', 'ApiSessionController@updatelocation');
Route::post('/api/session/updatelocationtype', 'ApiSessionController@updatelocationtype');
Route::post('/api/session/updateemployeecount', 'ApiSessionController@updateemployeecount');
Route::post('/api/session/updateemployeeorigin', 'ApiSessionController@updateemployeeorigin');
Route::post('/api/session/updateemployeemobility', 'ApiSessionController@updateemployeemobility');
Route::post('/api/session/updateinhousemobility', 'ApiSessionController@updateinhousemobility');
Route::post('/api/session/updateinhousemobilitytype', 'ApiSessionController@updateinhousemobilitytype');
