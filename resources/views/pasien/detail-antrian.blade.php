@extends('pasien.layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/prism/prism.css') }}" type="text/css">
    <style>
        .card-img-overlay{
            background-color: rgba(0,0,0,0.50);
        }
        .card-img-overlay:hover{
            background-color: rgba(0,0,0,0.65);
        }
    </style>
@endsection

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-10">
            <h3>Detail Antrian</h3>
        </div>
        <div class="col-2">
            <button id="simulasi-dipanggil">Simulasi dipanggil</button>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-12 align-items-center">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="card bg-danger">
                            <div class="card-body">
                                <h6 class="card-title">Nomor Antrian Anda</h6>
                                <div class="d-flex text-center mb-3">
                                    <div class="font-weight-bold ml-1 font-size-30" id="antrian-sekarang">5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h6 class="card-title">Dokter</h6>
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <a href="#" title="dokter">
                                            <img src="{{ asset('assets/img/foto-dokter.jpg') }}" class="img-dokter rounded-circle" alt="Vase" height="100" width="100">
                                        </a>
                                    </div>
                                    <div class="col-9">
                                        <h5>dr. Amelia Abdullah, Sp.OG</h5>
                                        <h6 class="text-gray">
                                            <i class="fa fa-stethoscope mr-2"></i>Dokter Kandungan
                                        </h6>
                                        <h6 class="text-gray">
                                            <i class="fa fa-hospital-o mr-2"></i>Jember - Jl. Gajah Mada No. 171
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h4>Perkiraan Waktu Panggil</h4>
                        <div class="card-border text-center p-3">
                            <div class="card-body">
                                <h4>8 Mei 2021 11.00 WIB</h4>
                                <p>30 menit dari waktu sekarang (8/5/2021 10:30 WIB)</p>
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
    <script>
        $("#reservasi").on('click',function(){
            swal("Sukses!", "Reservasi berhasil disimpan!", "success");
            setTimeout(function(){ 
                window.location.replace("{{ url('pasien/detail-antrian') }}");
            }, 3000);
        });
        $("#simulasi-dipanggil").on('click',function(){
            toastr.options = {
                timeOut: 10000,
                progressBar: true,
                showMethod: "slideDown",
                hideMethod: "slideUp",
                showDuration: 200,
                hideDuration: 200
            };
            toastr["error"]("Anda dipanggil!");
            var audioElement = document.createElement('audio');
            audioElement.setAttribute('src', "{{ asset('assets/pasien/sound/bell.wav') }}");
            audioElement.play();
        });
    </script>
@endsection