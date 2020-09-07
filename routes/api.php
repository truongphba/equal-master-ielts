<?php

use App\Examining;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
Route::post('admin-login', 'Backend\LoginController@login');
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('auth', 'Frontend\AuthController@user');
    Route::post('logout', 'Frontend\AuthController@logout');
    Route::get('/reading', 'Frontend\ReadingController@reading');
    Route::get('/listening', 'Frontend\ListeningController@listening');
    Route::get('/speaking', 'Frontend\SpeakingExamController@speaking');
    Route::post('/exam/update','Frontend\ExamController@updateExam');
    Route::post('/exam/update-time','Frontend\ExamController@updateTime');
    Route::get('/writing', 'Frontend\WritingController@writing');
    Route::get('/checkExam', 'Frontend\ExamController@checkCurrentExam');
    Route::get('/get-result', 'Frontend\ExamController@getResult');

});
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('admin-auth', 'Backend\LoginController@user');
    Route::post('admin-logout', 'Backend\LoginController@logout');
    //paypall
});
//Route::resource('payment','PaymentController');
Route::middleware('jwt.refresh')->get('/token/refresh', 'Frontend\AuthController@refresh');
//Route::get('/result', 'Frontend\ResultController@index');
//api Bằng viết
Route::get('/index', 'Frontend\SiteController@index');
Route::post('/exam','Frontend\ExamController@storeExam');
Route::post('/exam/store-mark','Frontend\ExamController@storeMark')->middleware('cors');
Route::post('/vote','Frontend\ExamController@submitVote')->middleware('cors');

Route::get('/listenHistory/{id}', 'Frontend\HistoryController@listenHistory');
Route::get('/readHistory/{id}', 'Frontend\HistoryController@readHistory');
Route::get('/speakHistory/{id}', 'Frontend\HistoryController@speakHistory');
Route::get('/writeHistory/{id}', 'Frontend\HistoryController@writeHistory');
Route::get('/history/{id}', 'Frontend\HistoryController@history');


Route::get('/active-email', 'Frontend\AuthController@active')->name('active');
//writing

Route::get('/user/{id}', 'Frontend\SiteController@getUser');
Route::get('/lecture-exam','Frontend\SiteController@lectureExam');
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

Route::post('/createUser', 'Backend\UserController@createUser');
Route::post('/updateUser/{id}', 'Backend\UserController@updateUser');
Route::get('/readUser', 'Backend\UserController@readUser');
Route::get('/getUser', 'Backend\UserController@getUser');
//<<<<<<< HEAD
//Route::post('/createUser', 'Frontend\UserController@createUser');
//Route::post('/updateUser', 'Frontend\UserController@updateUser');
//Route::get('/readUser', 'Frontend\UserController@readUser');
////paypal
////Route::get('/paypal', 'Paypal\PaypalController@index');

//api submit listen, read, write
Route::post('/storeListen', 'Frontend\ListeningController@storeResult');
Route::post('/storeRead', 'Frontend\ReadingController@storeResult');
Route::post('/storeWrite', 'Frontend\WritingController@storeResult');

//crud Reading
//reading
Route::post('/createReading', 'Backend\ReadingController@createReading');
Route::post('/updateReading/{id}', 'Backend\ReadingController@updateReading');
Route::post('/deleteReading/{id}', 'Backend\ReadingController@deleteReading');
Route::get('/getRead', 'Backend\ReadingController@getRead');
//reading question
Route::post('/createReadingQuestion', 'Backend\ReadingController@createReadingQuestion');
Route::post('/updateReadingQuestion/{id}', 'Backend\ReadingController@updateReadingQuestion');
Route::get('/getReadingQuestion/{id}', 'Backend\ReadingController@getReadingQuestion');
Route::post('/deleteReadingQuestion/{id}', 'Backend\ReadingController@deleteReadingQuestion');
//crud Listening
//listening
Route::post('/createListening', 'Backend\ListeningController@createListening');
Route::post('/updateListening/{id}', 'Backend\ListeningController@updateListening');
Route::post('/deleteListening/{id}', 'Backend\ListeningController@deleteListening');
Route::get('/readListening', 'Backend\ListeningController@readListening');
Route::get('getListen', 'Backend\ListeningController@getListen');
//listening question
Route::post('/createListeningQuestion', 'Backend\ListeningController@createListeningQuestion');
Route::post('/updateListeningQuestion/{id}', 'Backend\ListeningController@updateListeningQuestion');
Route::post('/deleteListeningQuestion/{id}', 'Backend\ListeningController@deleteListeningQuestion');
Route::get('/getListeningQuestion/{id}', 'Backend\ListeningController@getListeningQuestion');
//crud Speaking
Route::post('/createSpeaking', 'Backend\SpeakingController@createSpeaking');
Route::post('/updateSpeaking', 'Backend\SpeakingController@updateSpeaking');
Route::get('/readSpeaking', 'Backend\SpeakingController@readSpeaking');


Route::get('/meetings', 'Zoom\MeetingController@list');

// Create meeting room using topic, agenda, start_time.
Route::post('/meetings', 'Zoom\MeetingController@create');

// Get information of the meeting room by ID.
Route::get('/meetings/{id}', 'Zoom\MeetingController@get')->where('id', '[0-9]+');
Route::delete('/meetings/{id}', 'Zoom\MeetingController@delete')->where('id', '[0-9]+');

Route::get('/money', 'Backend\DashboardController@getMoney');

//add fund pages
Route::post('addfund', 'AddFundController@create');
Route::get('getFundAdmin', 'AddFundController@getFundAdmin');
Route::post('updateFund/{id}', 'AddFundController@updateFund');
Route::post('deleteFund/{id}', 'AddFundController@deleteFund');

