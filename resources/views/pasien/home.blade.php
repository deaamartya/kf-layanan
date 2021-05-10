@extends('pasien.layouts.app')

@section('head')
    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/datepicker/daterangepicker.css') }}" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/dataTable/datatables.min.css') }}" type="text/css">
    <style>
        .bell{
            width: 30px;
            height: 30px;
            font-size: 30px;
            color: #ff3e6c;
            -webkit-animation: ring 4s .7s ease-in-out infinite;
            -webkit-transform-origin: 50% 4px;
            -moz-animation: ring 4s .7s ease-in-out infinite;
            -moz-transform-origin: 50% 4px;
            animation: ring 4s .7s ease-in-out infinite;
            transform-origin: 50% 4px;
        }
    </style>
@endsection

@section('content')

    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>Selamat siang, John</h3>
        </div>
        <div class="mt-md-0">
            <button id="next-antrian">Simulasi Next Antrian</button>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Nomor Antrian Anda</h6>
                            <div class="d-flex align-items-center">
                                <div class="font-weight-bold ml-1 font-size-30" id="antrian-pasien">5</div>
                            </div>
                            <div class="row align-items-center justify-content-center" id="bell-alert">
                                <div class="col-12">
                                    <h4 class="text-danger"><span class="bell fa fa-bell mr-2"></span>Anda dipanggil!</h4>
                                </div>
                            </div>
                            <p class="mt-3">
                                <a href="{{ url('pasien/detail-antrian') }}" class="link-1 text-info"><u>Lihat Detail Antrian</u></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <h6 class="card-title">Nomor Antrian Terakhir</h6>
                            <div class="d-flex text-center mb-3">
                                <div class="font-weight-bold ml-1 font-size-30" id="antrian-sekarang">1</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $("#bell-alert").hide();
        $("#next-antrian").on('click',function(){
            var noskr = Number($("#antrian-sekarang").html());
            noskr = noskr+1;
            $("#antrian-sekarang").html(noskr);
            if(noskr == 5){
                toastr.options = {
                    timeOut: 10000,
                    progressBar: true,
                    showMethod: "slideDown",
                    hideMethod: "slideUp",
                    showDuration: 200,
                    hideDuration: 200
                };
                toastr["error"]("Anda dipanggil!");
                $("#antrian-pasien").addClass('text-danger');
                $("#bell-alert").show();
                var audioElement = document.createElement('audio');
                audioElement.setAttribute('src', "{{ asset('assets/pasien/sound/bell.wav') }}");
                audioElement.play();
            }
            else{
                $("#antrian-pasien").removeClass('text-danger');
                $("#bell-alert").hide();
            }
        });
    });
</script>
@endsection