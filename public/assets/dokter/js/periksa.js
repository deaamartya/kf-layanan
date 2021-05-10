$('#periksa-pasien-menu').addClass('active')

let komponen_biaya = 0

CKEDITOR.replace('input_surat_rujukan')
CKEDITOR.replace('input_surat_sehat')
CKEDITOR.replace('input_surat_sakit')

// prevent submit form via tombol enter
document.getElementById("form_periksa_pasien").onkeypress = function(e) {     
    if (e.keyCode == 13) {
      e.preventDefault()
    }
}

$('#tulis_surat_rujukan_btn').on('click', function(){
    $('#surat_rujukan_modal').modal('show')
})

$('#tulis_surat_sehat_btn').on('click', function(){
    $('#surat_sehat_modal').modal('show')
})

$('#tulis_surat_sakit_btn').on('click', function(){
    $('#surat_sakit_modal').modal('show')
})

$('#nav-biaya #tambah_biaya_btn').on('click', function(){
    komponen_biaya += 1

    let tindakan = $('#nav-biaya .select_tindakan').val()
    let nominal = $('#nav-biaya .nominal_biaya').val()
    let keterangan = $('#nav-biaya .keterangan_biaya').val()
    let total_biaya = parseInt($('#nav-biaya #input_total_biaya').val())

    let el_tindakan = document.createElement('input')
    el_tindakan.type = 'text'
    el_tindakan.value = tindakan
    el_tindakan.className = `biaya_tindakan_${komponen_biaya} form-control-plaintext mt-2`
    
    let el_nominal = document.createElement('input')
    el_nominal.type = 'number'
    el_nominal.value = nominal
    el_nominal.className = `biaya_nominal_${komponen_biaya} form-control-plaintext mt-2 text-center`
    
    // let el_keterangan = document.createElement('input')
    // el_keterangan.type = 'text'
    // el_keterangan.value = keterangan
    // el_keterangan.className = `biaya_keterangan_${komponen_biaya} form-control-plaintext mt-2`
    
    let el_keterangan = document.createElement('p')
    el_keterangan.textContent = keterangan
    el_keterangan.className = `biaya_keterangan_${komponen_biaya} text-left mt-2`

    let divider1 = document.createElement('hr')
    divider1.className = 'my-2'
    let divider2 = document.createElement('hr')
    divider2.className = 'my-2'
    let divider3 = document.createElement('hr')
    divider3.className = 'my-2'

    document.getElementById('biaya_tindakan_container').appendChild(el_tindakan)
    document.getElementById('biaya_tindakan_container').appendChild(divider1)
    document.getElementById('biaya_nominal_container').appendChild(el_nominal)
    document.getElementById('biaya_nominal_container').appendChild(divider2)
    document.getElementById('biaya_keterangan_container').appendChild(el_keterangan)
    document.getElementById('biaya_keterangan_container').appendChild(divider3)

    total_biaya += parseInt($(el_nominal).val())

    $('#nav-biaya #input_total_biaya').val(total_biaya)
})