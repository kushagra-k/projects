<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/','program@log_in_form');

Route::get('survey_form','program@survey_form');
Route::post('survey_result','program@survey_result');

Route::get('log_in_form','program@log_in_form');
Route::post('log_in_result','program@log_in_result');

Route::get('thank_you','program@thank_you');

Route::post('go_back','program@go_back_to_page');





?>