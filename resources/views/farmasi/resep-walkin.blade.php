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
        };
    </style>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="judul-tabel mb-3">
            <h5>Resep Walkin</h5>
        </div>
        <div class="col-md-12">
            <div class="form-row">
                <div class="col-md-6 mb-3 col-sm-12">
                    <div class="input-group" style="width: 50%">
                        <input type="text" class="form-control" value="" placeholder="ID Resep" id="input">

                        <div class="input-group-append">
                            <button class="btn input-group-text" id="search">Search</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div style="float: right">
                        <a href="{{ url('farmasi/walkin-reset') }}"><button class="btn btn-warning btn-rounded btn-uppercase">Reset</button></a>
                        <a href="{{ url('pesanan-online/online') }}"><button class="btn btn-secondary btn-rounded btn-uppercase">Pesanan Online</button></a>
                        <button class="btn btn-primary btn-rounded btn-uppercase" id="scan">Scan QRcode</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-sm-6">
            <div class="card-body">
                <div class="resep"></div>
                <div class="row" style="float: right">
                    <button class="btn btn-danger mr-3 btn-uppercase" id="hapus" disabled>Hapus</button>
                    <button class="btn btn-primary mr-3 btn-uppercase" id="proses" disabled>Proses</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
{{-- Start QRcode Modal --}}
<div class="modal fade" id="modal-qrcode" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h5 class="modal-title">Scan QRcode</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle text-danger"></i>
                </button> -->
            </div>
            <div class="modal-body">
                <h5 align="center">SCANNER</h5><hr>
                <div class="form-group">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-google" data-dismiss="modal">TUTUP</button>
                    <!-- <button type="submit" class="btn btn-linkedin">SIMPAN</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End of QRcode Modal --}}

@section('script')
    <script src="{{ asset('assets/gogi/vendors/dataTable/datatables.min.js') }}"></script>
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