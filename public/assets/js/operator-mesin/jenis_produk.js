$(function(){
    // Menu aktif
    $('#jenis-produk-menu').addClass('active')
    
    // DataTable
    $('.datatable-table').DataTable({
        "order": [[ 0, "asc" ]],
        "columnDefs": [
            { "type": "any-number", "targets": 0 }
        ]
    })

    // Tambah jenis produk
    $('#submit_tambah_jenis_produk_btn').on('click', function(){
        let nama_jenis_product = $('#input_nama_jenis_product').val()

        if(nama_jenis_product == ''){
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
                    nama_jenis_product: nama_jenis_product
                },
                dataType: 'json',
                beforeSend: function(){
                    $('#modal-tambah-jenis-produk').modal('hide')
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

    // Edit jenis produk - fetch data from server
    $(JENIS_PRODUK_TABLE).on('click', '.edit_jenis_produk_btn', function(){
        let kode_jenis_product = $(this).data('id')
        let url = BASE_URL + '/' + kode_jenis_product

        $('#edit_kode_jenis_product').html(kode_jenis_product)

        $.ajax({
            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            url: url,
            dataType: 'json',
            success: function(data){
                let nama_jenis_product= data.NAMA_JENIS_PRODUCT

                $('#edit_hidden_kode_jenis_product').val(kode_jenis_product)
                $('#edit_nama_jenis_product').val(nama_jenis_product)
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

    // Edit jenis produk - submit
    $('#submit_edit_jenis_produk_btn').on('click', function(){
        let kode_jenis_product = $('#edit_hidden_kode_jenis_product').val()
        let nama_jenis_product = $('#edit_nama_jenis_product').val()

        if(nama_jenis_product == ''){
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
                    kode_jenis_product: kode_jenis_product,
                    nama_jenis_product: nama_jenis_product
                },
                dataType: 'json',
                beforeSend: function(){
                    $('#modal-edit-jenis-produk').modal('hide')
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