<div class="modal fade" id="search_obat_modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <div class="modal-header bg-secondary">
                <h5 class="modal-title">Pencarian Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle text-danger"></i>
                </button>
            </div>

            <div class="modal-body py-3">
                <h5 class="my-2">3 Hasil ditemukan</h5>

                <div class="input-group mt-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radio_obat" id="radio_obat_1" value="" checked>
                        </div>
                    </div>
                    <input type="text" class="form-control" id="input_text_radio_obat_1" value="Obat 1" readonly>
                </div>
                
                <div class="input-group mt-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radio_obat" id="radio_obat_2" value="">
                        </div>
                    </div>
                    <input type="text" class="form-control" id="input_text_radio_obat_2" value="Obat 2" readonly>
                </div>
                
                <div class="input-group mt-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radio_obat" id="radio_obat_3" value="">
                        </div>
                    </div>
                    <input type="text" class="form-control" id="input_text_radio_obat_3" value="Obat 3" readonly>
                </div>
            </div>

            <div class="modal-footer">
                <div class="container">
                    <button type="button" id="pilih_obat_modal_btn" class="btn btn-linkedin btn-rounded btn-uppercase float-right" data-dismiss="modal">
                        Pilih
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>