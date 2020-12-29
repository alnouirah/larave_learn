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
})->name('welcome');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

// Login And Register
Route::get('/candidate/login','Auth\CandidateLoginController@showLoginForm')->name('candidate.login');
Route::post('/candidate/login','Auth\CandidateLoginController@login')->name('candidate.login.submit');
Route::post('/candidate/register','Auth\CandidateRegisterController@create')->name('CandidateRegister');

Route::middleware(['auth:candidate','progress'])->group(function(){

    Route::get('/candidate/logout','Auth\CandidateLoginController@logout')->name('candidate.logout');

    // Dashboard (Personal Information)
    Route::get('/candidateHome', 'CandidateController@index')->name('candidate-home');
    Route::post('/candidateHome', 'CandidateController@save')->name('candidate-home');
    
    // Edications
    Route::get('/educations', 'EducationsController@index')->name('educations.index');
    Route::post('/educations', 'EducationsController@store')->name('educations.store');
    Route::delete('/educations/{education}','EducationsController@destroy')->name('educations.destroy');

    // Training
    Route::get('/training', 'TrainingController@index')->name('training.index');;
    Route::post('/training', 'TrainingController@store')->name('training.store');
    Route::delete('/training/{training}', 'TrainingController@destroy')->name('training.destroy');

    // Experince
    Route::get('/experince', 'ExperinceController@index')->name('experince.index');
    Route::post('/experince', 'ExperinceController@store')->name('experince.store');
    Route::delete('/experince/{experince}', 'ExperinceController@destroy')->name('experince.destroy');

    // Habbites
    Route::get('/habbites', 'HabbitesController@index')->name('habbites.index');
    Route::post('/habbites', 'HabbitesController@store')->name('habbites.store');
    Route::delete('/habbites/{habbites}', 'HabbitesController@destroy')->name('habbites.destroy');

    // Jobs
    Route::get('/jobs', 'JobsController@index')->name('jobs.index');
    Route::post('/jobs', 'JobsController@store')->name('jobs.store');
    Route::delete('/jobs/{jobs}', 'JobsController@destroy')->name('jobs.destroy');

    // Languages
    Route::get('/languages', 'LanguagesController@index')->name('languages.index');
    Route::post('/languages', 'LanguagesController@store')->name('languages.store');
    Route::delete('/languages/{languages}', 'LanguagesController@destroy')->name('languages.destroy');

    // Pc 
    Route::get('/pc', 'PcController@index')->name('pc.index');
    Route::post('/pc', 'PcController@store')->name('pc.store');
    Route::delete('/pc/{pc}', 'PcController@destroy')->name('pc.destroy');

    // Relatives
    Route::get('/relatives', 'RelativesController@index')->name('relatives.index');
    Route::post('/relatives', 'RelativesController@store')->name('relatives.store');
    Route::delete('/relatives/{relatives}', 'RelativesController@destroy')->name('relatives.destroy');

    // NonRelatives
    Route::get('/nonRelatives', 'NonrelativsController@index')->name('nonRelatives.index');
    Route::post('/nonRelatives', 'NonrelativsController@store')->name('nonRelatives.store');
    Route::delete('/nonRelatives/{nonRelatives}', 'NonrelativsController@destroy')->name('nonRelatives.destroy');

    // NoamanRelatives
    Route::get('/noamanRelatives', 'noamanRelativesController@index')->name('noamanRelatives.index');
    Route::post('/noamanRelatives', 'noamanRelativesController@store')->name('noamanRelatives.sotre');
    Route::delete('/noamanRelatives/{noamanRelatives}', 'noamanRelativesController@destroy')->name('noamanRelatives.destroy');

    // GeneralInfo
    Route::get('/generalInfo', 'generalInfoController@index')->name('generalInfo.index');
    Route::post('/generalInfo', 'generalInfoController@store')->name('generalInfo.store');
    Route::delete('/generalInfo/{generalInfo}', 'generalInfoController@destroy')->name('generalInfo.destroy');

    // Jobs
    Route::get('/applay/{job}','AvailablejobsController@jobsApplay')->name('available-jobs.applay');
    
    // Applications
    Route::get('applications','Applications@index')->name('applications.index');
    Route::delete('applications/{applications}','Applications@destroy')->name('applications.destroy');
});

// Jobs
Route::get('/available-jobs', 'AvailablejobsController@index')->name("available-jobs.index");
Route::get('/jobsDetail/{job}','AvailablejobsController@jobsDetail')->name('available-jobs.show');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
