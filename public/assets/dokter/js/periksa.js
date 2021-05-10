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
    let total_biaya = parseFloat($('#nav-biaya #input_total_biaya').val())

    let tr_new = document.createElement('tr')
    let td_tindakan = document.createElement('td') 
    let td_nominal = document.createElement('td') 
    let td_keterangan = document.createElement('td')
    
    td_tindakan.className = 'w-25'
    td_nominal.className = 'w-25'
    td_keterangan.className = 'w-50'

    let input_tindakan = document.createElement('input')
    input_tindakan.type = 'text'
    input_tindakan.readOnly = true
    input_tindakan.value = tindakan
    input_tindakan.className = `biaya_tindakan_${komponen_biaya} form-control-plaintext mt-2`
    
    let input_nominal = document.createElement('input')
    input_nominal.type = 'text'
    input_nominal.readOnly = true
    input_nominal.value = nominal
    input_nominal.className = `biaya_nominal_${komponen_biaya} form-control-plaintext mt-2`
    
    let input_keterangan = document.createElement('input')
    input_keterangan.type = 'text'
    input_keterangan.readOnly = true
    input_keterangan.value = keterangan
    input_keterangan.className = `biaya_keterangan_${komponen_biaya} form-control-plaintext mt-2`

    td_tindakan.appendChild(input_tindakan)
    td_nominal.appendChild(input_nominal)
    td_keterangan.appendChild(input_keterangan)

    tr_new.appendChild(td_tindakan)
    tr_new.appendChild(td_nominal)
    tr_new.appendChild(td_keterangan)

    document.getElementById('biaya_table').appendChild(tr_new)

    total_biaya += parseFloat($(input_nominal).val())

    $('#nav-biaya #input_total_biaya').val(total_biaya)
    toastr.success('Biaya ditambahkan')
})

// format rupiah input biaya
// let biaya_input_nominal = document.getElementById('biaya_input_nominal')
// biaya_input_nominal.addEventListener('keyup', function(e){
//     biaya_input_nominal.value = format_rupiah(this.value)
// })

// function format rupiah (general)
function format_rupiah(angka){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
	split   		= number_string.split(','),
	sisa     		= split[0].length % 3,
	rupiah     		= split[0].substr(0, sisa),
	ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if(ribuan){
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}
 
	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return rupiah
}