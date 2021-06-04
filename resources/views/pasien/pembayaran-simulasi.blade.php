@extends('pasien.layouts.app')

@section('head')
    <!-- Prism -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/prism/prism.css') }}" type="text/css"> --}}
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/select2/css/select2.min.css') }}" type="text/css">
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
        <div class="col-12">
            <h3>Pembayaran (Simulasi)</h3>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-12 align-items-center">
        <div class="card">
            <div class="card-body">
                <h4>Dokter</h4>
                <div class="row">
                    <div class="col">
                        <div class="card bg-light">
                            <div class="card-body">
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
                                            <i class="fa fa-hospital-o mr-2"></i>Jl. Raya Darmo No 6 Surabaya
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Pilih Jenis Pasien</h4><br>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="card bg-secondary text-center p-3" style="cursor: pointer" id="card-umum" data-target="#modal-pembayaran" data-toggle="modal">
                            <blockquote class="blockquote mb-0 card-body">
                                <h3>Umum</h3>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card bg-success text-center p-3" style="cursor: pointer" id="card-bpjs">
                            <blockquote class="blockquote mb-0 card-body">
                                <h3>BPJS</h3>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card bg-info text-center p-3" style="cursor: pointer" id="card-lainnya">
                            <blockquote class="blockquote mb-0 card-body">
                                <h3>Asuransi Lainnya</h3>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="modal-pembayaran">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Pembayaran</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class='preloader-dokter' id="loader-pembayaran">
                    <div class='preloader-icon-dokter'></div>
                    <span>Proses Pembayaran...</span>
                </div>
                <div class="row content-modal">
                    <div class="col-12 text-center">
                        <h6>Total Pembayaran</h6>
                        <h2>Rp200.000</h2>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center content-modal">
                    <div class="col-6">
                        <select class="select2-example">
                            <option>Pilih Metode Pembayaran</option>
                            @php $bayar=["Transfer","OVO","ShopeePay","Gopay"] @endphp
                            @foreach($bayar as $k)
                            <option value="{{ $k }}">{{ $k }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mt-5 mb-3 justify-content-center content-modal">
                    <div class="col-6 text-center">
                        {{-- <a href="{{ url('registrasi') }}"> --}}
                            <button class="btn btn-success btn-lg px-4" id="konfirmasi-bayar">Konfirmasi Pembayaran</button>
                        {{-- </a> --}}
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
    <script src="{{ asset('assets/gogi/vendors/select2/js/select2.min.js') }}"></script>
    <script>
        $('.select2-example').select2();
        $("#loader-pembayaran").hide();
        $("#konfirmasi-bayar").on('click',function(){
            $("#loader-pembayaran").show();
            $(".content-modal").hide();
            setTimeout(function(){ 
                $("#loader-pembayaran").hide();
                $("#modal-pembayaran").modal('toggle');
                swal({
                    title: "Pembayaran berhasil!",
                    text: "Reservasi berhasil dibuat. Klik OK untuk ke halaman detail antrian",
                    icon: "success",
                    showConfirmButton: true,
                    showCancelButton: false,
                }).then((next) => {
                    if (next) {
                        window.location.replace("{{ url('pasien/detail-antrian') }}");
                    }
                });
            }, 5000);
        });
        function alertaasuransi(){
            swal({
                title: "Konfirmasi reservasi",
                text: "Apakah Anda yakin ingin membuat reservasi?",
                icon: "warning",
                buttons: true,
                showConfirmButton: true,
                showDenyButton: true,
                confirmButtonText: "Ya, saya yakin.",
                denyButtonText: "Tidak",
            }).then((next) => {
                if (next) {
                    swal({
                        title: "Berhasil!",
                        text: "Reservasi berhasil dibuat. Klik OK untuk ke halaman detail antrian",
                        icon: "success",
                        showConfirmButton: true,
                        showCancelButton: false,
                    }).then((ok) => {
                        if (ok) {
                            window.location.replace("{{ url('pasien/detail-antrian') }}");
                        }
                    });
                }
            });
        }
        $("#card-bpjs").on('click',function(){
            alertaasuransi();
        });
        $("#card-lainnya").on('click',function(){
            alertaasuransi();
        });
    </script>
@endsection