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
Route::get('/history', 'Frontend\HistoryController@history');
Route::get('/listening', 'Frontend\ListeningController@listening');
Route::get('/reading', 'Frontend\ReadingController@reading');
Route::get('/writing', 'Frontend\WritingController@writing');

//writing

Route::get('/active-email', 'Frontend\AuthController@active')->name('active');




