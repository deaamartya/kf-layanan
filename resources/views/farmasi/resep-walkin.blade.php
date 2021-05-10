@extends('farmasi.layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/dataTable/datatables.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <input type="hidden" value="{{Session::get('pesanan')}}" id="pesanan">
        <div class="judul-tabel mb-3">
            <h5>Resep Walkin</h5>
        </div>
        <div class="col-md-12">
            <div class="form-row">
                <div class="col-md-7 col-sm-12">
                    <div class="card">
                        <div class="card-title" style="margin-top: 15px; margin-left: 15px; margin-bottom: 0">
                            <div class="input-group" style="width: 50%">
                                <input type="text" class="form-control" value="" placeholder="ID Resep" id="input">
                                <div class="input-group-append">
                                    <button class="btn input-group-text" id="search">Search</button>
                                </div>
                            </div>
                        </div><hr>
                        <div class="card-body">
                            <div class="resep"></div>
                            <div class="row" style="float: right">
                                <button class="btn btn-danger mr-3 btn-uppercase" id="hapus" disabled>Hapus</button>
                                <button class="btn btn-primary mr-3 btn-uppercase" id="proses" disabled>Proses</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div style="float: right">
                        <a href="{{ url('farmasi/walkin-reset') }}"><button class="btn btn-warning btn-rounded btn-uppercase">Reset</button></a>
                        <a href="{{ url('pesanan-online/online') }}"><button class="btn btn-secondary btn-rounded btn-uppercase">Pesanan Online</button></a>
                        <button class="btn btn-primary btn-rounded btn-uppercase" id="scan">Scan QRcode</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sound -->
@if(Session::get('audio') == "1")
<audio autoplay><source src="{{asset('assets/notification.mp3')}}" type="audio/mp3"></audio>
@endif

@endsection

@section('script')
    <script src="{{ asset('assets/gogi/vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/gogi/assets/js/examples/toast.js') }}"></script>
    <script>
        if(document.getElementById('pesanan').value == "1"){
            toastr.options = {
                    timeOut: 10000,
                    progressBar: true,
                    showMethod: "slideDown",
                    hideMethod: "slideUp",
                    showDuration: 200,
                    hideDuration: 200
                };
                toastr["info"]("Ada pesanan masuk.");
        }
    </script>
    <script>
        var input = document.getElementById('input');
        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("search").click();
            }
        });
    </script>
    <script>
        $(document).ready(function(){
            const menu = document.getElementById("walkin");
            menu.classList.add("active");

            // Datatable
            const walkinTable = document.getElementById("walkin-table");
            $(walkinTable).DataTable({
                "order": [[ 0, "desc" ]],
                "columnDefs": [
                    { "type": "any-number", "targets": 0 }
                ],
            });

            $('#scan').on('click', function(){
                $el = '<div class="data" id="P00001">'+
                        '<div class="row">'+
                            '<div class="col-md-2 col-sm-6">'+
                                '<h5>Rx</h5>'+
                            '</div>'+
                            '<div class="col-md-7 col-sm-6">'+
                                '<div class="form-group">'+
                                    '<input type="text" value="GLIMEPIRIDE DEXA 4MG" class="form-control" readonly>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<input type="text" value="1 - oo" class="form-control" readonly>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3 col-sm-6">'+
                                '<h6>Jumlah : 30</h6>'+
                            '</div>'+
                        '</div><hr>'+
                        '<div class="row">'+
                            '<div class="col-md-2 col-sm-6">'+
                                '<h5>Rx</h5>'+
                            '</div>'+
                            '<div class="col-md-7 col-sm-6">'+
                                '<div class="form-group">'+
                                    '<input type="text" value="ACARBOSE DAXA 100MG TAB 100S" class="form-control" readonly>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<input type="text" value="3 x 1" class="form-control" readonly>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3 col-sm-6">'+
                                '<h6>Jumlah : 18</h6>'+
                            '</div>'+
                        '</div><hr>'+
                        '</div>';
                
                $('.resep').append($el);
                document.getElementById('hapus').disabled = false;
                document.getElementById('proses').disabled = false;
            });

            $('#hapus').on('click', function(){
                $('.data').remove();
                document.getElementById('hapus').disabled = true;
                document.getElementById('proses').disabled = true;
            });

            $('#proses').on('click', function(){
                $id = $('.data').attr('id');
                $url = 'farmasi/copy-resep/'+$id;
                console.log($url);
                setTimeout(function(){ 
                    window.location = $url;
                }, 0);
            });

            

            $('#search').on('click', function(){
                $id = document.getElementById('input').value;
                
                if($id == "P00001"){
                    $el = '<div class="data" id="P00001">'+
                        '<div class="row">'+
                            '<div class="col-md-2 col-sm-6">'+
                                '<h5>Rx</h5>'+
                            '</div>'+
                            '<div class="col-md-7 col-sm-6">'+
                                '<div class="form-group">'+
                                    '<input type="text" value="GLIMEPIRIDE DEXA 4MG" class="form-control" readonly>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<input type="text" value="1 - oo" class="form-control" readonly>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3 col-sm-6">'+
                                '<h6>Jumlah : 30</h6>'+
                            '</div>'+
                        '</div><hr>'+
                        '<div class="row">'+
                            '<div class="col-md-2 col-sm-6">'+
                                '<h5>Rx</h5>'+
                            '</div>'+
                            '<div class="col-md-7 col-sm-6">'+
                                '<div class="form-group">'+
                                    '<input type="text" value="ACARBOSE DAXA 100MG TAB 100S" class="form-control" readonly>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<input type="text" value="3 x 1" class="form-control" readonly>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3 col-sm-6">'+
                                '<h6>Jumlah : 18</h6>'+
                            '</div>'+
                        '</div><hr>'+
                        '</div>';
                    
                    $('.resep').append($el);
                    document.getElementById('hapus').disabled = false;
                    document.getElementById('proses').disabled = false;  
                }
                else if($id == "P00002"){
                    $el = '<div class="data" id="P00002">'+
                        '<div class="row">'+
                            '<div class="col-md-2 col-sm-6">'+
                                '<h5>Rx</h5>'+
                            '</div>'+
                            '<div class="col-md-7 col-sm-6">'+
                                '<div class="form-group">'+
                                    '<input type="text" value="GLIMEPIRIDE DEXA 4MG" class="form-control" readonly>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<input type="text" value="1 - oo" class="form-control" readonly>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3 col-sm-6">'+
                                '<h6>Jumlah : 30</h6>'+
                            '</div>'+
                        '</div><hr>'+
                        '<div class="row">'+
                            '<div class="col-md-2 col-sm-6">'+
                                '<h5>Rx</h5>'+
                            '</div>'+
                            '<div class="col-md-7 col-sm-6">'+
                                '<div class="form-group">'+
                                    '<input type="text" value="METROMIN IKA 500MG TAB" class="form-control" readonly>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<input type="text" value="3 x 1" class="form-control" readonly>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3 col-sm-6">'+
                                '<h6>Jumlah : 21</h6>'+
                            '</div>'+
                        '</div><hr>'+
                        '<div class="row">'+
                            '<div class="col-md-2 col-sm-6">'+
                                '<h5>Rx</h5>'+
                            '</div>'+
                            '<div class="col-md-7 col-sm-6">'+
                                '<div class="form-group">'+
                                    '<input type="text" value="ACARBOSE DAXA 100MG TAB 100S" class="form-control" readonly>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<input type="text" value="3 x 1" class="form-control" readonly>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3 col-sm-6">'+
                                '<h6>Jumlah : 18</h6>'+
                            '</div>'+
                        '</div><hr>'+
                        '</div>';
                    
                    $('.resep').append($el);
                    document.getElementById('hapus').disabled = false;
                    document.getElementById('proses').disabled = false;  
                }
                else if($id == "P00003"){
                    $el = '<div class="data" id="P00003">'+
                        '<div class="row">'+
                            '<div class="col-md-2 col-sm-6">'+
                                '<h5>Rx</h5>'+
                            '</div>'+
                            '<div class="col-md-7 col-sm-6">'+
                                '<div class="form-group">'+
                                    '<input type="text" value="BRAXIDIN TAB" class="form-control" readonly>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<input type="text" value="3 x 1" class="form-control" readonly>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3 col-sm-6">'+
                                '<h6>Jumlah : 30</h6>'+
                            '</div>'+
                        '</div><hr>'+
                        '<div class="row">'+
                            '<div class="col-md-2 col-sm-6">'+
                                '<h5>Rx</h5>'+
                            '</div>'+
                            '<div class="col-md-7 col-sm-6">'+
                                '<div class="form-group">'+
                                    '<input type="text" value="PUMPITOR 20MG CAP" class="form-control" readonly>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<input type="text" value="2 x 1" class="form-control" readonly>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3 col-sm-6">'+
                                '<h6>Jumlah : 20</h6>'+
                            '</div>'+
                        '</div><hr>'+
                        '<div class="row">'+
                            '<div class="col-md-2 col-sm-6">'+
                                '<h5>Rx</h5>'+
                            '</div>'+
                            '<div class="col-md-7 col-sm-6">'+
                                '<div class="form-group">'+
                                    '<input type="text" value="EPISAN SYR 100 ML" class="form-control" readonly>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<input type="text" value="3 x 15 CC" class="form-control" readonly>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3 col-sm-6">'+
                                '<h6>Jumlah : 1</h6>'+
                            '</div>'+
                        '</div><hr>'+
                        '</div>';
                    
                    $('.resep').append($el);
                    document.getElementById('hapus').disabled = false;
                    document.getElementById('proses').disabled = false;  
                }
                else{
                    alert('ID Resep tidak ditemukan.');
                }
            });

        });
    </script>
    
@endsection