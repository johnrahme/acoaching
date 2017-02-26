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
Auth::routes();

Route::get('/home', 'HomeController@index');

//Events

Route::get('/events', 'EventController@index')->name('events');
Route::get('/event/create', 'EventController@create')->name('event.create')->middleware('auth');
Route::get('/event/{id}/edit', 'EventController@edit')->name('event.edit')->middleware('auth');
Route::get('/event/{id}/view', 'EventController@view')->name('event.view');

Route::post('/event/store', 'EventController@store')->name('event.store')->middleware('auth');
Route::post('/event/update', 'EventController@update')->name('event.update')->middleware('auth');

Route::delete('/event/destroy', 'EventController@destroy')->name('event.destroy')->middleware('auth');

Route::get('/', function(){return redirect('/se');});
Route::get('/{lang}', 'WelcomeController@index')->name('welcome');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/edit', 'WelcomeController@edit')->name('welcome.edit')->middleware('auth');
Route::post('/{lang}/update', 'WelcomeController@update')->middleware('auth');
Route::post('/imgStore', 'WelcomeController@imgStore')->middleware('auth');

//About

Route::get('/{lang}/about', 'AboutController@index')->name('about');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/about/edit', 'AboutController@edit')->name('about.edit')->middleware('auth');
Route::post('/{lang}/about/update', 'AboutController@update')->name('about.update')->middleware('auth');

//Coaching

Route::get('/{lang}/coaching', 'CoachingController@index')->name('coaching');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/coaching/edit', 'CoachingController@edit')->name('coaching.edit')->middleware('auth');
Route::post('/{lang}/coaching/update', 'CoachingController@update')->name('coaching.update')->middleware('auth');

//Contact
Route::get('/{lang}/contact', 'ContactController@index')->name('contact');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/contact/edit', 'ContactController@edit')->name('contact.edit')->middleware('auth');
Route::post('/{lang}/contact/update', 'ContactController@update')->name('contact.update')->middleware('auth');


//Courses
Route::get('/{lang}/courses', 'CoursesController@index')->name('courses');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/courses/edit', 'CoursesController@edit')->name('courses.edit')->middleware('auth');
Route::post('/{lang}/courses/update', 'CoursesController@update')->name('courses.update')->middleware('auth');

//Prices

Route::get('/{lang}/prices', 'PricesController@index')->name('prices');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/prices/edit', 'PricesController@edit')->name('prices.edit')->middleware('auth');
Route::post('/{lang}/prices/update', 'PricesController@update')->name('prices.update')->middleware('auth');

//Treatment

Route::get('/{lang}/treatment', 'TreatmentController@index')->name('treatment');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/treatment/edit', 'TreatmentController@edit')->name('treatment.edit')->middleware('auth');
Route::post('/{lang}/treatment/update', 'TreatmentController@update')->name('treatment.update')->middleware('auth');

//Contact

Route::post('/mail', 'MailController@send')->name('mail.send');












