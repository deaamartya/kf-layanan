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
                        <h4 style="float: right">Harga : Rp. @php 
                                                                $random = [0, 1, 2];
                                                                $array = array_rand($random);
                                                                if($array == 0){
                                                                    echo 100000;
                                                                }
                                                                else if($array == 1){
                                                                    echo 150000;
                                                                }
                                                                else{
                                                                    echo 200000;
                                                                }
                                                                
                                                            @endphp
                        </h4>
                    </div><hr>
                    <div class="card-body">
                        @foreach(Session::get('data')['ISI_RESEP'] as $data)
                        <div class="row">
                            <div class="col-md-2 col-sm-6">
                                <h5>Rx</h5>
                            </div>
                            <div class="col-md-7 col-sm-6">
                                <div class="form-group">
                                    <input type="text" value="{{$data['OBAT']}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{$data['TAKARAN']}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <h6>Jumlah : {{$data['JUMLAH']}}</h6>
                            </div>
                        </div><hr>
                        @endforeach
                        <div class="row" style="float: right">
                            <a href="{{route('pesanan-online')}}"><button class="btn btn-light mr-3 btn-uppercase">Kembali</button>
                            @php
                                $data = Session::get('data');
                                $id = $data['ID_PESANAN'];
                            @endphp
                            @if($data['STATUS'] == "2")
                            <a href="{{url('ambil/'.$id)}}"><button class="btn btn-primary mr-3 btn-uppercase">Ready Ambil</button></a>
                            @else if($data['STATUS'] == "4")
                            <button class="btn btn-primary mr-3 btn-uppercase">Diambil</button>
                            @endif
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