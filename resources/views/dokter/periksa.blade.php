@extends('dokter/layouts/app')
@section('title', 'Periksa Pasien | Dokter')
@section('extra-styles')
<link rel="stylesheet" href="{{ asset('/assets/dokter/css/periksa.css') }}">
@endsection

@section('content')
<div class="content pb-3">
    <div class="page-header">
        <h4>Periksa Pasien ({{ $pasien['nama'] }})</h4>
        <hr>
    </div>

    <form action="{{ url('/dokter/periksa') }}" method="POST" id="form_periksa_pasien" class="col-md-12">
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
                        <input type="text" name="input_id_pasien" id="input_id_pasien" value="{{ $pasien['id'] }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <input type="text" name="nama" id="input_nama_pasien" value="{{ $pasien['nama'] }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Usia</label>
                        <input type="number" name="usia" id="input_usia_pasien" value="{{ $pasien['usia'] }}" class="form-control" min="1" readonly>
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
                            <input type="number" class="form-control" id="input_lama_sakit" min="1">
                            <div class="input-group-append">
                                <select class="form-control" id="input_select_lama_sakit">
                                    <option value="1">Hari</option>
                                    <option value="2">Minggu</option>
                                    <option value="3">Bulan</option>
                                    <option value="4">Tahun</option>
                                    <option value="0">Sejak Lahir</option>
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
                                <span class="input-group-text">?? C</span>
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
                <div class="py-4">
                    @include('dokter/components/resep')
                </div>
            </div>
            {{-- end resep --}}
            
            {{-- rujukan --}}
            <div class="tab-pane fade" id="nav-rujukan" role="tabpanel" aria-labelledby="nav-rujukan-tab">
                <div class="container py-4">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Dokumen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Surat Rujukan</td>
                                    <td>
                                        {{-- <button type="button" id="tulis_surat_rujukan_btn" class="btn btn-sm btn-rounded btn-warning btn-uppercase m-2" data-toggle="modal" data-target="#suratRujukanModal">
                                            <i class="fas fa-pen mr-2"></i>
                                            Tulis
                                        </button>
                                        <a href="{{ url('/dokter/download/document/surat_rujukan_dokter.pdf') }}" target="_blank" class="btn btn-sm btn-rounded btn-youtube btn-uppercase m-2">
                                            <i class="fas fa-file-pdf mr-2"></i>
                                            Cetak
                                        </a> --}}

                                        <a href="https://docs.google.com/document/d/1AhcdV2i5XtWS5yz4qwRzWHtd-QxhWGpGBXqXHN7F9GU/edit?usp=sharing" target="_blank" class="btn btn-sm btn-rounded btn-warning btn-uppercase">
                                            <i class="fas fa-pen mr-2"></i>
                                            Tulis
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Surat Keterangan Sehat</td>
                                    <td>
                                        {{-- <button type="button" id="tulis_surat_sehat_btn" class="btn btn-sm btn-rounded btn-warning btn-uppercase m-2">
                                            <i class="fas fa-pen mr-2"></i>
                                            Tulis
                                        </button>
                                        <a href="{{ url('/dokter/download/document/surat_keterangan_sehat.pdf') }}" target="_blank" class="btn btn-sm btn-rounded btn-youtube btn-uppercase m-2">
                                            <i class="fas fa-file-pdf mr-2"></i>
                                            Cetak
                                        </a> --}}

                                        <a href="https://docs.google.com/document/d/1vVnmID7Sdit_7ILKYKvZCFmNz07oad1lIHfTLGz_AOI/edit?usp=sharing" target="_blank" class="btn btn-sm btn-rounded btn-warning btn-uppercase">
                                            <i class="fas fa-pen mr-2"></i>
                                            Tulis
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Surat Keterangan Sakit</td>
                                    <td>
                                        {{-- <button type="button" id="tulis_surat_sakit_btn" class="btn btn-sm btn-rounded btn-warning btn-uppercase m-2">
                                            <i class="fas fa-pen mr-2"></i>
                                            Tulis
                                        </button>
                                        <a href="{{ url('/dokter/download/document/surat_keterangan_sakit.pdf') }}" target="_blank" class="btn btn-sm btn-rounded btn-youtube btn-uppercase m-2">
                                            <i class="fas fa-file-pdf mr-2"></i>
                                            Cetak
                                        </a> --}}

                                        <a href="https://docs.google.com/document/d/11Jkgo_NUBS3i-suvZgg8KVj69zKjmxEuZoUP5B-YQu8/edit?usp=sharing" target="_blank" class="btn btn-sm btn-rounded btn-warning btn-uppercase">
                                            <i class="fas fa-pen mr-2"></i>
                                            Tulis
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- @include('dokter/components/surat_rujukan_modal') --}}
            {{-- @include('dokter/components/surat_sehat_modal') --}}
            {{-- @include('dokter/components/surat_sakit_modal') --}}
            {{-- end rujukan --}}
            
            {{-- biaya --}}
            <div class="tab-pane fade" id="nav-biaya" role="tabpanel" aria-labelledby="nav-biaya-tab">
                <div class="form-group mt-4">
                    <label>Tindakan</label>
                    <select class="form-control select_tindakan">
                        <option value="Konsultasi">Konsultasi</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Biaya</label>
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="number" id="biaya_input_nominal" class="form-control num-without-style nominal_biaya" value="0" min="0">
                    </div>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea rows="10" class="form-control keterangan_biaya"></textarea>
                </div>

                <button type="button" id="tambah_biaya_btn" class="btn btn-sm btn-dark btn-uppercase">
                    Tambah
                </button>

                <div class="table-responsive my-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="w-25">Tindakan</th>
                                <th class="w-25">Biaya</th>
                                <th class="w-50">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody id="biaya_table"></tbody>
                    </table>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label font-weight-bold">Total Biaya: </label>
                    <div class="col-sm-10">
                        <input type="number" name="input_total_biaya" id="input_total_biaya" class="form-control-plaintext" value="0" readonly>
                    </div>
                </div>

                <div class="my-5">
                    <hr>
                    <div style="display: grid; place-items: center;">
                        <button type="submit" class="btn btn-primary btn-rounded btn-uppercase text-center">
                            <i class="mr-2 fas fa-save"></i>
                            Simpan
                        </button>
                    </div>
                </div>

            </div>
            {{-- end biaya --}}
        </div>

    </form>

</div>

@include('dokter/components/search_obat_modal')
@endsection

@section('extra-scripts')
<script>
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content')
    const BASE_URL = "{{ url('/dokter') }}"
</script>
{{-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> --}}
<script src="{{ asset('/assets/dokter/js/periksa.js') }}"></script>
<script src="{{ asset('/assets/dokter/js/resep.js') }}"></script>
@endsection