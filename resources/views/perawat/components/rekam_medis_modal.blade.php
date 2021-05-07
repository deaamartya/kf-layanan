<div class="modal fade" id="modal_rekam_medis" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <form action="{{ url('/perawat/pasien') }}" method="POST" class="modal-content">
            @csrf
            @method('put')

            <div class="modal-header bg-secondary">
                <h5 class="modal-title">Rekam Medis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle text-danger"></i>
                </button>
            </div>

            <div class="modal-body">
                <nav class="mt-3">
                    <div class="nav nav-tabs nav-pills nav-fill" id="nav-tab" role="tablist">
                        <a href="#nav-data-periksa" id="nav-data-periksa-tab" class="nav-link w-50 text-center active" role="tab" data-toggle="tab" aria-controls="nav-data-periksa" aria-selected="true">Data Periksa</a>
                        <a href="#nav-object" id="nav-object-tab" class="nav-link w-50 text-center" role="tab" data-toggle="tab" aria-controls="nav-object" aria-selected="false">Object</a>
                    </div>
                </nav>

                <div class="tab-content">
                    {{-- data periksa --}}
                    <div class="tab-pane fade show active" id="nav-data-periksa" role="tabpanel" aria-labelledby="nav-data-periksa-tab">
                        <div class="container py-3">
                            <div class="form-group">
                                <label>ID Pasien</label>
                                <input type="text" name="id" id="input_id_pasien" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Pasien</label>
                                <input type="text" name="nama" id="input_nama_pasien" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Usia</label>
                                <input type="number" name="usia" id="input_usia_pasien" class="form-control" min="1">
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
                    
                    {{-- object --}}
                    <div class="tab-pane fade" id="nav-object" role="tabpanel" aria-labelledby="nav-object-tab">
                        <div class="container py-3">
                            <div class="form-group">
                                <label>Tensi</label>
                                <div class="input-group">
                                    <input type="number" name="tensi_atas" id="input_tensi_atas_pasien" class="form-control">
                                    <span class="input-group-text"> / </span>
                                    <input type="number" name="tensi_bawah" id="input_tensi_bawah_pasien" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Nadi</label>
                                <input type="number" name="nadi" id="input_nadi_pasien" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>RR</label>
                                <input type="number" name="rr" id="input_rr_pasien" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Suhu</label>
                                <div class="input-group">
                                    <input type="number" name="suhu" id="input_suhu_pasien" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">° C</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Berat Badan</label>
                                <div class="input-group">
                                    <input type="number" name="berat" id="input_berat_pasien" class="form-control" min="0">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Kg</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Tinggi Badan</label>
                                <div class="input-group">
                                    <input type="number" name="tinggi" id="input_tinggi_pasien" class="form-control" min="0">
                                    <div class="input-group-append">
                                        <span class="input-group-text">cm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end object --}}
                </div>
            </div>

            <div class="modal-footer mt-3">
                <div class="container py-2">
                    <button type="submit" id="rm_simpan_btn" class="btn btn-primary btn-rounded btn-uppercase">
                        Simpan
                    </button>
                    <button type="button" id="rm_masuk_btn" class="btn btn-warning btn-rounded btn-uppercase">
                        Masuk
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>