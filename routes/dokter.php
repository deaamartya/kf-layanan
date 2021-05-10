<?php

// Home

use Illuminate\Support\Facades\Session;

Route::get('/dokter', 'Dokter\MainController@home');
Route::get('/dokter/reset-session', 'Dokter\MainController@reset_session');
Route::get('/dokter/pasien/{id}', 'Dokter\MainController@get_pasien_data');
Route::put('/dokter/pasien', 'Dokter\MainController@update_pasien_data');
Route::put('/dokter/pasien/status-panggil', 'Dokter\MainController@update_status_panggil');
Route::post('/dokter/antrian', 'Dokter\MainController@antrian');

// Rekam Medis
Route::get('/dokter/rekam-medis', 'Dokter\RekamMedisController@index');

// Periksa Pasien
Route::get('/dokter/periksa/{id}', 'Dokter\PeriksaController@halaman_periksa');
Route::post('/dokter/periksa', 'Dokter\PeriksaController@store_data');

// Download dokumen/surat
Route::get('/dokter/download/document/{filename}', 'Dokter\PeriksaController@download_dokumen');

// Flush session
Route::get('/dokter/flush-session', function(){
    Session::flush();
});