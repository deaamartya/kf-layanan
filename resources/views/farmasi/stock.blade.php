@extends('farmasi.layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/dataTable/datatables.min.css') }}">
    <style>
        toastr.options = {
            timeOut: 3000,
            progressBar: true,
            showMethod: "slideDown",
            hideMethod: "slideUp",
            showDuration: 200,
            hideDuration: 200
        }

        @media only screen and (max-width: 600px) {
            .btn-sim {
                margin-top: 10px;
            }
        }
    </style>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="judul-tabel mb-3">
            <h5>Cek Stock</h5>
        </div>
        <div class="col-md-12">
            <div class="row" id="resep">
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            @php
                                $data = Session::get('data')['ID_PESANAN'];
                            @endphp
                            <input type="hidden" value="{{$data}}" id="id"> 
                            @foreach(Session::get('data')['ISI_RESEP'] as $d)
                            @php
                                $obat = $d['OBAT'];
                            @endphp
                            <div class="row">
                                <div class="col-md-2 col-sm-6">
                                    <h5>Rx</h5>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" value="{{$d['OBAT']}}" class="form-control" readonly="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{$d['TAKARAN']}}" class="form-control" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <h6>Jumlah : {{$d['JUMLAH']}}</h6>
                                </div>
                            </div><hr>
                            @endforeach
                            <input type="hidden" value="{{$obat}}" id="obat">
                            <input type="hidden" value="0" id="status">
                            <div class="row">
                                <div class="col-md-8" id="check-stock">

                                </div>
                                <div class="col-md-4">
                                    <button style="float: right" class="btn btn-primary btn-rounded btn-uppercase" id="konfirm" disabled>Konfirmasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div style="float: right">
                        <button class="btn btn-danger btn-rounded btn-uppercase btn-sm btn-sim" id="kurang">Cek Stock (Kurang)</button></a>
                        <button class="btn btn-success btn-rounded btn-uppercase btn-sm btn-sim" id="ok">Cek Stock (Ok)</button></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class='preloader' id="loader-stock">
                        <div class='preloader-icon'></div>
                        <span id="text">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script src="{{ asset('assets/gogi/vendors/dataTable/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            const menu = document.getElementById("online");
            menu.classList.add("active");

            $('#ok').on('click', function(){
                var status = document.getElementById('status').value;
                var el =    '<div class="form-group">'+
                                '<input type="text" value="Resep dapat dipenuhi" style="width: 60%; background-color: green; color: white; font-size: 16px; font-weight: bold; text-align:center" class="form-control" readonly>'+
                            '</div>';

                if(status == "0"){
                    document.getElementById('status').value = "1";
                }
                // else{
                //     $('#check-stock').remove();
                // }

                $("#resep").hide();
                document.getElementById('text').innerHTML = "Cek Stock...";
                $("#loader-stock").show();
                setTimeout(function(){ 
                    $("#resep").show();
                    $("#loader-stock").hide();
                    $('#check-stock').append(el);
                    document.getElementById('konfirm').disabled = false;
                }, 2000);
                
            });
            $('#kurang').on('click', function(){
                var status = document.getElementById('status').value;
                var obat = document.getElementById('obat').value;
                var el = '<div class="form-group">'+
                            '<input type="text" value="Obat '+obat+' tidak tersedia" style="background-color: red; color: white; font-size: 16px; font-weight: bold; text-align:center" class="form-control" readonly>'+
                        '</div>';

                // if(status == "0"){
                //     document.getElementById('status').value = "1";
                // }
                // else{
                //     $('#check-stock').remove();
                // }

                $("#resep").hide();
                document.getElementById('text').innerHTML = "Cek Stock...";
                $("#loader-stock").show();
                setTimeout(function(){ 
                    $("#resep").show();
                    $("#loader-stock").hide();
                    $('#check-stock').append(el);
                    document.getElementById('konfirm').disabled = false;
                }, 2000);
            });

            $('#konfirm').on('click', function(){
                var status = document.getElementById('status').value;
                var id = document.getElementById('id').value;
                var url = 'konfirm/stock/'+id+'/'+status;
                console.log(url);
                setTimeout(function(){ 
                    window.location = url;
                }, 0);
            });

        });
    </script>
    
@endsection