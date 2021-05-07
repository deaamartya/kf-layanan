@extends('farmasi.layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/dataTable/datatables.min.css') }}">
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
                        <input type="text" class="form-control" placeholder="ID Resep"  required="">

                        <div class="input-group-append">
                            <button class="btn input-group-text">Search</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div style="float: right">
                        <a href="{{ url('farmasi/walkin-reset') }}"><button class="btn btn-warning btn-rounded btn-uppercase">Reset</button>
                        <a href="{{ url('farmasi/walkin-pesan') }}"><button class="btn btn-secondary btn-rounded btn-uppercase">Pesanan Online</button>
                        <button class="btn btn-primary btn-rounded btn-uppercase" id="scan">Scan QRcode</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-sm-6">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 col-sm-6">
                        <h5>Rx</h5>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <div class="form-group">
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h6>Jumlah : </h6>
                    </div>
                </div><hr>
                <div class="row" style="float: right">
                    <button class="btn btn-danger mr-3 btn-uppercase">Hapus</button>
                    <button class="btn btn-primary mr-3 btn-uppercase">Proses</button>
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
        });
    </script>
@endsection