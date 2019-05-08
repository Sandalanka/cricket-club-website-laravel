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
Route::get('/teamplayer', [
    'uses'=>'PlayerController@getplayer'

]);

Route::get('/team', [
    'uses'=>'PlayerController@show',
'as'=>'teamshow'
]);

Route::get('/admin', [
    'uses'=>'ScheduleController@login',
    'as'=>'admin'

]);

Route::get('/feedback', [
    'uses'=>'FeedbackController@getfeedback',
    'as'=>'feedback'

]);

Route::post('/post', [
    'uses'=>'FeedbackController@post',
    'as'=>'post'

]);

Route::get('addschedule', [
    'uses'=>'ScheduleController@addschedule',
'as'=>'addschedule'
]);

Route::post('store', [
    'uses'=>'ScheduleController@store',
'as'=>'store'
]);

Route::get('deleteschedule/{id}', [
    'uses'=>'ScheduleController@delete',
'as'=>'deleteschedule'
]);

Route::get('result', [
    'uses'=>'ResultController@show',
    'as'=>'result'

]);

Route::get('addresult', [
    'uses'=>'ResultController@add',
    'as'=>'addresult'

]);

Route::post('storeresult', [
    'uses'=>'ResultController@store',
'as'=>'storeresult'
]);

Route::get('deleteresult/{id}', [
    'uses'=>'ResultController@delete',
'as'=>'deleteresult'
]);

Route::get('/schedule', [
    'uses'=>'ScheduleController@schedule',
    'as'=>'schedule'

]);

Route::get('resultshow', [
    'uses'=>'ResultController@result',
    'as'=>'resultshow'

]);

Route::post('adminlogin', [
    'uses'=>'UserController@adminlogin',
'as'=>'adminlogin'
]);

Route::get('/login', [
   'uses'=>'AdminController@loginn'

]);

Route::get('logout', [
    'uses'=>'UserController@logout',
 'as'=>'logout'
 ]);


