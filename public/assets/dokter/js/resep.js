let total_obat_satuan = 0
let total_obat_racik = 0

// Obat satuan
$('#tambah_obat_satuan_btn').on('click', function(){
    total_obat_satuan += 1

    // parent div
    let div = document.createElement('div')
    div.className = 'mt-2 form-group'
    div.style = 'display: flex; flex-direction: column; align-items: center;'

    // input group div (nama obat + search button)
    let group_div = document.createElement('div')
    group_div.className = 'input-group my-2 w-100'

    // input nama obat
    let input_nama_obat = document.createElement('input')
    input_nama_obat.name = `input_nama_obat_satuan_${total_obat_satuan}`
    input_nama_obat.id = `input_nama_obat_satuan_${total_obat_satuan}`
    input_nama_obat.type = 'text'
    // input_nama_obat.className = 'input_nama_obat_satuan form-control'
    input_nama_obat.className = 'form-control'
    input_nama_obat.placeholder = 'Nama Obat'
    input_nama_obat.style = ''

    // search button
    let search_obat_btn = document.createElement('button')
    search_obat_btn.type = 'button'
    search_obat_btn.className = 'search_obat_btn btn btn-light'

    // search icon
    let search_obat_icon = document.createElement('i')
    search_obat_icon.className = 'fas fa-search'

    // input signatura
    let input_signatura = document.createElement('input')
    input_signatura.name = `input_signatura_obat_satuan_${total_obat_satuan}`
    input_signatura.type = 'text'
    input_signatura.className = 'input_signatura_obat_satuan my-2 w-100 form-control'
    input_signatura.placeholder = 'Signatura'
    input_signatura.style = ''

    // input jumlah
    let input_jumlah = document.createElement('input')
    input_jumlah.name = `input_jumlah_obat_satuan_${total_obat_satuan}`
    input_jumlah.type = 'number'
    input_jumlah.className = 'input_jumlah_obat_satuan my-2 w-100 form-control'
    input_jumlah.min = '1'
    input_jumlah.placeholder = 'Jumlah'
    input_jumlah.style = ''

    // remove button
    let rm_btn = document.createElement('button')
    rm_btn.type = 'button'
    rm_btn.className = `rm_obat_satuan_btn div_obat_satuan_${total_obat_satuan} btn btn-sm btn-youtube btn-rounded my-2`
    rm_btn.style = ''
    rm_btn.textContent = 'REMOVE'

    // divider
    let hr = document.createElement('hr')
    hr.className = 'w-100 my-2'

    search_obat_btn.appendChild(search_obat_icon)
    group_div.appendChild(input_nama_obat)
    group_div.appendChild(search_obat_btn)

    div.appendChild(group_div)
    div.appendChild(input_signatura)
    div.appendChild(input_jumlah)
    div.appendChild(rm_btn)
    div.appendChild(hr)

    document.getElementById('obat_satuan_parent_div').appendChild(div)

    // remove obat
    $(rm_btn).on('click', function(){
        this.parentNode.remove()
    })

    // search obat
    $(search_obat_btn).on('click', function(){
        search_obat(input_nama_obat)
    })

    // trigger search obat saat user menekan tombol enter pada input nama obat
    $(input_nama_obat).on('keyup', function(event){
        if(event.key === 'Enter' || event.keyCode === 13){
            search_obat(input_nama_obat)
        }
    })

})

// Obat racik
$('#tambah_obat_racik_btn').on('click', function(){
    total_obat_racik += 1

    // parent div
    let div = document.createElement('div')
    div.className = 'mt-2 form-group'
    div.style = 'display: flex; flex-direction: column; align-items: center;'

    // div nama obat
    let nama_obat_div = document.createElement('div')
    nama_obat_div.className = 'nama_obat_div w-100'

    // div input group (nama obat + tambah button)
    let group_div = document.createElement('div')
    group_div.className = 'input-group my-2'

    // input nama obat
    let input_nama_obat = document.createElement('input')
    input_nama_obat.name = `input_nama_obat_racik_${total_obat_racik}`
    input_nama_obat.type = 'text'
    input_nama_obat.className = 'input_nama_obat_racik form-control'
    input_nama_obat.placeholder = 'Nama Obat'
    input_nama_obat.style = ''

    // tambah nama obat button
    let tambah_nama_obat = document.createElement('button')
    tambah_nama_obat.type = 'button'
    tambah_nama_obat.className = 'btn btn-sm btn-light bg-success tambah_nama_obat_racik_btn'
    tambah_nama_obat.textContent = '+'
    tambah_nama_obat.style = 'font-size: large;'

    // input prescriptio
    let input_prescriptio = document.createElement('input')
    input_prescriptio.name = `input_prescriptio_obat_racik_${total_obat_racik}`
    input_prescriptio.type = 'text'
    input_prescriptio.className = 'input_prescriptio_obat_racik my-2 w-100 form-control'
    input_prescriptio.placeholder = 'Prescriptio'
    input_prescriptio.style = ''
    
    // input signatura
    let input_signatura = document.createElement('input')
    input_signatura.name = `input_signatura_obat_racik_${total_obat_racik}`
    input_signatura.type = 'text'
    input_signatura.className = 'input_signatura_obat_racik my-2 w-100 form-control'
    input_signatura.placeholder = 'Signatura'
    input_signatura.style = ''

    // input jumlah
    let input_jumlah = document.createElement('input')
    input_jumlah.name = `input_jumlah_obat_racik_${total_obat_racik}`
    input_jumlah.type = 'number'
    input_jumlah.className = 'input_jumlah_obat_racik my-2 w-100 form-control'
    input_jumlah.min = '1'
    input_jumlah.placeholder = 'Jumlah'
    input_jumlah.style = ''

    // remove button
    let rm_btn = document.createElement('button')
    rm_btn.type = 'button'
    rm_btn.className = `rm_obat_racik_btn div_obat_racik_${total_obat_racik} btn btn-sm btn-youtube btn-rounded my-2`
    rm_btn.style = ''
    rm_btn.textContent = 'REMOVE'

    // divider
    let hr = document.createElement('hr')
    hr.className = 'w-100 my-2'

    group_div.appendChild(input_nama_obat)
    group_div.appendChild(tambah_nama_obat)
    nama_obat_div.appendChild(group_div)

    div.appendChild(nama_obat_div)
    div.appendChild(input_prescriptio)
    div.appendChild(input_signatura)
    div.appendChild(input_jumlah)
    div.appendChild(rm_btn)
    div.appendChild(hr)

    document.getElementById('obat_racik_parent_div').appendChild(div)

    // tambah nama obat
    $(tambah_nama_obat).on('click', function(){
        // div input group (nama obat + tambah button)
        let group_div_child = document.createElement('div')
        group_div_child.className = 'input-group my-2'

        // input nama obat
        let input_nama_obat_child = document.createElement('input')
        input_nama_obat_child.name = `input_nama_obat_racik_${total_obat_racik}`
        input_nama_obat_child.type = 'text'
        input_nama_obat_child.className = 'input_nama_obat_racik form-control'
        input_nama_obat_child.placeholder = 'Nama Obat'

        // remove nama obat button
        let remove_nama_obat = document.createElement('button')
        remove_nama_obat.type = 'button'
        remove_nama_obat.className = 'btn btn-sm btn-light bg-danger remove_nama_obat_racik_btn'
        remove_nama_obat.textContent = '-'
        remove_nama_obat.style = 'font-size: large;'

        group_div_child.appendChild(input_nama_obat_child)
        group_div_child.appendChild(remove_nama_obat)
        this.parentNode.appendChild(group_div_child)

        // remove nama obat
        $(remove_nama_obat).on('click', function(){
            this.parentNode.remove()
        })

    })

    // remove obat
    $(rm_btn).on('click', function(){
        this.parentNode.remove()
    })

    // trigger search obat saat user menekan tombol enter pada input nama obat
    $(input_nama_obat).on('keyup', function(event){
        if(event.key === 'Enter' || event.keyCode === 13){
            search_obat(input_nama_obat)
        }
    })

})

// search obat
function search_obat(input_form){
    $('#search_obat_modal').modal('show')

    $('#search_obat_modal .search_obat_result_btn').on('click', function(){
        let data_content = $(this).data('content')
        $(input_form).val(data_content)
        $('#search_obat_modal').modal('hide')
    })
}