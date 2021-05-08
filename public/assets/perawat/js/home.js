$('#home-menu').addClass('active')

// Ambil data pasien untuk rekam medis
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

            if(data.status_panggil == 2){
                $('#rm_masuk_btn').prop('disabled', false)
                $('#rm_masuk_btn').css('cursor', 'pointer')
            } else {
                $('#rm_masuk_btn').prop('disabled', true)
                $('#rm_masuk_btn').css('cursor', 'not-allowed')
            }
        },
        error: function(xhr){
            let error_msg = xhr.status + ': ' + xhr.statusText
            console.log(error_msg)
        }
    })
})

// Ubah status panggil pasien "lewati" => "masuk"
$('#rm_masuk_btn').on('click', function(){
    let id_pasien = $('#input_id_pasien').val()
    let status_panggil = 1

    $.ajax({
        type: 'POST',
        url: `${BASE_URL}/pasien/status-panggil`,
        headers: {
            'X-CSRF-TOKEN': CSRF_TOKEN
        },
        data: {
            _method: 'put',
            id: id_pasien,
            status_panggil: status_panggil
        },
        success: function(data){
            location.reload()
        },
        error: function(xhr){
            let error_msg = xhr.status + ': ' + xhr.statusText
            console.log(error_msg)
        }
    })
})

// Next pasien
$('#antrian_next_btn').on('click', function(){
    let button = 'next'
    let no_antrian = $('#input_no_antrian_saat_ini').val()

    $.ajax({
        type: 'POST',
        url: `${BASE_URL}/antrian`,
        headers: {
            'X-CSRF-TOKEN': CSRF_TOKEN
        },
        data: {
            button: button,
            no_antrian: no_antrian
        },
        success: function(data){
            location.reload()
        },
        error: function(xhr){
            let error_msg = xhr.status + ': ' + xhr.statusText
            console.log(error_msg)
        }
    })
})

// Pasien masuk
$('#antrian_masuk_btn').on('click', function(){
    let button = 'masuk'
    let no_antrian = $('#input_no_antrian_saat_ini').val()

    $.ajax({
        type: 'POST',
        url: `${BASE_URL}/antrian`,
        headers: {
            'X-CSRF-TOKEN': CSRF_TOKEN
        },
        data: {
            button: button,
            no_antrian: no_antrian
        },
        success: function(data){
            location.reload()
        },
        error: function(xhr){
            let error_msg = xhr.status + ': ' + xhr.statusText
            console.log(error_msg)
        }
    })
})

// Recall
$('#antrian_recall_btn').on('click', function(){
    document.getElementById('recall_bell').play()
})