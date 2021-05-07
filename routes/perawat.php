<?php


Route::get('/perawat', 'Perawat\MainController@home');
Route::get('/perawat/reset-session', 'Perawat\MainController@reset_session');
Route::get('/perawat/pasien/{id}', 'Perawat\MainController@get_pasien_data');
Route::put('/perawat/pasien', 'Perawat\MainController@update_pasien_data');