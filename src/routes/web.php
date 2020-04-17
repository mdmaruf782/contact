<?php


Route::group(['namespace' => 'Mdmaruf\Contact\Http\Controllers'], function() {
	Route::get('/contact', 'ContactController@index');

	Route::post('contact-us', 'ContactController@SendMail')->name('contact');
});
