$(function(){
    // Menu aktif
    $('#jenis-bahan-baku-menu').addClass('active')
    
    // DataTable
    $('.datatable-table').DataTable({
        "order": [[ 0, "asc" ]],
        "columnDefs": [
            { "type": "any-number", "targets": 0 }
        ]
    })

    // Tambah jenis bahan baku
    $('#submit_tambah_jenis_bahan_baku_btn').on('click', function(){
        let nama_jenis_bahan_baku = $('#input_nama_jenis_bahan_baku').val()

        if(nama_jenis_bahan_baku == ''){
            Swal.fire({
                icon: 'warning',
                text: 'Anda belum melengkapi form'
            })

        } else {

            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN
                },
                url: BASE_URL,
                data: {
                    nama_jenis_bahan_baku: nama_jenis_bahan_baku
                },
                dataType: 'json',
                beforeSend: function(){
                    $('#modal-tambah-jenis-bahan-baku').modal('hide')
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
    })

    // Edit jenis bahan baku - fetch data from server
    $(JENIS_BAHAN_BAKU_TABLE).on('click', '.edit_jenis_bahan_baku_btn', function(){
        let id_jenis_bahan_baku = $(this).data('id')
        let url = BASE_URL + '/' + id_jenis_bahan_baku

        $('#edit_id_jenis_bahan_baku').html(id_jenis_bahan_baku)

        $.ajax({
            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            url: url,
            dataType: 'json',
            success: function(data){
                let nama_jenis_bahan_baku = data.NAMA_JENIS_BAHAN_BAKU

                $('#edit_hidden_id_jenis_bahan_baku').val(id_jenis_bahan_baku)
                $('#edit_nama_jenis_bahan_baku').val(nama_jenis_bahan_baku)
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

    // Edit jenis bahan baku - submit
    $('#submit_edit_jenis_bahan_baku_btn').on('click', function(){
        let id_jenis_bahan_baku = $('#edit_hidden_id_jenis_bahan_baku').val()
        let nama_jenis_bahan_baku = $('#edit_nama_jenis_bahan_baku').val()

        if(nama_jenis_bahan_baku == ''){
            Swal.fire({
                icon: 'warning',
                text: 'Anda belum melengkapi form'
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
                    id_jenis_bahan_baku: id_jenis_bahan_baku,
                    nama_jenis_bahan_baku: nama_jenis_bahan_baku
                },
                dataType: 'json',
                beforeSend: function(){
                    $('#modal-edit-jenis-bahan-baku').modal('hide')
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
    })

})