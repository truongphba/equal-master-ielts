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

//writing
Route::get('/active-email', 'Frontend\AuthController@active')->name('active');

//crud writing
//writing
Route::post('/createWriting', 'Frontend\WritingController@createWriting');
Route::post('/updateWriting', 'Frontend\WritingController@updateWriting');
Route::get('/readWriting', 'Frontend\WritingController@readWriting');
//writingAnswer
Route::post('/createWritingAnswer', 'Frontend\WritingController@createWritingAnswer');
Route::post('/updateWritingAnswer', 'Frontend\WritingController@updateWritingAnswer');
Route::get('/readWritingAnswer', 'Frontend\WritingController@readWritingAnswer');
//writingResult
Route::post('/createWritingResult', 'Frontend\WritingController@createWritingResult');
Route::post('/updateWritingResult', 'Frontend\WritingController@updateWritingResult');
Route::get('/readWritingResult', 'Frontend\WritingController@readWritingResult');
//crud User
Route::post('/createUser', 'Frontend\UserController@createUser');
Route::post('/updateUser', 'Frontend\UserController@updateUser');
Route::get('/readUser', 'Frontend\UserController@readUser');
//paypal
//Route::get('/paypal', 'Paypal\PaypalController@index');


