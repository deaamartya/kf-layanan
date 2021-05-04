$(function(){
    // Menu aktif
    $('#bahan-baku-menu').addClass('active')
    
    // DataTable
    $('.datatable-table').DataTable({
        "order": [[ 0, "asc" ]],
        "columnDefs": [
            { "type": "any-number", "targets": 0 }
        ]
    })

    // Select2
    $('.select2-dropdown').select2()

    // Tambah bahan baku
    $('#submit_tambah_bahan_baku_btn').on('click', function(){
        let nama_bahan_baku = $('#input_nama_bahan_baku').val()
        let id_jenis_bahan_baku = $('#input_id_jenis_bahan_baku').val()
        let stok_bahan_baku = $('#input_stok_bahan_baku').val()

        if(nama_bahan_baku == '' || id_jenis_bahan_baku == ''){
            Swal.fire({
                icon: 'warning',
                text: 'Anda belum melengkapi form'
            })

        } else {

            if(stok_bahan_baku < 0){

                Swal.fire({
                    icon: 'warning',
                    text: 'Jumlah stok tidak valid'
                })

            } else {

                $.ajax({
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    url: BASE_URL,
                    data: {
                        nama_bahan_baku: nama_bahan_baku,
                        id_jenis_bahan_baku: id_jenis_bahan_baku,
                        stok_bahan_baku: stok_bahan_baku
                    },
                    dataType: 'json',
                    beforeSend: function(){
                        $('#modal-tambah-bahan-baku').modal('hide')
                        $('#process_loader').css('display', 'flex')
                    },
                    success: function(data){
                        
                        if(data.status_code == 0){
                            Swal.fire({
                                icon: 'error',
                                text: 'Maaf, terjadi kesalahan internal sistem'
                            })
    
                            console.log(data.message)
    
                        } else if(data.status_code == 1){
                            Swal.fire({
                                icon: 'success',
                                title: 'Sukses',
                                text: 'Data berhasil ditambahkan',
                                showConfirmButton: false
                            })
    
                            window.setTimeout(function(){
                                location.reload()
                            }, 2000)
                        }
    
                    },
                    error: function(xhr, status, error){
                        let error_msg = xhr.status + ': ' + xhr.statusText
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops. . .',
                            text: error_msg
                        })
                    },
                    complete: function(){
                        $('#process_loader').css('display', 'none')
                    }
                })

            }
            
        }
    })

    // Edit bahan baku - fetch data from server
    $(BAHAN_BAKU_TABLE).on('click', '.edit_bahan_baku_btn', function(){
        let kode_bahan_baku = $(this).data('id')
        let url = BASE_URL + '/' + kode_bahan_baku

        $('#edit_kode_bahan_baku').html(kode_bahan_baku)

        $.ajax({
            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            url: url,
            dataType: 'json',
            success: function(data){
                let nama_bahan_baku = data.NAMA_BAHAN_BAKU
                let id_jenis_bahan_baku = data.ID_JENIS_BAHAN_BAKU
                let stok_bahan_baku = data.STOK_BAHAN_BAKU

                $('#edit_hidden_kode_bahan_baku').val(kode_bahan_baku)
                $('#edit_nama_bahan_baku').val(nama_bahan_baku)
                $('#edit_id_jenis_bahan_baku').val(id_jenis_bahan_baku)
                $('#edit_id_jenis_bahan_baku').trigger('change')
                $('#edit_stok_bahan_baku').val(stok_bahan_baku)
            },
            error: function(xhr, status, error){
                let error_msg = xhr.status + ': ' + xhr.statusText
                Swal.fire({
                    icon: 'error',
                    title: 'Oops. . .',
                    text: error_msg
                })
            }
        })
    })

    // Edit bahan baku - submit
    $('#submit_edit_bahan_baku_btn').on('click', function(){
        let kode_bahan_baku = $('#edit_hidden_kode_bahan_baku').val()
        let nama_bahan_baku = $('#edit_nama_bahan_baku').val()
        let id_jenis_bahan_baku = $('#edit_id_jenis_bahan_baku').val()
        let stok_bahan_baku = $('#edit_stok_bahan_baku').val()

        if(nama_bahan_baku == '' || id_jenis_bahan_baku == '' || kode_bahan_baku == ''){
            Swal.fire({
                icon: 'warning',
                text: 'Anda belum melengkapi form'
            })

        } else {
            if(stok_bahan_baku < 0){

                Swal.fire({
                    icon: 'warning',
                    text: 'Jumlah stok tidak valid'
                })

            } else {
                $.ajax({
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    url: BASE_URL,
                    data: {
                        _method: 'put',
                        kode_bahan_baku: kode_bahan_baku,
                        nama_bahan_baku: nama_bahan_baku,
                        id_jenis_bahan_baku: id_jenis_bahan_baku,
                        stok_bahan_baku: stok_bahan_baku
                    },
                    dataType: 'json',
                    beforeSend: function(){
                        $('#modal-edit-bahan-baku').modal('hide')
                        $('#process_loader').css('display', 'flex')
                    },
                    success: function(data){
                        
                        if(data.status_code == 0){
                            Swal.fire({
                                icon: 'error',
                                text: 'Maaf, terjadi kesalahan internal sistem'
                            })
        
                            console.log(data.message)
        
                        } else if(data.status_code == 1){
                            Swal.fire({
                                icon: 'success',
                                title: 'Sukses',
                                text: 'Data berhasil diupdate',
                                showConfirmButton: false
                            })
        
                            window.setTimeout(function(){
                                location.reload()
                            }, 2000)
                        }
        
                    },
                    error: function(xhr, status, error){
                        let error_msg = xhr.status + ': ' + xhr.statusText
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops. . .',
                            text: error_msg
                        })
                    },
                    complete: function(){
                        $('#process_loader').css('display', 'none')
                    }
                })
            }
        }
    })

})