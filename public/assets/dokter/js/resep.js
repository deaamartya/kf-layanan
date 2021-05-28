let total_obat_satuan = 0
let total_obat_racik = 0
let modal_c = 1
let focus_input_nama_obat = ''

/**
 * Tambah obat satuan
 */
function tambah_obat_satuan(){
    total_obat_satuan += 1
    let obat =  `<div class="form-group mt-3" style="display: flex; flex-direction: column; align-items: center;">
                    <input type="text" id="input_nama_obat_satuan_${total_obat_satuan}" name="input_nama_obat_satuan_${total_obat_satuan}" onkeydown="search_obat(this, event)" class="form-control mt-2" placeholder="Nama Obat">
                    <input type="text" id="input_signatura_obat_satuan_${total_obat_satuan}" name="input_signatura_obat_satuan_${total_obat_satuan}" class="form-control mt-2" placeholder="Signatura">
                    <input type="number" id="input_jumlah_obat_satuan_${total_obat_satuan}" name="input_jumlah_obat_satuan_${total_obat_satuan}" class="form-control mt-2" placeholder="Jumlah" min="1">
                    <button type="button" onclick="remove_obat(this)" class="btn btn-sm btn-youtube btn-rounded mt-2">
                        REMOVE
                    </button>
                </div>
                `
    $(obat).appendTo('#obat_satuan_parent_div')
}

/**
 * Tambah obat racik
 */
function tambah_obat_racik(){
    total_obat_racik += 1
    let obat =  `<div class="form-group mt-3" style="display: flex; flex-direction: column; align-items: center;">
                    <div class="w-100">
                        <div class="input-group mt-2">
                            <input type="text" id="input_nama_obat_racik_${total_obat_racik}" name="input_nama_obat_racik_${total_obat_racik}" onkeydown="search_obat(this, event)" class="form-control" placeholder="Nama Obat">
                            <button type="button" class="btn btn-sm btn-light bg-success" onclick="tambah_nama_obat_racik(this)" style="font-size: large;">
                                +
                            </button>
                        </div>
                    </div>
                    <input type="text" id="input_prescriptio_obat_racik_${total_obat_racik}" name="input_prescriptio_obat_racik_${total_obat_racik}" class="form-control mt-2" placeholder="Prescriptio">
                    <input type="text" id="input_signatura_obat_racik_${total_obat_racik}" name="input_signatura_obat_racik_${total_obat_racik}" class="form-control mt-2" placeholder="Signatura">
                    <input type="number" id="input_jumlah_obat_racik_${total_obat_racik}" name="input_jumlah_obat_racik_${total_obat_racik}" class="form-control mt-2" placeholder="Jumlah" min="1">
                    <button type="button" onclick="remove_obat(this)" class="btn btn-sm btn-youtube btn-rounded mt-2">
                        REMOVE
                    </button>
                </div>
                `

    $(obat).appendTo('#obat_racik_parent_div')
}


function tambah_nama_obat_racik(add_btn){
    total_obat_racik += 1
    let obat =  `<div class="input-group mt-2">
                    <input type="text" class="form-control" id="input_nama_obat_racik_${total_obat_racik}" name="input_nama_obat_racik_${total_obat_racik}" onkeydown="search_obat(this, event)" placeholder="Nama obat">
                    <button type="button" onclick="remove_obat(this)" class="btn btn-sm btn-light bg-danger" style="font-size: large;">
                        -
                    </button>
                </div>
                `
    $(add_btn).parent().append(obat)
}

/**
 * Remove obat (satuan atau racik)
 * @param {*} btn 
 */
function remove_obat(rm_btn){
    $(rm_btn).parent().remove()
}

/**
 * Search obat
 * @param {*} input_form 
 */
function search_obat(input_form, event){
    let x = input_form
    if(event.key === 'Enter' || event.keyCode === 13){
        focus_input_nama_obat = $(input_form).attr('id')
        $('#search_obat_modal').modal('show')
    }
}

/**
 * Pilih obat dari modal
 * @param {*} btn_opt 
 */
function pilih_obat(btn_opt){
    $(`#${focus_input_nama_obat}`).val($(btn_opt).data('content'))
    $('#search_obat_modal').modal('hide')
}