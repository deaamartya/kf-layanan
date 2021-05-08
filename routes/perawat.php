<?php

Route::get('/perawat', 'Perawat\MainController@home');
Route::get('/perawat/test', function(){
    // dd(Session::get('perawat_pasien')['PX0001']['usia']);
    dd(Session::get('perawat_pasien'));
});
Route::get('/perawat/reset-session', 'Perawat\MainController@reset_session');
Route::get('/perawat/pasien/{id}', 'Perawat\MainController@get_pasien_data');
Route::put('/perawat/pasien', 'Perawat\MainController@update_pasien_data');
Route::put('/perawat/pasien/status-panggil', 'Perawat\MainController@update_status_panggil');
Route::post('/perawat/antrian', 'Perawat\MainController@antrian');