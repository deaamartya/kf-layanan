@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/prism/prism.css') }}" type="text/css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/select2/css/select2.min.css') }}" type="text/css">
    <style>
        @media screen and (min-width: 767px) {
        .custom-border-left
            {
                border-left: 1px solid #dee2e6 !important;
            }
        }
    </style>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h3>Cari Klinik</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Filter Klinik</h6>
                        <div class="row">
                            <div class="col-md-3 col-12 mb-3">
                                <select class="select2-example">
                                    <option>Pilih Kota/Kabupaten</option>
                                    @php $kota=['Kabupaten Bangkalan','Kabupaten Banyuwangi','Kabupaten Blitar','Kabupaten Bojonegoro','Kabupaten Bondowoso','Kabupaten Gresik','Kabupaten Jember','Kabupaten Jombang','Kabupaten Kediri','Kabupaten Lamongan','Kabupaten Lumajang','Kabupaten Madiun','Kabupaten Magetan','Kabupaten Malang','Kabupaten Mojokerto','Kabupaten Nganjuk','Kabupaten Ngawi','Kabupaten Pacitan','Kabupaten Pamekasan','Kabupaten Pasuruan','Kabupaten Ponorogo','Kabupaten Probolinggo','Kabupaten Sampang','Kabupaten Sidoarjo','Kabupaten Situbondo','Kabupaten Sumenep','Kabupaten Trenggalek','Kabupaten Tuban','Kabupaten Tulungagung','Kota Batu','Kota Blitar','Kota Kediri','Kota Madiun','Kota Malang','Kota Mojokerto','Kota Pasuruan','Kota Probolinggo','Kota Surabaya'] @endphp
                                    @foreach($kota as $k)
                                    <option value="{{ $k }}">{{ $k }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 col-12 mb-3">
                                <select class="custom-select custom-select-sm">
                                    @php $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"]; @endphp
                                    <option selected>Pilih Hari</option>
                                    @foreach($hari as $h)
                                    <option value="{{$h}}">{{$h}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2 col-12 mb-3">
                                <select class="custom-select custom-select-sm">
                                    @php $jam_awal = ["08.00", "09.00", "10.00", "11.00", "12.00", "13.00", "14.00"]; @endphp
                                    <option selected>Pilih Jam Awal</option>
                                    @foreach($jam_awal as $a)
                                    <option value="{{ $a }}">{{ $a }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2 col-12 mb-3">
                                <select class="custom-select custom-select-sm">
                                    @php $jam_akhir = ["08.30", "09.30", "10.30", "11.30", "12.30", "13.30", "14.30"]; @endphp
                                    <option selected>Pilih Jam Akhir</option>
                                    @foreach($jam_akhir as $b)
                                    <option value="{{ $b }}">{{ $b }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2 col-12">
                                <button class="btn btn-primary btn" id="terapkan">Terapkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12" id="list-dokter">
                        @php $nama_klinik = ["Kimia Farma A","Kimia Farma B","Kimia Farma C","Kimia Farma D","Kimia Farma E"];
                        @endphp
                        @foreach ($nama_klinik as $n)
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <img src="{{ asset('assets/img/foto-dokter.jpg') }}" class="img-dokter rounded-circle" alt="Vase" height="100" width="100">
                                    </div>
                                    <div class="col-md-7 col-12 mt-3 mt-md-0">
                                        <h5>{{ $n }}</h5>
                                        <h6 class="text-gray">
                                            <i class="fa fa-stethoscope mr-2"></i>Poli Umum
                                        </h6>
                                        <h6 class="text-gray">
                                            <i class="fa fa-hospital-o mr-2"></i>Jember - Jl. Gajah Mada No. 171
                                        </h6>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="row pl-1 mb-md-3 custom-border-left my-md-0 my-2">
                                            <div class="col my-md-0 my-2">
                                                <h6 class="text-gray">Ulasan Klinik</h6>
                                                <div class="row pl-3 mb-0 pb-0">
                                                    <h5 class="text-primary mr-2">
                                                        <i class="fa fa-thumbs-up mr-2"></i>98%
                                                    </h5>
                                                    <p class="text-gray">(95)</p>
                                                </div>
                                                <h6 class="text-gray">Jasa Konsultasi dari</h6>
                                                <h4 class="text-orange">Rp50.000</h4>
                                            </div>
                                        </div>
                                        <div class="row mr-2 ml-3 ml-md-0">
                                            <button class="btn btn-orange btn-block" data-toggle="modal"
                                            data-target=".bd-example-modal-lg">Reservasi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-12">
                        <div class='preloader-dokter' id="loader-dokter">
                            <div class='preloader-icon-dokter'></div>
                            <span>Mencari dokter...</span>
                        </div>
                    </div>
                    <div class="col-12" id="list-dokter-2">
                        @for ($i=0;$i<2;$i++)
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <img src="{{ asset('assets/img/foto-dokter.jpg') }}" class="img-dokter rounded-circle" alt="Vase" height="100" width="100">
                                    </div>
                                    <div class="col-md-7 col-12 mt-3 mt-md-0">
                                        <h5>{{ $nama_klinik[$i] }}</h5>
                                        <h6 class="text-gray">
                                            <i class="fa fa-stethoscope mr-2"></i>Poli Umum
                                        </h6>
                                        <h6 class="text-gray">
                                            <i class="fa fa-hospital-o mr-2"></i>Jember - Jl. Gajah Mada No. 171
                                        </h6>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="row pl-1 mb-md-3 custom-border-left my-md-0 my-2">
                                            <div class="col my-md-0 my-2">
                                                <h6 class="text-gray">Ulasan Klinik</h6>
                                                <div class="row pl-3 mb-0 pb-0">
                                                    <h5 class="text-primary mr-2">
                                                        <i class="fa fa-thumbs-up mr-2"></i>98%
                                                    </h5>
                                                    <p class="text-gray">(95)</p>
                                                </div>
                                                <h6 class="text-gray">Jasa Konsultasi dari</h6>
                                                <h4 class="text-orange">Rp50.000</h4>
                                            </div>
                                        </div>
                                        <div class="row mr-2 ml-3 ml-md-0">
                                            <button class="btn btn-orange btn-block" data-toggle="modal"
                                            data-target=".bd-example-modal-lg">Reservasi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                <nav aria-label="..." class="mb-4">
                    <ul class="pagination pagination-rounded justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <i class="ti-angle-left"></i>
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="ti-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Reservasi Konsultasi</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-5">
                    <div class="col-md-4 col-12">
                        <img src="{{ asset('assets/img/foto-dokter.jpg') }}" class="img-dokter rounded-circle" alt="Vase" height="200" width="200">
                    </div>
                    <div class="col mt-md-0 mt-2">
                        <h5>{{ $nama_klinik[0] }}</h5>
                        <h6 class="text-gray">
                            <i class="fa fa-stethoscope mr-2"></i>Poli Umum
                        </h6>
                        <h6 class="text-gray">
                            <i class="fa fa-hospital-o mr-2"></i>Jember - Jl. Gajah Mada No. 171
                        </h6>
                        <hr>
                        <h6  class="text-gray">Jam Pelayanan</h6>
                        <table width="100%">
                            <tr>
                                <td>Senin</td>
                                <td>07.00 - 20.00</td>
                            </tr>
                            <tr>
                                <td>Selasa</td>
                                <td>07.00 - 20.00</td>
                            </tr>
                            <tr>
                                <td>Rabu</td>
                                <td>07.00 - 20.00</td>
                            </tr>
                            <tr>
                                <td>Kamis</td>
                                <td>07.00 - 20.00</td>
                            </tr>
                            <tr>
                                <td>Jumat</td>
                                <td>07.00 - 20.00</td>
                            </tr>
                            <tr>
                                <td>Sabtu</td>
                                <td>07.00 - 20.00</td>
                            </tr>
                            <tr>
                                <td>Minggu</td>
                                <td>07.00 - 20.00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <a href="{{ url('login') }}">
                    <button class="btn btn-orange btn-block btn-lg">Reservasi</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ asset('assets/gogi/vendors/prism/prism.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('assets/gogi/vendors/select2/js/select2.min.js') }}"></script>
    <script>
        $("#loader-dokter").hide();
        $("#list-dokter-2").hide();
        $('.select2-example').select2({
            placeholder: 'Pilih Kota'
        });
        $('#terapkan').on('click',function(){
            $("#list-dokter").hide();
            $("#loader-dokter").show();
            setTimeout(function(){ 
                $("#loader-dokter").hide();
                $("#list-dokter-2").show();
            }, 2000);
        });
    </script>
@endsection