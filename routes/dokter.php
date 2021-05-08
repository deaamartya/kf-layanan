<?php

// Home
Route::get('/dokter', 'Dokter\MainController@home');
Route::get('/dokter/test', function(){
    // dd(Session::get('perawat_pasien')['PX0001']['usia']);
    dd(Session::get('perawat_pasien'));
});
Route::get('/dokter/reset-session', 'Dokter\MainController@reset_session');
Route::get('/dokter/pasien/{id}', 'Dokter\MainController@get_pasien_data');
Route::put('/dokter/pasien', 'Dokter\MainController@update_pasien_data');
Route::put('/dokter/pasien/status-panggil', 'Dokter\MainController@update_status_panggil');
Route::post('/dokter/antrian', 'Dokter\MainController@antrian');

// Rekam Medis
Route::get('/dokter/rekam-medis', 'Dokter\RekamMedisController@index');

// Periksa Pasien
Route::get('/dokter/periksa/{id}', 'Dokter\PeriksaController@halaman_periksa');