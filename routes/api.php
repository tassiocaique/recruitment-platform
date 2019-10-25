<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::get('curriculum', 'CurriculumController@list');
    Route::post('curriculum/{id}/tag/delete', 'CurriculumController@deleteTag');
    Route::post('curriculum/{id}/tag', 'CurriculumController@insertTag');
    Route::get('curriculum/{id}/tag', 'CurriculumController@listTag');
    Route::post('curriculum/{id}/rating', 'CurriculumController@updateStar');
    Route::post('curriculum/{id}/archive', 'CurriculumController@archive');
    Route::post('curriculum/{id}/restore', 'CurriculumController@restore');
    Route::get('curriculum/{id}/pdf', 'CurriculumController@getCurriculumPDF');
    Route::resource('curriculum', 'CurriculumController');
});