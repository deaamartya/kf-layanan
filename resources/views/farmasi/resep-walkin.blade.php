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
                        <button class="btn btn-warning btn-rounded btn-uppercase">Reset</button>
                        <button class="btn btn-secondary btn-rounded btn-uppercase">Pesanan Online</button>
                        <button class="btn btn-primary btn-rounded btn-uppercase" data-toggle="modal" data-target="#modal-qrcode">Scan QRcode</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-responsive-stack">
                        <thead class="thead-dark">
                            <th scope="col">Obat</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jumlah</th>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>Pinicilin</td>
                                <td>Ada</td>
                                <td>10</td>
                            </tr>
                            
                        </tbody>
                    </table>
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