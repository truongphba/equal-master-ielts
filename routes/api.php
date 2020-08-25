<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('register', 'Frontend\AuthController@register');
Route::post('login', 'Frontend\AuthController@login');
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('auth', 'Frontend\AuthController@user');
    Route::post('logout', 'Frontend\AuthController@logout');
});
Route::middleware('jwt.refresh')->get('/token/refresh', 'Frontend\AuthController@refresh');
//Route::get('/result', 'Frontend\ResultController@index');
//api Bằng viết
Route::get('/index', 'Frontend\SiteController@index');
Route::get('/listening', 'Frontend\ListeningController@listening');
Route::get('/reading', 'Frontend\ReadingController@reading');
Route::get('/writing', 'Frontend\WritingController@writing');

Route::get('/listenHistory/{id}', 'Frontend\HistoryController@listenHistory');
Route::get('/readHistory/{id}', 'Frontend\HistoryController@readHistory');
Route::get('/speakHistory/{id}', 'Frontend\HistoryController@speakHistory');
Route::get('/writeHistory/{id}', 'Frontend\HistoryController@writeHistory');


Route::get('/active-email', 'Frontend\AuthController@active')->name('active');
//writing
//speaking
Route::get('/speaking-question', 'Frontend\SpeakingController@speaking');

//crud writing
//writing
Route::post('/createWriting', 'Backend\WritingController@createWriting');
Route::post('/updateWriting', 'Backend\WritingController@updateWriting');
Route::get('/readWriting', 'Backend\WritingController@readWriting');
//writingAnswer
Route::post('/createWritingAnswer', 'Backend\WritingController@createWritingAnswer');
Route::post('/updateWritingAnswer', 'Backend\WritingController@updateWritingAnswer');
Route::get('/readWritingAnswer', 'Backend\WritingController@readWritingAnswer');
//writingResult
Route::post('/createWritingResult', 'Backend\WritingController@createWritingResult');
Route::post('/updateWritingResult', 'Backend\WritingController@updateWritingResult');
Route::get('/readWritingResult', 'Backend\WritingController@readWritingResult');
//crud User
Route::post('/createUser', 'Backend\UserController@createUser');
Route::post('/updateUser', 'Backend\UserController@updateUser');
Route::get('/readUser', 'Backend\UserController@readUser');



