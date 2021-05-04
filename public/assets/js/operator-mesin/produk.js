$(function(){
    // Menu aktif
    $('#produk-menu').addClass('active')

    // DataTable
    $('.datatable-table').DataTable({
        "order": [[ 0, "asc" ]],
        "columnDefs": [
            { "type": "any-number", "targets": 0 }
        ]
    })

    // Select2
    $('.select2-dropdown').select2()

    // Tambah produk
    $('#submit_tambah_produk_btn').on('click', function(){
        let nama_product = $('#input_nama_product').val()
        let kode_jenis_product = $('#input_kode_jenis_product').val()
        let harga_product = $('#input_harga_product').val()
        let stok_product = $('#input_stok_product').val()

        if(nama_product == '' || kode_jenis_product == ''){
            Swal.fire({
                icon: 'warning',
                text: 'Anda belum melengkapi form'
            })

        } else {

            if(harga_product < 0 || stok_product <0){

                Swal.fire({
                    icon: 'warning',
                    text: 'Mohon masukkan angka yang valid untuk Harga dan Stok produk'
                })

            } else {

                $.ajax({
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    url: BASE_URL,
                    data: {
                        nama_product: nama_product,
                        kode_jenis_product: kode_jenis_product,
                        harga_product: harga_product,
                        stok_product: stok_product
                    },
                    dataType: 'json',
                    beforeSend: function(){
                        $('#modal-tambah-produk').modal('hide')
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

    // Edit produk - fetch data from server
    $(PRODUCT_TABLE).on('click', '.edit_produk_btn', function(){
        let kode_product = $(this).data('id')
        let url = BASE_URL + '/' + kode_product

        $('#edit_kode_product').html(kode_product)

        $.ajax({
            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            url: url,
            dataType: 'json',
            success: function(data){
                let nama_product = data.NAMA_PRODUCT
                let kode_jenis_product = data.KODE_JENIS_PRODUCT
                let harga_product = data.HARGA_PRODUCT
                let stok_product = data.STOK_PRODUCT

                $('#edit_hidden_kode_product').val(kode_product)
                $('#edit_nama_product').val(nama_product)
                $('#edit_kode_jenis_product').val(kode_jenis_product)
                $('#edit_kode_jenis_product').trigger('change')
                $('#edit_harga_product').val(harga_product)
                $('#edit_stok_product').val(stok_product)
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

    // Edit produk - submit
    $('#submit_edit_produk_btn').on('click', function(){
        let kode_product = $('#edit_hidden_kode_product').val()
        let nama_product = $('#edit_nama_product').val()
        let kode_jenis_product = $('#edit_kode_jenis_product').val()
        let harga_product = $('#edit_harga_product').val()
        let stok_product = $('#edit_stok_product').val()

        if(nama_product == '' || kode_jenis_product == '' || kode_product == ''){
            Swal.fire({
                icon: 'warning',
                text: 'Anda belum melengkapi form'
            })

        } else {
            if(harga_product < 0 || stok_product < 0){

                Swal.fire({
                    icon: 'warning',
                    text: 'Mohon masukkan angka yang valid untuk Harga dan Stok produk'
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
                        kode_product: kode_product,
                        kode_jenis_product: kode_jenis_product,
                        nama_product: nama_product,
                        harga_product: harga_product,
                        stok_product: stok_product
                    },
                    dataType: 'json',
                    beforeSend: function(){
                        $('#modal-edit-produk').modal('hide')
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