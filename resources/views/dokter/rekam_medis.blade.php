@extends('dokter/layouts/app')
@section('title', 'Rekam Medis | Dokter')
@section('extra-styles')
@endsection

@section('content')
<div class="content">
    <div class="page-header">
        <h4>Rekam Medis</h4>
        <hr>
    </div>

    <div class="d-flex justify-content-center">
        <div class="search_container mb-4">
            <div class="search_bar">
                <input id="input_search_pasien" type="text" name="searchQueryInput" placeholder="Cari pasien">
                <button id="search_pasien_btn" type="button">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="#666666"
                            d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="search_loader" style="display: none; justify-content: center;">
        <img src="{{ asset('/assets/dokter/img/dual_ball_loader.svg') }}" style="height: 100px;">
    </div>

    <div class="hasil_pencarian" style="display: none">
        <h5 class="mb-3">Hasil Pencarian</h5>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th class="w-25">ID Pasien</th>
                        <th class="w-50">Nama</th>
                        <th class="w-25">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( array_slice(Session::get('perawat_pasien'), 0, 2) as $pasien1)
                    {{-- @if ($pasien1['status_panggil'] == 3) --}}
                    <tr>
                        <td class="w-25">{{ $pasien1['id'] }}</td>
                        <td class="w-50">{{ $pasien1['nama'] }}</td>
                        <td class="w-25">
                            <button type="button" class="btn btn-sm btn-warning btn-rounded btn-uppercase"
                                data-toggle="modal" data-target="#modal-riwayat-periksa">
                                Riwayat Periksa
                            </button>
                        </td>
                    </tr>
                    {{-- @endif --}}
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