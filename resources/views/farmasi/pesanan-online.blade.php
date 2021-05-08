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
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('farmasi/pesanan-reset')}}"><button class="btn btn-warning btn-rounded btn-uppercase">Reset</button></a>
                <a href="{{url('pesanan-online/online')}}"><button class="btn btn-secondary btn-rounded btn-uppercase">Pesanan Online</button></a>
                <a href="{{url('konfirm-ambil')}}"><button class="btn btn-secondary btn-rounded btn-uppercase">Konfirm Ambil</button></a>
                <button class="btn btn-secondary btn-rounded btn-uppercase">Konfirm Selesai</button>
                <button class="btn btn-secondary btn-rounded btn-uppercase">Antar Selesai</button>
            </div>
        </div></br>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div style="margin-top: 15px; margin-left: 15px">
                        <h4>Tabel Pesanan Online</h4>
                    </div><hr>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="pesanan-table" class="table table-bordered table-responsive-stack">
                                <thead class="thead-dark">
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Status</th>
                                </thead>
                                <tbody>
                                    @foreach(Session::get('online') as $online)
                                    
                                    <tr style="cursor: pointer" class="select" id="{{$online['ID_PESANAN']}}">
                                        <td>{{$online['NAMA_PASIEN']}}</td>
                                        @if($online['STATUS'] == "-1")
                                        <td class="text-danger">TOLAK</td>
                                        @elseif($online['STATUS'] == "0")
                                        <td>MENUNGGU KONFIRMASI</td>
                                        @elseif($online['STATUS'] == "1")
                                        <td>TUNGGU KONFIRMASI PX</td>
                                        @elseif($online['STATUS'] == "2")
                                        <td>OK AMBIL</td>
                                        @elseif($online['STATUS'] == "3")
                                        <td>OK KIRIM</td>
                                        @elseif($online['STATUS'] == "4")
                                        <td>READY AMBIL</td>
                                        @elseif($online['STATUS'] == "5")
                                        <td>READY KIRIM</td>
                                        @elseif($online['STATUS'] == "6")
                                        <td>ANTAR</td>
                                        @elseif($online['STATUS'] == "7")
                                        <td>DELIVERED</td>
                                        @endif
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
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

            // Select Pesanan
            $('.select').on('click', function(){
                $id = $(this).attr('id');
                $url = 'farmasi/pesanan/'+$id;
                console.log($url);
                setTimeout(function(){ 
                    window.location = $url;
                }, 0);
            });
        });
    </script>
@endsection