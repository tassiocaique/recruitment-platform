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


Route::get('auth/logout', 'LoginController@logout');
Route::get('auth', 'LoginController@index');
Route::post('auth', 'LoginController@authenticate');

// Route::get('curriculum/list', 'CurriculumController@list')->middleware('auth');
// Route::post('curriculum/{id}/tag/delete', 'CurriculumController@deleteTag')->middleware('auth');
// Route::post('curriculum/{id}/tag', 'CurriculumController@insertTag')->middleware('auth');
// Route::get('curriculum/{id}/tag', 'CurriculumController@listTag')->middleware('auth');
// Route::post('curriculum/{id}/rating', 'CurriculumController@updateStar')->middleware('auth');
// Route::post('curriculum/{id}/archive', 'CurriculumController@archive')->middleware('auth');
// Route::post('curriculum/{id}/restore', 'CurriculumController@restore')->middleware('auth');
// Route::get('curriculum/{id}/pdf', 'CurriculumController@getCurriculumPDF')->middleware('auth');
// Route::resource('curriculum', 'CurriculumController')->middleware('auth');

Route::get('{path}', function () {
    if (Auth::user()) {
        return view('curriculas', ['user'=>Auth::user()]);
    }
    return redirect('login');
})->where('path', '(.*)');

Route::resource('/', 'HomeController');