@extends('layouts.app')

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
    <div>
        <h3>Pilih Poli</h3>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="row justify-content-center align-items-center mt-3">
            @php 
                $spesialisasi = ["Umum","Gigi"]
            @endphp
            @foreach($spesialisasi as $s)
            <div class="col-md-3 col-sm-12">
                <a href="{{ url('list-klinik') }}" class="img-spesialiasi" style="border-radius: 10px;">
                    <div class="card bg-dark text-white" style="border-radius: 10px;">
                        <img src="{{ asset('assets/img/dokter-kandungan.jpg') }}" class="card-img img-overlay" style="border-radius: 10px;" alt="image">
                        <div class="card-img-overlay justify-content-center d-flex align-items-center" style="border-radius: 10px;">
                            <h3 class="card-title text-center">Poli {{$s}}</h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ asset('assets/gogi/vendors/prism/prism.js') }}"></script>
@endsection