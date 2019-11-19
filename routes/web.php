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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');



Route::resource('divisions', 'DivisionController');

Route::resource('subdivisions', 'SubdivisionController');

Route::resource('certificates', 'CertificateController');

Route::resource('convictionRecords', 'ConvictionRecordController');

Route::resource('convicts', 'ConvictController');

Route::resource('judgements', 'JudgementController');



Route::resource('sentences', 'SentenceController');

Route::resource('sentenceReductions', 'SentenceReductionController');

Route::resource('thumbPrints', 'ThumbPrintController');

Route::resource('users', 'UserController');

Route::resource('guardians', 'GuardianController');


Route::resource('quarters', 'QuarterController');