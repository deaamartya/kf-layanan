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
        <button type="button" class="btn btn-primary ml-0 ml-md-2 mt-2 mt-md-0" id="terimaresep">Simulasi Terima Resep</button>
        <button type="button" class="btn btn-primary ml-0 ml-md-2 mt-2 mt-md-0" id="hapusresep">Hapus Resep</button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12" id="tidak-ada-resep">
                        <div class="card border">
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
                        <div class="card border">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-4 col-12 text-center">
                                        <img src="{{ asset('assets/img/qr-code-resep.png') }}" alt="Vase" height="300" width="300">
                                        <p class="text-muted">QR Code untuk Farmasi Apotek Kimia Farma</p>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <h4>Dokter</h4>
                                        <hr>
                                        <h5>dr. Amelia Abdullah, Sp.OG</h5>
                                        <p>Resep ini dibuat pada 8 Mei 2021 11.31WIB</p>
                                        <a href="{{ url('pasien/pesan-online') }}">
                                            <button class="btn btn-success">Pesan Online</button>
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
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Informasi Layanan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <h4>Detail Kunjungan</h4>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-12">
                                <h6>
                                    <i class="fa fa-stethoscope mr-3"></i>5 Mei 2021 15.00 WIB
                                </h6>
                                <h6>
                                    <i class="fa fa-hospital-o mr-3"></i>Jember - Jl. Gajah Mada No. 171
                                </h6>
                                <h6>
                                    <i class="fa fa-money mr-3"></i>Rp200.000
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h4>Dokter</h4>
                        <hr>
                        <div class="row mb-5 align-items-center">
                            <div class="col-3">
                                <a href="#" title="dokter">
                                    <img src="{{ asset('assets/img/foto-dokter.jpg') }}" class="img-dokter rounded-circle" alt="Vase" height="80" width="80">
                                </a>
                            </div>
                            <div class="col-9 align-content-center">
                                <h5>dr. Amelia Abdullah, Sp.OG</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Resep</h4>
                <hr>
                <div class="row align-items-center">
                    <div class="col-5">
                        <img src="{{ asset('assets/img/qr-code-resep.png') }}" height="200">
                    </div>
                    <div class="col-7">
                        <h6 class="text-gray">
                            Apotek Kimia Farma Tempat Pengambilan Resep
                        </h6>
                        <h6>
                            Jember - Jl. Gajah Mada No. 171
                        </h6>
                    </div>
                    <div class="col-12">
                        <a href="#">
                            <button class="btn btn-primary">Simulasi Scan</button>
                        </a>
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
            }, 500);
        });
    </script>
@endsection