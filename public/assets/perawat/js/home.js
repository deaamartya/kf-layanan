$('#home-menu').addClass('active')

$('.nama_pasien_btn').on('click', function(){
    let id_pasien = $(this).data('id')
    
    $.ajax({
        type: 'GET',
        url: `${BASE_URL}/pasien/${id_pasien}`,
        headers: {
            'X-CSRF-TOKEN': CSRF_TOKEN
        },
        success: function(data){
            $('#input_id_pasien').val(data.id)
            $('#input_nama_pasien').val(data.nama)
            $('#input_usia_pasien').val(data.usia)
            $('#input_tensi_atas_pasien').val(data.tensi_atas)
            $('#input_tensi_bawah_pasien').val(data.tensi_bawah)
            $('#input_nadi_pasien').val(data.nadi)
            $('#input_rr_pasien').val(data.rr)
            $('#input_suhu_pasien').val(data.suhu)
            $('#input_berat_pasien').val(data.berat)
            $('#input_tinggi_pasien').val(data.tinggi)
        },
        error: function(xhr){
            let error_msg = xhr.status + ': ' + xhr.statusText
            console.log(error_msg)
        }
    })
})