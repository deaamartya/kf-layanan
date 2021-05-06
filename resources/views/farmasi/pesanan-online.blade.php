@extends('farmasi.layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/dataTable/datatables.min.css') }}">
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="judul-tabel mb-3">
            <h5>Pesanan Online</h5>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="pesanan-table" class="table table-bordered table-responsive-stack">
                        <thead class="thead-dark">
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            
                        </tbody>
                    </table>
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