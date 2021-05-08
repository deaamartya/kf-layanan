@extends('perawat/layouts/main')
@section('title', 'Home | Perawat')
@section('extra-styles')
<link rel="stylesheet" href="{{ asset('/assets/gogi/vendors/select2/css/select2.min.css') }}">
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
                <td class="pl-5">: {{ Session::get('perawat_nama_dokter') }}</td>
            </tr>
            <tr>
                <td>Spesialisasi</td>
                <td class="pl-5">: {{ Session::get('perawat_spesialisasi_dokter') }}</td>
            </tr>
        </table>
    </div>

    <a href="{{ url('/perawat/reset-session') }}" id="reset_session_btn" class="my-4 btn btn-rounded btn-uppercase">
        <i class="ti-reload mr-2"></i>
        Reset Session
    </a>

    <div class="row">
        {{-- Left side --}}
        <div class="col-md-8 col-sm-12">
            <div class="container">
                <div class="card">
                    <h6 class="text-center card-header">Antrian Pasien</h6>

                    <div class="card-body">
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
                                    @foreach (Session::get('perawat_pasien') as $pasien)
                                    @if ($pasien['is_data_complete'] == false)
                                    <tr>
                                    @else
                                    <tr class="bg-success" style="color: black !important;">
                                    @endif
                                        <td>{{ $pasien['no_antrian'] }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-block nama_pasien_btn" data-id="{{ $pasien['id'] }}" data-toggle="modal" data-target="#modal_rekam_medis">
                                                {{ $pasien['nama'] }}
                                            </button>
                                        </td>
                                        @php
                                            if($pasien['status_panggil'] == 0){
                                                echo "<td></td>";
                                            } elseif ($pasien['status_panggil'] == 1) {
                                                echo "<td>Masuk</td>";
                                            } elseif ($pasien['status_panggil'] == 2) {
                                                echo "<td>Lewati</td>";
                                            } elseif ($pasien['status_panggil'] == 3) {
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
            </div>
        </div>
        {{-- End life side --}}

        {{-- Right side --}}
        <div class="col-md-4 col-sm-12">
            <div class="container">
                <div class="card">
                    <h6 class="text-center card-header">Antrian{{ Session::get('nama_dokter') }}</h6>
                    <div id="antrian_saat_ini" class="card-body">
                        <h1 class="nomor">
                            <input type="hidden" id="input_no_antrian_saat_ini" value="{{ Session::get('perawat_antrian_saat_ini') }}">
                            A0{{ Session::get('perawat_antrian_saat_ini') }}
                        </h1>
                        <h6>
                            Status: 
                            <span class="status">
                                @if (Session::get('perawat_status_antrian_saat_ini') == 0)
                                    <input type="hidden" id="input_status_antrian_saat_ini" value="0">
                                    Panggil
                                @else
                                    <input type="hidden" id="input_status_antrian_saat_ini" value="1">
                                    Masuk
                                @endif
                            </span>
                        </h6>
                    </div>
                    <div class="card-footer antrian_btn_container">
                        <button type="button" id="antrian_next_btn" class="btn btn-primary btn-rounded btn-uppercase">Next</button>
                        <button type="button" id="antrian_recall_btn" class="btn btn-secondary btn-rounded btn-uppercase">Recall</button>
                        <button type="button" id="antrian_masuk_btn" class="btn btn-success btn-rounded btn-uppercase">Masuk</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End right side --}}
    </div>
    
</div>

<audio id="recall_bell" src="{{ asset('/assets/perawat/sound/bell.mp3') }}"></audio>

@include('perawat/components/rekam_medis_modal')
@endsection

@section('extra-scripts')
<script>
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content')
    const BASE_URL = "{{ url('/perawat') }}"
</script>
<script src="{{ asset('/assets/gogi/vendors/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/perawat/js/home.js') }}"></script>
@endsection