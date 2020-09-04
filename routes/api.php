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
Route::post('/createWriting', 'Backend\WritingController@createWriting');
Route::post('/updateWriting/{id}', 'Backend\WritingController@updateWriting');
Route::post('/deleteWriting/{id}', 'Backend\WritingController@deleteWriting');
Route::get('/getWrite', 'Backend\WritingController@getWrite');
//writingAnswer
Route::post('/deleteWritingAnswer/{id}', 'Backend\WritingController@deleteWritingAnswer');
Route::get('/getWritingAnswer', 'Backend\WritingController@getWritingAnswer');
//writingResult
Route::post('/createWritingResult', 'Backend\WritingController@createWritingResult');
Route::post('/updateWritingResult', 'Backend\WritingController@updateWritingResult');
Route::get('/readWritingResult', 'Backend\WritingController@readWritingResult');




//crud User
//<<<<<<< HEAD
//Route::post('/createUser', 'Frontend\UserController@createUser');
//Route::post('/updateUser', 'Frontend\UserController@updateUser');
//Route::get('/readUser', 'Frontend\UserController@readUser');
////paypal
////Route::get('/paypal', 'Paypal\PaypalController@index');
//=======
//Route::post('/createUser', 'Backend\UserController@createUser');
//Route::post('/updateUser/{id}', 'Backend\UserController@updateUser');
//Route::get('/readUser', 'Backend\UserController@readUser');
//Route::get('/getUser', 'Backend\UserController@getUser');
//
////api submit listen, read, write
//Route::post('/storeListen', 'Frontend\ListeningController@storeResult');
//Route::post('/storeRead', 'Frontend\ReadingController@storeResult');
//Route::post('/storeWrite', 'Frontend\WritingController@storeResult');
//
////crud Reading
////reading
//Route::post('/createReading', 'Backend\ReadingController@createReading');
//Route::post('/updateReading/{id}', 'Backend\ReadingController@updateReading');
//Route::post('/deleteReading/{id}', 'Backend\ReadingController@deleteReading');
//Route::get('/getRead', 'Backend\ReadingController@getRead');
////reading question
//Route::post('/createReadingQuestion', 'Backend\ReadingController@createReadingQuestion');
//Route::post('/updateReadingQuestion/{id}', 'Backend\ReadingController@updateReadingQuestion');
//Route::get('/getReadingQuestion/{id}', 'Backend\ReadingController@getReadingQuestion');
//Route::post('/deleteReadingQuestion/{id}', 'Backend\ReadingController@deleteReadingQuestion');
////crud Listening
////listening
//Route::post('/createListening', 'Backend\ListeningController@createListening');
//Route::post('/updateListening/{id}', 'Backend\ListeningController@updateListening');
//Route::post('/deleteListening/{id}', 'Backend\ListeningController@deleteListening');
//Route::get('/readListening', 'Backend\ListeningController@readListening');
//Route::get('getListen', 'Backend\ListeningController@getListen');
////listening question
//Route::post('/createListeningQuestion', 'Backend\ListeningController@createListeningQuestion');
//Route::post('/updateListeningQuestion/{id}', 'Backend\ListeningController@updateListeningQuestion');
//Route::post('/deleteListeningQuestion/{id}', 'Backend\ListeningController@deleteListeningQuestion');
//Route::get('/getListeningQuestion/{id}', 'Backend\ListeningController@getListeningQuestion');
////crud Speaking
//Route::post('/createSpeaking', 'Backend\SpeakingController@createSpeaking');
//Route::post('/updateSpeaking', 'Backend\SpeakingController@updateSpeaking');
//Route::get('/readSpeaking', 'Backend\SpeakingController@readSpeaking');
//>>>>>>> 6ac4e75299604695a5badacc13da0dcded464c1e


