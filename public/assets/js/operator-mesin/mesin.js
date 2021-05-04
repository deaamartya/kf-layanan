$(function(){
    // Menu aktif
    $('#mesin-menu').addClass('active')
    
    // DataTable
    $('.datatable-table').DataTable({
        "order": [[ 0, "asc" ]],
        "columnDefs": [
            { "type": "any-number", "targets": 0 }
        ]
    })

    // Select2
    $('.select2-dropdown').select2()

    // Submit tambah mesin
    $('#submit_tambah_mesin_btn').on('click', function(){
        let nama_mesin = $('#input_nama_mesin').val()
        let kode_moulding = $('#input_kode_moulding').val()

        if(nama_mesin == '' || kode_moulding == ''){
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
                    nama_mesin: nama_mesin,
                    kode_moulding: kode_moulding
                },
                dataType: 'json',
                beforeSend: function(){
                    $('#modal-tambah-mesin').modal('hide')
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

    // Edit mesin - fetch data from server
    $(MESIN_TABLE).on('click', '.edit_mesin_btn', function(){
        let kode_mesin = $(this).data('id')
        let url = BASE_URL + '/' + kode_mesin

        $('#edit_kode_mesin').html(kode_mesin)

        $.ajax({
            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            url: url,
            dataType: 'json',
            success: function(data){
                let nama_mesin = data.NAMA_MESIN
                let kode_moulding = data.KODE_MOULDING

                $('#edit_hidden_kode_mesin').val(kode_mesin)
                $('#edit_nama_mesin').val(nama_mesin)
                $('#edit_kode_moulding').val(kode_moulding)
                $('#edit_kode_moulding').trigger('change')
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

    // Edit mesin - submit
    $('#submit_edit_mesin_btn').on('click', function(){
        let kode_mesin = $('#edit_hidden_kode_mesin').val()
        let nama_mesin = $('#edit_nama_mesin').val()
        let kode_moulding = $('#edit_kode_moulding').val()

        if(nama_mesin == '' || kode_moulding == '' || kode_mesin == ''){
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
                    kode_mesin: kode_mesin,
                    nama_mesin: nama_mesin,
                    kode_moulding: kode_moulding
                },
                dataType: 'json',
                beforeSend: function(){
                    $('#modal-edit-mesin').modal('hide')
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