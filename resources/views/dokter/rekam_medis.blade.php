@extends('dokter/layouts/app')
@section('title', 'Rekam Medis | Dokter')
@section('extra-styles')
<link rel="stylesheet" href="{{ asset('/assets/dokter/css/home.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="page-header">
        <h4>Rekam Medis</h4>
        <hr>
    </div>

    <div class="container">
        <h6 class="mb-3">Daftar Pasien</h6>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th class="w-25">ID</th>
                        <th class="w-50">Nama</th>
                        <th class="w-25">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Session::get('perawat_pasien') as $pasien1)
                        @if ($pasien1['status_panggil'] == 3)
                            <tr>
                                <td class="w-25">{{ $pasien1['id'] }}</td>
                                <td class="w-50">{{ $pasien1['nama'] }}</td>
                                <td class="w-25">
                                    <button type="button" class="btn btn-sm btn-warning btn-rounded btn-uppercase" data-toggle="modal" data-target="#modal-riwayat-periksa">
                                        Riwayat Periksa
                                    </button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>

@include('dokter/components/riwayat_periksa_modal')
@endsection

@section('extra-scripts')
<script>
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content')
    const BASE_URL = "{{ url('/dokter') }}"
</script>
<script src="{{ asset('/assets/dokter/js/rekam_medis.js') }}"></script>
@endsection