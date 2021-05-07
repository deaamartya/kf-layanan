@extends('pasien.layouts.app')

@section('head')
    <!-- Prism -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/prism/prism.css') }}" type="text/css"> --}}
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
                <h4>Pilih Jenis Pasien</h4><br>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <a href="{{ url('pasien/pembayaran-umum') }}" class="img-spesialiasi">
                            <div class="card bg-secondary text-center p-3">
                                <blockquote class="blockquote mb-0 card-body">
                                    <h3>Umum</h3>
                                </blockquote>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="{{ url('pasien/pembayaran') }}" class="img-spesialiasi">
                            <div class="card bg-success text-center p-3">
                                <blockquote class="blockquote mb-0 card-body">
                                    <h3>BPJS</h3>
                                </blockquote>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="{{ url('pasien/pembayaran-lainnya') }}" class="img-spesialiasi">
                            <div class="card bg-info text-center p-3">
                                <blockquote class="blockquote mb-0 card-body">
                                    <h3>Asuransi Lainnya</h3>
                                </blockquote>
                            </div>
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
@endsection