@extends('perawat/layouts/main')
@section('title', 'Home | Perawat')
@section('extra-styles')
<link rel="stylesheet" href="{{ asset('/assets/perawat/css/home.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="page-header">
        <h4>Home</h4>
        <hr>
    </div>

    <div class="detail_dokter">
        <table style="text-align: left;">
            <tr>
                <td>Nama Dokter</td>
                <td class="pl-5">: {{ Session::get('nama_dokter') }}</td>
            </tr>
            <tr>
                <td>Spesialisasi</td>
                <td class="pl-5">: {{ Session::get('spesialisasi_dokter') }}</td>
            </tr>
        </table>
    </div>

    <button id="reset_session_btn" class="my-4 btn btn-rounded btn-uppercase">
        <i class="ti-reload mr-2"></i>
        Reset Session
    </button>

    <div class="row">
        {{-- Left side --}}
        <div class="col-md-8 col-sm-12">
            <div class="container">
                <h6>Antrian Pasien</h6>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="w-auto">No. Antrian</th>
                                <th class="w-75">Nama</th>
                                <th class="w-auto">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Session::get('pasien') as $pasien1)
                            @if ($pasien1['is_data_complete'] == false)
                            <tr>
                            @else
                            <tr class="bg-success" style="color: black !important;">
                            @endif
                                <td>{{ $pasien1['no_antrian'] }}</td>
                                <td>{{ $pasien1['nama'] }}</td>
                                @php
                                    if($pasien1['status_panggil'] == 0){
                                        echo "<td></td>";
                                    } elseif ($pasien1['status_panggil'] == 1) {
                                        echo "<td>Masuk</td>";
                                    } elseif ($pasien1['status_panggil'] == 2) {
                                        echo "<td>Lewati</td>";
                                    } elseif ($pasien1['status_panggil'] == 3) {
                                        echo "<td>Telah Diperiksa</td>";
                                    }
                                @endphp
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- End life side --}}

        {{-- Right side --}}
        <div class="col-md-4 col-sm-12">
            <div class="container">
                <div class="card">
                    <h6 class="text-center card-header">Antrian{{ Session::get('nama_dokter') }}</h6>
                    <div id="antrian_saat_ini" class="card-body">
                        <h1 class="nomor">{{ Session::get('pasien')[0]['no_antrian'] }}</h1>
                        <h6>Status: <span class="status">Masuk</span></h6>
                    </div>
                    <div class="card-footer antrian_btn_container">
                        <button class="btn btn-primary btn-rounded btn-uppercase">Next</button>
                        <button class="btn btn-secondary btn-rounded btn-uppercase">Recall</button>
                        <button class="btn btn-success btn-rounded btn-uppercase">Masuk</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End right side --}}
    </div>
    
</div>
@endsection

@section('extra-scripts')
<script>
</script>
<script src="{{ asset('/assets/perawat/js/home.js') }}"></script>
@endsection