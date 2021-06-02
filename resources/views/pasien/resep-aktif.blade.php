@extends('pasien.layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/prism/prism.css') }}" type="text/css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/select2/css/select2.min.css') }}" type="text/css">
@endsection

@section('content')
<div class="page-header d-md-flex justify-content-between">
    <div>
        <h3>Resep Aktif</h3>
    </div>
    <div class="mt-md-0">
        <button type="button" id="terimaresep">Simulasi Terima Resep</button>
        <button type="button" id="hapusresep">Hapus Resep</button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12" id="tidak-ada-resep">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center justify-content-center">
                                    <h4>Tidak ada Resep yang Aktif</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" id="loader-dokter">
                        <div class='preloader-dokter'>
                            <div class='preloader-icon-dokter'></div>
                            <span>Mencari resep...</span>
                        </div>
                    </div>
                    <div class="col-12" id="list-resep">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-4 col-12 text-center">
                                        <img src="{{ asset('assets/img/qr-code-resep.png') }}" alt="Vase" height="300" width="300">
                                        <p class="text-muted">QR Code untuk Farmasi Apotek Kimia Farma</p>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <h4>Klinik</h4>
                                        <hr>
                                        <h5>Kimia Farma A</h5>
                                        <p>Resep ini dibuat pada 8 Mei 2021 11.31WIB</p>
                                        <a href="{{ url('pasien/pesan-online') }}">
                                            <button class="btn btn-success"><i class="fa fa-shopping-cart mr-2"></i>Pesan Online</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ asset('assets/gogi/vendors/prism/prism.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('assets/gogi/vendors/select2/js/select2.min.js') }}"></script>
    <script>
        $('.select2-example').select2({
            placeholder: 'Pilih Kota'
        });
        $("#list-resep").hide();
        $("#loader-dokter").hide();
        $("#terimaresep").on('click',function(){
            $("#tidak-ada-resep").hide();
            $("#loader-dokter").show();
            setTimeout(function(){ 
                $("#loader-dokter").hide();
                $("#list-resep").show();
            }, 5000);
        });
        $("#hapusresep").on('click',function(){
            $("#list-resep").hide();
            $("#tidak-ada-resep").show();
        });
    </script>
@endsection