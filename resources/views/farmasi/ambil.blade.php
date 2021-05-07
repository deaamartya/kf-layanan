@extends('farmasi.layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/dataTable/datatables.min.css') }}">
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="judul-tabel mb-3">
            <h5>Obat Diambil Di Outlet</h5>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div style="margin-top: 15px; margin-right: 15px">
                        <h4 style="float: right">Harga : Rp. 100000</h4>
                    </div><hr>
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
                            <button class="btn btn-light mr-3 btn-uppercase">Kembali</button>
                            <button class="btn btn-primary mr-3 btn-uppercase">Ready Ambil</button>
                            <button class="btn btn-primary mr-3 btn-uppercase">Diambil</button>
                        </div>
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

            // Datatable
            const pesananTable = document.getElementById("pesanan-table");
            $(pesananTable).DataTable({
                "order": [[ 0, "desc" ]],
                "columnDefs": [
                    { "type": "any-number", "targets": 0 }
                ],
            });
        });
    </script>
@endsection