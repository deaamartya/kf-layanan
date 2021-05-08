@extends('dokter/layouts/app')
@section('title', 'Periksa Pasien | Dokter')
@section('extra-styles')
<link rel="stylesheet" href="{{ asset('/assets/gogi/vendors/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/dokter/css/periksa.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="page-header">
        <h4>Periksa Pasien ({{ $pasien['id'] }})</h4>
        <hr>
    </div>

    <form class="col-md-12">
        @csrf

        <nav class="mt-3">
            <div class="nav nav-tabs nav-pills nav-fill" id="nav-tab" role="tablist">
                <a href="#nav-data-periksa" id="nav-data-periksa-tab" class="nav-link w-auto text-center active" role="tab" data-toggle="tab" aria-controls="nav-data-periksa" aria-selected="true">Data Periksa</a>
                <a href="#nav-subject" id="nav-subject-tab" class="nav-link w-auto text-center" role="tab" data-toggle="tab" aria-controls="nav-subject" aria-selected="false">Subject</a>
                <a href="#nav-object" id="nav-object-tab" class="nav-link w-auto text-center" role="tab" data-toggle="tab" aria-controls="nav-object" aria-selected="false">Object</a>
                <a href="#nav-assessment" id="nav-assessment-tab" class="nav-link w-auto text-center" role="tab" data-toggle="tab" aria-controls="nav-assessment" aria-selected="false">Assessment</a>
                <a href="#nav-resep" id="nav-resep-tab" class="nav-link w-auto text-center" role="tab" data-toggle="tab" aria-controls="nav-resep" aria-selected="false">Resep</a>
                <a href="#nav-rujukan" id="nav-rujukan-tab" class="nav-link w-auto text-center" role="tab" data-toggle="tab" aria-controls="nav-rujukan" aria-selected="false">Rujukan</a>
                <a href="#nav-biaya" id="nav-biaya-tab" class="nav-link w-auto text-center" role="tab" data-toggle="tab" aria-controls="nav-biaya" aria-selected="false">Biaya</a>
            </div>
        </nav>

        <div class="tab-content">
            {{-- data periksa --}}
            <div class="tab-pane fade show active" id="nav-data-periksa" role="tabpanel" aria-labelledby="nav-data-periksa-tab">
                <div class="container py-4">
                    <div class="form-group">
                        <label>ID Pasien</label>
                        <input type="text" name="id" id="input_id_pasien" value="{{ $pasien['id'] }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <input type="text" name="nama" id="input_nama_pasien" value="{{ $pasien['nama'] }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Usia</label>
                        <input type="number" name="usia" id="input_usia_pasien" value="{{ $pasien['usia'] }}" class="form-control" min="1">
                    </div>
                    <div class="form-group">
                        <label>Nama Dokter</label>
                        <input type="text" id="input_nama_dokter" value="{{ Session::get('perawat_nama_dokter') }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Spesialisasi Dokter</label>
                        <input type="text" id="input_spesialisasi_dokter" value="{{ Session::get('perawat_spesialisasi_dokter') }}" class="form-control" readonly>
                    </div>
                </div>
            </div>
            {{-- end data periksa --}}

            {{-- subject --}}
            <div class="tab-pane fade" id="nav-subject" role="tabpanel" aria-labelledby="nav-subject-tab">
                <div class="container py-4">
                    <div class="form-group">
                        <label>Keluhan Utama</label>
                        <textarea class="form-control" rows="20"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Lama Sakit</label>
                        <div class="input-group">
                            <input type="number" class="form-control">
                            <div class="input-group-append">
                                <select class="form-control">
                                    <option>Hari</option>
                                    <option>Minggu</option>
                                    <option>Bulan</option>
                                    <option>Tahun</option>
                                    <option>Sejak Lahir</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Periksa Fisik</label>
                        <textarea class="form-control" rows="20"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Riwayat</label>
                        <textarea class="form-control" rows="20"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="20"></textarea>
                    </div>
                </div>
            </div>
            {{-- end subject --}}
            
            {{-- object --}}
            <div class="tab-pane fade" id="nav-object" role="tabpanel" aria-labelledby="nav-object-tab">
                <div class="container py-4">
                    <div class="form-group">
                        <label>Tensi</label>
                        <div class="input-group">
                            <input type="number" name="tensi_atas" value="{{ $pasien['tensi_atas'] }}" id="input_tensi_atas_pasien" class="form-control">
                            <span class="input-group-text"> / </span>
                            <input type="number" name="tensi_bawah" value="{{ $pasien['tensi_bawah'] }}" id="input_tensi_bawah_pasien" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nadi</label>
                        <input type="number" name="nadi" value="{{ $pasien['nadi'] }}" id="input_nadi_pasien" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>RR</label>
                        <input type="number" name="rr" value="{{ $pasien['rr'] }}" id="input_rr_pasien" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Suhu</label>
                        <div class="input-group">
                            <input type="number" name="suhu" value="{{ $pasien['suhu'] }}" id="input_suhu_pasien" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">° C</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Berat Badan</label>
                        <div class="input-group">
                            <input type="number" name="berat" value="{{ $pasien['berat'] }}" id="input_berat_pasien" class="form-control" min="0">
                            <div class="input-group-append">
                                <span class="input-group-text">Kg</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Tinggi Badan</label>
                        <div class="input-group">
                            <input type="number" name="tinggi" value="{{ $pasien['tinggi'] }}" id="input_tinggi_pasien" class="form-control" min="0">
                            <div class="input-group-append">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- assessment --}}
            <div class="tab-pane fade" id="nav-assessment" role="tabpanel" aria-labelledby="nav-assessment-tab">
                <div class="container py-4">
                    <div class="form-group">
                        <label>Assessment</label>
                        <textarea class="form-control" rows="50"></textarea>
                    </div>
                </div>
            </div>
            {{-- end assessment --}}
            
            {{-- resep --}}
            <div class="tab-pane fade" id="nav-resep" role="tabpanel" aria-labelledby="nav-resep-tab">
                <div class="container py-4">
                    resep
                </div>
            </div>
            {{-- end resep --}}
            
            {{-- rujukan --}}
            <div class="tab-pane fade" id="nav-rujukan" role="tabpanel" aria-labelledby="nav-rujukan-tab">
                <div class="container py-4">
                    rujukan
                </div>
            </div>
            {{-- end rujukan --}}
            
            {{-- biaya --}}
            <div class="tab-pane fade" id="nav-biaya" role="tabpanel" aria-labelledby="nav-biaya-tab">
                <div class="container py-4">
                    biaya
                </div>
            </div>
            {{-- end biaya --}}
        </div>
    </form>

</div>
@endsection

@section('extra-scripts')
<script>
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content')
    const BASE_URL = "{{ url('/dokter') }}"
</script>
<script src="{{ asset('/assets/gogi/vendors/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/dokter/js/periksa.js') }}"></script>
@endsection