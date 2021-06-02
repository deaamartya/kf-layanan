<?php

use Illuminate\Support\Facades\Route;
// Route Farmasi
Route::get('farmasi', 'FarmasiController@walkin')->name('farmasi');
Route::get('pesanan-online', 'FarmasiController@online')->name('pesanan-online');
Route::get('farmasi/walkin-reset', 'FarmasiController@resetWalkin');
Route::get('otw/{id}', 'FarmasiController@otw');
Route::get('farmasi/pesanan/konfirm/stock/{id}/{status}', 'FarmasiController@checkStock');
// Route Pasien
Route::view('pasien','pasien.home');
Route::post('login',function(){
    return redirect('pasien/pembayaran');
});
Route::view('pasien/pembayaran','pasien.pembayaran');
Route::view('pasien/detail-antrian','pasien.detail-antrian');
Route::view('pasien/riwayat-layanan-dokter','pasien.riwayat-layanan-dokter');
Route::view('pasien/resep-aktif','pasien.resep-aktif');
Route::view('pasien/pesan-online','pasien.pesan-online');
// Route untuk simulasi
// Route::view('pasien/pembayaran-simulasi','pasien.pembayaran-simulasi');
// Route::view('pasien/pembayaran-umum','pasien.pembayaran-umum');
// Route::view('pasien/pembayaran-lainnya','pasien.pembayaran-lainnya');

// Route Umum
Route::view('list-spesialisasi','umum.list-spesialisasi');
Route::view('list-klinik','umum.list-klinik');
Route::view('registrasi','auth.register');
Route::view('login','auth.login');


// Route Farmasi
Route::get('farmasi/pesanan/{id}', 'FarmasiController@checkStatus');
Route::get('farmasi/pesanan-reset', 'FarmasiController@resetOnline');
Route::get('ambil/{id}', 'FarmasiController@ambil');
Route::get('pesanan-online/online', 'FarmasiController@pesanOnline');
Route::get('konfirm-ambil', 'FarmasiController@simAmbil');
Route::get('konfirm-kirim', 'FarmasiController@simKirim');
Route::get('konfirm-selesai', 'FarmasiController@simSelesai');
Route::get('diambil/{id}', 'FarmasiController@diambil');
Route::get('ready-kirim/{id}', 'FarmasiController@readyKirim');
Route::get('farmasi/copy-resep/{id}', 'FarmasiController@copyResep');
Route::get('walkin/online', 'FarmasiController@pesanOnlineWalkin');
Route::get('add', 'FarmasiController@data');
Route::get('/', function () {
    return view('gogi.welcome');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return redirect('list-spesialisasi');
})->name('dashboard');

Route::get('orders', function () {
    return view('gogi.orders');
})->name('orders');

Route::get('products', function () {
    return view('gogi.products');
})->name('products');

Route::get('product-detail', function () {
    return view('gogi.product-detail');
})->name('product-detail');

Route::get('chat', function () {
    return view('gogi.chat');
})->name('chat');

Route::get('mail', function () {
    return view('gogi.mail');
})->name('mail');

Route::get('todo-list', function () {
    return view('gogi.todo-list');
})->name('todo-list');

Route::get('file-manager', function () {
    return view('gogi.file-manager');
})->name('file-manager');

Route::get('calendar', function () {
    return view('gogi.calendar');
})->name('calendar');

Route::get('gallery', function () {
    return view('gogi.gallery');
})->name('gallery');

Route::get('invoice', function () {
    return view('gogi.invoice');
})->name('invoice');

// User

Route::get('users', function () {
    return view('gogi.users');
})->name('users');

Route::get('settings', function () {
    return view('gogi.settings');
})->name('settings');

Route::get('recovery-password', function () {
    return view('gogi.recovery-password');
})->name('recovery-password');

Route::get('lock-screen', function () {
    return view('gogi.lock-screen');
})->name('lock-screen');

Route::get('profile', function () {
    return view('gogi.profile');
})->name('profile');

// Basic Components

Route::get('alert', function () {
    return view('gogi.alert');
})->name('alert');

Route::get('accordion', function () {
    return view('gogi.accordion');
})->name('accordion');

Route::get('buttons', function () {
    return view('gogi.buttons');
})->name('buttons');

Route::get('dropdown', function () {
    return view('gogi.dropdown');
})->name('dropdown');

Route::get('list-group', function () {
    return view('gogi.list-group');
})->name('list-group');

Route::get('pagination', function () {
    return view('gogi.pagination');
})->name('pagination');

Route::get('typography', function () {
    return view('gogi.typography');
})->name('typography');

Route::get('media-object', function () {
    return view('gogi.media-object');
})->name('media-object');

Route::get('progress', function () {
    return view('gogi.progress');
})->name('progress');

Route::get('modal', function () {
    return view('gogi.modal');
})->name('modal');

Route::get('spinners', function () {
    return view('gogi.spinners');
})->name('spinners');

Route::get('navs', function () {
    return view('gogi.navs');
})->name('navs');

Route::get('tab', function () {
    return view('gogi.tab');
})->name('tab');

Route::get('tooltip', function () {
    return view('gogi.tooltip');
})->name('tooltip');

Route::get('popovers', function () {
    return view('gogi.popovers');
})->name('popovers');

// Cards

Route::get('basic-cards', function () {
    return view('gogi.basic-cards');
})->name('basic-cards');

Route::get('image-cards', function () {
    return view('gogi.image-cards');
})->name('image-cards');

Route::get('scroll-cards', function () {
    return view('gogi.scroll-cards');
})->name('scroll-cards');

Route::get('other-cards', function () {
    return view('gogi.other-cards');
})->name('other-cards');

// Tables

Route::get('basic-tables', function () {
    return view('gogi.basic-tables');
})->name('basic-tables');

Route::get('dataTable', function () {
    return view('gogi.dataTable');
})->name('dataTable');

Route::get('responsive-tables', function () {
    return view('gogi.responsive-tables');
})->name('responsive-tables');

// Charts

Route::get('apexchart', function () {
    return view('gogi.apexchart');
})->name('apexchart');

Route::get('chartjs', function () {
    return view('gogi.chartjs');
})->name('chartjs');

Route::get('justgage', function () {
    return view('gogi.justgage');
})->name('justgage');

Route::get('morsis', function () {
    return view('gogi.morsis');
})->name('morsis');

Route::get('peity', function () {
    return view('gogi.peity');
})->name('peity');

// Maps

Route::get('google-map', function () {
    return view('gogi.google-map');
})->name('google-map');

Route::get('vector-map', function () {
    return view('gogi.vector-map');
})->name('vector-map');

// Other Components

Route::get('avatar', function () {
    return view('gogi.avatar');
})->name('avatar');

Route::get('icons', function () {
    return view('gogi.icons');
})->name('icons');

Route::get('colors', function () {
    return view('gogi.colors');
})->name('colors');

// Forms

Route::get('basic-forms', function () {
    return view('gogi.basic-forms');
})->name('basic-forms');

Route::get('custom-forms', function () {
    return view('gogi.custom-forms');
})->name('custom-forms');

Route::get('advanced-forms', function () {
    return view('gogi.advanced-forms');
})->name('advanced-forms');

Route::get('form-validation', function () {
    return view('gogi.form-validation');
})->name('form-validation');

Route::get('form-wizard', function () {
    return view('gogi.form-wizard');
})->name('form-wizard');

Route::get('form-repeater', function () {
    return view('gogi.form-repeater');
})->name('form-repeater');

Route::get('file-upload', function () {
    return view('gogi.file-upload');
})->name('file-upload');

Route::get('ckeditor', function () {
    return view('gogi.ckeditor');
})->name('ckeditor');

Route::get('datepicker', function () {
    return view('gogi.datepicker');
})->name('datepicker');

Route::get('timepicker', function () {
    return view('gogi.timepicker');
})->name('timepicker');

Route::get('colorpicker', function () {
    return view('gogi.colorpicker');
})->name('colorpicker');

// Plugins

Route::get('sweet-alert', function () {
    return view('gogi.sweet-alert');
})->name('sweet-alert');

Route::get('lightbox', function () {
    return view('gogi.lightbox');
})->name('lightbox');

Route::get('toast', function () {
    return view('gogi.toast');
})->name('toast');

Route::get('tour', function () {
    return view('gogi.tour');
})->name('tour');

Route::get('slick-slide', function () {
    return view('gogi.slick-slide');
})->name('slick-slide');

Route::get('nestable', function () {
    return view('gogi.nestable');
})->name('nestable');

// Pages

Route::get('timeline', function () {
    return view('gogi.timeline');
})->name('timeline');

Route::get('pricing-table', function () {
    return view('gogi.pricing-table');
})->name('pricing-table');

Route::get('pricing-table-2', function () {
    return view('gogi.pricing-table-2');
})->name('pricing-table-2');

Route::get('search-result', function () {
    return view('gogi.search-result');
})->name('search-result');

Route::get('blank-page', function () {
    return view('gogi.blank-page');
})->name('blank-page');

Route::get('mailing', function () {
    return view('gogi.mailing');
})->name('mailing');

Route::get('404', function () {
    return view('gogi.404');
})->name('404');

Route::get('mean-at-work', function () {
    return view('gogi.mean-at-work');
})->name('mean-at-work');

Route::get('email-template-basic', function () {
    return view('gogi.email-template-basic');
})->name('email-template-basic');

Route::get('email-template-alert', function () {
    return view('gogi.email-template-alert');
})->name('email-template-alert');

Route::get('email-template-billing', function () {
    return view('gogi.email-template-billing');
})->name('email-template-billing');