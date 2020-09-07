<?php

use Illuminate\Support\Facades\Route;

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
    return view('starting_page');
});

Route::resource('customer', 'CustomerController');

Route::resource('project', 'ProjectController');

Route::get('survey/{hash}', 'SurveyController@index');

Route::post('answer', 'AnswerController@store');

Route::get('answer_index', 'AnswerController@index');

Route::get('create_answer', 'AnswerController@create');

Route::get('/search', 'ProjectController@search'); 
Route::get('/search', 'CustomerController@search'); 

Route::resource('report', 'ReportController');

Route::post( 'save', 'HomeController@save' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

