@extends('farmasi.layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/dataTable/datatables.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="judul-tabel mb-3">
            <h5>Copy Resep</h5>
        </div>
        <div class="col-md-12">
            <div class="form-row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-title" style="margin-top: 15px; margin-left: 15px; margin-bottom: 0">
                            <div class="input-group" style="width: 50%">
                                <h5>Nama Pasien : {{Session::get('data')['NAMA_PASIEN']}}</h5>
                            </div>
                        </div><hr>
                        <div class="card-body">
                            <button type="button" id="tambah_obat_satuan_btn" class="btn btn-sm btn-rounded btn-uppercase btn-primary mr-2">
                                <i class="fas fa-plus-circle mr-2"></i>
                                Obat Satuan
                            </button>
                            <button type="button" id="tambah_obat_racik_btn" class="btn btn-sm btn-rounded btn-uppercase btn-warning">
                                <i class="fas fa-plus-circle mr-2"></i>
                                Obat Racik
                            </button>
                            <div class="row my-4">
                                <div class="col-md-6 col-sm-12 obat_satuan_container">
                                    <div class="card" id="obat_satuan_parrent_div">
                                        <h6 class="card-header text-center">Obat Satuan</h6>
                                        @php 
                                            $no = 0;
                                        @endphp
                                        @foreach(Session::get('data')['ISI_RESEP'] as $d)
                                        @php 
                                            $no++;
                                        @endphp
                                        <div class="mt-2 form-group data-{{$no}}" style="display: flex; flex-direction: column; align-items: center;">
                                            <input name="input_nama_obat_satuan_1" type="text" class="input_nama_obat_satuan my-2 w-100 form-control" value="{{$d['OBAT']}}" placeholder="Nama Obat" style="">
                                            <!-- <input name="input_signatura_obat_satuan_1" type="text" class="input_signatura_obat_satuan my-2 w-100 form-control" value="{{$d['TAKARAN']}}" placeholder="Signatura" style=""> -->
                                            <input name="input_jumlah_obat_satuan_1" type="number" class="input_jumlah_obat_satuan my-2 w-100 form-control" min="1" value="{{$d['JUMLAH']}}" placeholder="Jumlah" style="">
                                            <button type="button" class="btn btn-sm btn-youtube btn-rounded my-2 hapus" id="{{$no}}" style="">REMOVE</button><hr class="w-100 my-2">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 obat_racik_container">
                                    <div class="card" id="obat_racik_parrent_div">
                                        <h6 class="card-header text-center">Obat Racik</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12" style="text-align: center">
                                    <hr>
                                    <button class="btn btn-primary btn-rounded mr-3 btn-uppercase" data-toggle="modal" data-target="#modal">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<div class="modal fade" id="search_obat_modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <div class="modal-header bg-secondary">
                <h5 class="modal-title">Pencarian Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle text-danger"></i>
                </button>
            </div>

            <div class="modal-body py-3">
                <h5 class="my-2">3 Hasil ditemukan</h5>

                <div class="input-group mt-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radio_obat" id="radio_obat_1" value="" checked>
                        </div>
                    </div>
                    <input type="text" class="form-control" id="input_text_radio_obat_1" value="Obat 1" readonly>
                </div>
                
                <div class="input-group mt-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radio_obat" id="radio_obat_2" value="">
                        </div>
                    </div>
                    <input type="text" class="form-control" id="input_text_radio_obat_2" value="Obat 2" readonly>
                </div>
                
                <div class="input-group mt-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radio_obat" id="radio_obat_3" value="">
                        </div>
                    </div>
                    <input type="text" class="form-control" id="input_text_radio_obat_3" value="Obat 3" readonly>
                </div>
            </div>

            <div class="modal-footer">
                <div class="container">
                    <button type="button" id="pilih_obat_modal_btn" class="btn btn-linkedin btn-rounded btn-uppercase float-right" data-dismiss="modal">
                        Pilih
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="{{route('farmasi')}}" method="GET">
            <div class="modal-body">
                <p>Apakah anda yakin ingin menyimpan resep ini ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-primary">Ya</button>
            </div>
        </form>
    </div>
  </div>
</div>

@section('script')
    <script src="{{ asset('assets/gogi/vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/gogi/assets/js/examples/toast.js') }}"></script>
    <script>
        $(document).ready(function(){
            const menu = document.getElementById("walkin");
            menu.classList.add("active");

            let total_obat_satuan = 0
            let total_obat_racik = 0

            // Obat satuan
            $('#tambah_obat_satuan_btn').on('click', function(){
                total_obat_satuan += 1

                // parrent div
                let div = document.createElement('div')
                div.className = 'mt-2 form-group'
                div.style = 'display: flex; flex-direction: column; align-items: center;'

                // input group div (nama obat + search button)
                let group_div = document.createElement('div')
                group_div.className = 'input-group my-2 w-100'

                // input nama obat
                let input_nama_obat = document.createElement('input')
                input_nama_obat.name = `input_nama_obat_satuan_${total_obat_satuan}`
                input_nama_obat.type = 'text'
                input_nama_obat.className = 'input_nama_obat_satuan form-control'
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

                document.getElementById('obat_satuan_parrent_div').appendChild(div)

                // remove obat
                $(rm_btn).on('click', function(){
                    this.parentNode.remove()
                })

                // search obat
                // let x = document.getElementById('input_nama_obat_satuan');
                // x.addEventListener("keyup", function(event) {
                //     if (event.keyCode === 13) {
                //         event.preventDefault();
                //         let index = $(this).attr('name').slice('23')
                //         search_obat(input_nama_obat)
                //         console.log(index);
                //     }
                // });

                // search obat
                $(search_obat_btn).on('click', function(){
                    search_obat(input_nama_obat)
                })

            });

            // Obat racik
            $('#tambah_obat_racik_btn').on('click', function(){
                total_obat_racik += 1

                // parrent div
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

                document.getElementById('obat_racik_parrent_div').appendChild(div)

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

            });

            // Hapus data
            $('.hapus').on('click', function(){
                var id = $(this).attr('id');
                console.log(id);
                $('.data-'+id).remove();
            });

            // search obat
function search_obat(input_form){
    let keyword = $(input_form).val()

    let obat_1 = `${keyword} 10 Mg Tab`
    let obat_2 = `${keyword} 15 Mg Tab`
    let obat_3 = `${keyword} 20 Mg Tab`

    obat_1 = obat_1.toUpperCase()
    obat_2 = obat_2.toUpperCase()
    obat_3 = obat_3.toUpperCase()

    $('#search_obat_modal #radio_obat_1').val(obat_1)
    $('#search_obat_modal #radio_obat_2').val(obat_2)
    $('#search_obat_modal #radio_obat_3').val(obat_3)

    $('#search_obat_modal #input_text_radio_obat_1').val(obat_1)
    $('#search_obat_modal #input_text_radio_obat_2').val(obat_2)
    $('#search_obat_modal #input_text_radio_obat_3').val(obat_3)
    
    $('#search_obat_modal').modal('show')

    $('#search_obat_modal #pilih_obat_modal_btn').on('click', function(){
        var radio_val = $("#search_obat_modal input[name='radio_obat']:checked").val()
        $(input_form).val(radio_val)
    })
}
        });
    </script>
@endsection