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


// Frontend Route List
Route::get('/candidates', 'Frontend\BioContoller@index')->name('candidate');
Route::get('/candidates/{candidates}', 'Frontend\BioContoller@detail')->name('candidate.detail');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {
    Route::resource('/', 'Backend\AdminController');

    Route::resource('/skill', 'Backend\SkillController');
    Route::resource('/personal', 'Backend\PersonalController');
    Route::resource('/education', 'Backend\EducationController');
    Route::resource('/language', 'Backend\LanguageController');
    Route::resource('/experience', 'Backend\ExperienceController');
});
