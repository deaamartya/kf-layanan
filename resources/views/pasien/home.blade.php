@extends('pasien.layouts.app')

@section('head')
    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/datepicker/daterangepicker.css') }}" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')
    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>Selamat siang, John</h3>
        </div>
        <div class="mt-md-0">
            <a href="#" class="btn btn-primary ml-0 ml-md-2 mt-2 mt-md-0">Simulasi Next Antrian</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Antrian Anda</h6>
                            <div class="d-flex text-center mb-3">
                                <div class="font-weight-bold ml-1 font-size-30">5</div>
                            </div>
                            <p class="mb-0">
                                <a href="{{ url('pasien/detail-antrian') }}" class="link-1 text-info"><u>Lihat Detail Antrian</u></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <h6 class="card-title">Nomor Antrian Sekarang</h6>
                            <div class="d-flex text-center mb-3">
                                <div class="font-weight-bold ml-1 font-size-30">1</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection