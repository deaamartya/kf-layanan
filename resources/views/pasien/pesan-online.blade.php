@extends('pasien.layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/prism/prism.css') }}" type="text/css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/select2/css/select2.min.css') }}" type="text/css">
    <!-- Form Wizard -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/form-wizard/jquery.steps.css')}}" type="text/css">
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/dataTable/datatables.min.css')}}" type="text/css">
@endsection

@section('content')
<div class="page-header d-md-flex justify-content-between">
    <div>
        <h3>Pesan Online</h3>
    </div>
    <div class="mt-md-0">
        <button type="button" class="btn btn-primary ml-0 ml-md-2 mt-2 mt-md-0" id="terimaresep">Simulasi Terima Resep</button>
    </div>
</div>
<div class="row justify-content-center align-items-center">
    <div class="col-12">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h3 class="wizard-title" id="wizard-1-t">Pilih Apotek</h3>
                        <div class="card-wizard" id="list-apotek">
                            <div class="row">
                                <div class="col-12" id="container-kota">
                                    <h4>Pilih Kota</h4>
                                    <hr>
                                    <select class="select2-example" id="kota">
                                        <option>Pilih Kota/Kabupaten</option>
                                        @php $kota=['Kabupaten Bangkalan','Kabupaten Banyuwangi','Kabupaten Blitar','Kabupaten Bojonegoro','Kabupaten Bondowoso','Kabupaten Gresik','Kabupaten Jember','Kabupaten Jombang','Kabupaten Kediri','Kabupaten Lamongan','Kabupaten Lumajang','Kabupaten Madiun','Kabupaten Magetan','Kabupaten Malang','Kabupaten Mojokerto','Kabupaten Nganjuk','Kabupaten Ngawi','Kabupaten Pacitan','Kabupaten Pamekasan','Kabupaten Pasuruan','Kabupaten Ponorogo','Kabupaten Probolinggo','Kabupaten Sampang','Kabupaten Sidoarjo','Kabupaten Situbondo','Kabupaten Sumenep','Kabupaten Trenggalek','Kabupaten Tuban','Kabupaten Tulungagung','Kota Batu','Kota Blitar','Kota Kediri','Kota Madiun','Kota Malang','Kota Mojokerto','Kota Pasuruan','Kota Probolinggo','Kota Surabaya'] @endphp
                                        @foreach($kota as $k)
                                        <option value="{{ $k }}">{{ $k }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 mt-3" id="loader-apotek">
                                    <div class='preloader-dokter'>
                                        <div class='preloader-icon-dokter'></div>
                                        <span>Mencari apotek...</span>
                                    </div>
                                </div>
                                <div class="col-12 mt-5" id="list-apotek-tabel">
                                    <h4>Pilih Apotek</h4>
                                    <hr>
                                    <table id="myTable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No Telp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="data-1" style="cursor: pointer">
                                                <td>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apotek KF Surabaya Bratang</td>
                                                <td>Jl. Bratang Gede No. 100A</td>
                                                <td>031 - 5016713</td>
                                            </tr>
                                            <tr id="data-2" style="cursor: pointer">
                                                <td>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                            <label class="custom-control-label" for="customCheck2"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Apotek KF Surabaya Kendangsari</td>
                                                <td>Jl. Raya Kendangsari Blk.J/7</td>
                                                <td>031 - 8414215</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 mt-5 text-center">
                                    <button class="btn btn-lg btn-success" id="next-1">Konfirmasi Pilihan</button>
                                </div>
                            </div>
                        </div>

                        <h3 class="wizard-title" id="wizard-2-t">Konfirmasi dari Apotek</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-2">
                            <h4>Mohon tunggu konfirmasi dari Apotek</h4>
                            <button class="btn btn-lg btn-danger my-3" id="next-tolak">Tolak (Simulasi)</button>
                            <button class="btn btn-lg btn-success" id="next-ok">OK (Simulasi)</button>
                        </div>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-tolak">
                            <h4>Mohon maaf apotek tidak dapat memenuhi permintaan resep anda. Silahkan pilih cabang Apotek kimia farma lainnya</h4>
                            <a href="{{ url('pasien/resep-aktif') }}">
                                <button class="btn btn-lg btn-success">OK (Simulasi)</button>
                            </a>
                        </div>

                        <h3 class="wizard-title" id="wizard-3-t">Konfirmasi dari Apotek</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-3">
                            <h5>Yey, apotek bisa memenuhi resep anda. Mohon tunggu sedang proses kalkulas</h5>
                            <button class="btn btn-lg btn-success" id="next-3">Next</button>
                        </div>

                        <h3 class="wizard-title" id="wizard-4-t">Konfirmasi Pesanan</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-4">
                            <h5>Total Pembayaran</h5>
                            <hr>
                            <table>
                                <tr>
                                    <td>
                                        <h6 class="text-gray">Harga Resep</h6>
                                    </td>
                                    <td>
                                    <h6>Rp350.000 </h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button class="btn btn-orange btn-sm" id="layanan-antar" data-toggle="modal" data-target="#modal-layanan">Tambah Layanan Antar</button>
                                    </td>
                                </tr>
                                <tr rowspan="3"><td></td><td></td></tr>
                                <tr>
                                    <td>
                                        <h6 class="text-gray">Biaya Kirim</h6>
                                    </td>
                                    <td>
                                        <h6 id="biaya-kirim">Rp0</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="text-gray">Total</h6>
                                    </td>
                                    <td>
                                        <h6 id="total">Rp350.000</h6>
                                    </td>
                                </tr>
                            </table>
                            <button class="btn btn-success btn-lg mt-3" id="konfirmasi-pesanan">Konfirmasi Pesanan</button>
                        </div>

                        <h3 class="wizard-title" id="wizard-5-t">Pembayaran</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-5">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h6>Total Pembayaran</h6>
                                    <h2>Rp460.000</h2>
                                </div>
                            </div>
                            <div class="row mt-3 justify-content-center">
                                <div class="col-6">
                                    <select class="select2-example">
                                        <option>Pilih Metode Pembayaran</option>
                                        @php $bayar=["Transfer","OVO","ShopeePay","Gopay"] @endphp
                                        @foreach($bayar as $k)
                                        <option value="{{ $k }}">{{ $k }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-5 mb-3 justify-content-center">
                                <div class="col-6 text-center">
                                    <button class="btn btn-success btn-lg px-4" id="konfirmasi-pembayaran">Konfirmasi Pembayaran</button>
                                </div>
                            </div>
                        </div>

                        <h3 class="wizard-title" id="wizard-6-t">Pembayaran</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-6">
                            <h5>Pembayaran berhasil!</h5>
                            <p>Resep sedang dikerjakan.</p>
                            <button class="btn btn-success btn-lg px-4" id="next-6">Simulasi Resep Siap</button>
                        </div>

                        <h3 class="wizard-title" id="wizard-7-t">Pengambilan Obat</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-7">
                            <button class="btn btn-success btn-lg px-4" id="simulasi-ambil">Simulasi Ambil Sendiri</button>
                            <button class="btn btn-success btn-lg px-4 mt-2" id="simulasi-antar">Simulasi Layanan Antar</button>
                            <div class="hide" id="ambil-sendiri">
                                <h5>Obat selesai diracik, silahkan diambil</h5>
                            </div>
                            <div class="hide" id="antar-obat">
                                <h5>Obat selesai diracik dan sedang proses diantar ketempat anda</h5>
                                <button class="btn btn-success btn-lg px-4 mt-2" id="obat-diterima">Konfirmasi Obat Telah Diterima</button>
                                <button class="btn btn-success btn-lg px-4 mt-2 disabled" id="obat-belum-datang">Obat belum datang</button>
                                <p class="text-muted">01:00:00</small>
                                <button class="btn btn-success btn-lg px-4 mt-2 disabled" id="simulasi-1jam">(Simulasi) Setelah 1 Jam</button>
                            </div>
                        </div>

                        <h3 class="wizard-title" id="wizard-8-t">Pesanan Selesai</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-8">
                            <h5>Terimakasih atas kepercayaan anda</h5>
                            <p>Layanan resep telah terselesaikan pada 8 Mei 18:21WIB</p>
                            <a href="{{ url('pasien') }}">
                                <button class="btn btn-success btn-lg">OK</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="modal-layanan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Tambah Layanan Antar</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <table id="myTable2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Biaya (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="layanan-1" style="cursor: pointer">
                            <td>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check1">
                                        <label class="custom-control-label" for="check1"></label>
                                    </div>
                                </div>
                            </td>
                            <td>Ambil di outlet</td>
                            <td>0</td>
                        </tr>
                        <tr id="layanan-2" style="cursor: pointer">
                            <td>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check2">
                                        <label class="custom-control-label" for="check2"></label>
                                    </div>
                                </div>
                            </td>
                            <td>Gojek</td>
                            <td>10.000</td>
                        </tr>
                        <tr id="layanan-3" style="cursor: pointer">
                            <td>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check3">
                                        <label class="custom-control-label" for="check3"></label>
                                    </div>
                                </div>
                            </td>
                            <td>Grab</td>
                            <td>11.000</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <button class="btn btn-primary" data-dismiss="modal" id="konfirmasi-antar">Konfirmasi</button>
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
    <!-- Datatable -->
    <script src="{{ asset('assets/gogi/vendors/dataTable/datatables.min.js')}}"></script>
    <script>
        $('.select2-example').select2({
            placeholder: 'Pilih Kota'
        });
        $("#loader-apotek").hide();
        $("#list-apotek-tabel").hide();
        $("#kota").on('change',function(){
            $("#kota").hide();
            $("#loader-apotek").show();
            $("#list-apotek-tabel").hide();
            setTimeout(function(){ 
                $("#loader-apotek").hide();
                $("#list-apotek-tabel").show();
                $(".custom-checkbox input").each(function(){
                    $(this).prop('checked',false);
                });
            }, 500);
        });
        $('#myTable').DataTable();
        $("#myTable tbody tr").on('click',function(){
            var id = $(this).attr('id').substr(5);
            $(".custom-checkbox input").each(function(){
                $(this).prop('checked',false);
            });
            $("#customCheck"+id).prop('checked',true);
        });
        function hideSemua(){
            $(".card-wizard").each(function(){
                $(this).hide();
            });
            $(".wizard-title").each(function(){
                $(this).hide();
            });
        }
        hideSemua();
        $("#wizard-1-t").show();
        $("#list-apotek").show();
        $("#next-1").on('click',function(){
            hideSemua();
            $("#wizard-2").show();
            $("#wizard-2-t").show();
        });
        $("#next-tolak").on('click',function(){
            hideSemua();
            $("#wizard-tolak").show();
            $("#wizard-2-t").show();
        });
        $("#next-ok").on('click',function(){
            hideSemua();
            $("#wizard-3").show();
            $("#wizard-3-t").show();
        });
        $("#next-3").on('click',function(){
            hideSemua();
            $("#wizard-4").show();
            $("#wizard-4-t").show();
        });
        $("#myTable2 tbody tr").on('click',function(){
            var id = $(this).attr('id').substr(8);
            $(".custom-checkbox input").each(function(){
                $(this).prop('checked',false);
            });
            $("#check"+id).prop('checked',true);
        });
        $("#konfirmasi-pesanan").on('click',function(){
            hideSemua();
            $("#wizard-5").show();
            $("#wizard-5-t").show();
        });
        $("#konfirmasi-antar").on('click',function(){
            $("#biaya-kirim").html("10.000");
            $("#total").html("360.000");
        });
        $("#konfirmasi-pembayaran").on('click',function(){
            hideSemua();
            $("#wizard-6").show();
            $("#wizard-6-t").show();
        });
        $("#antar-obat").hide();
        $("#ambil-sendiri").hide();
        $("#next-6").on('click',function(){
            hideSemua();
            $("#wizard-7").show();
            $("#wizard-7-t").show();
        });
        $("#simulasi-ambil").on('click',function(){
            $("#ambil-sendiri").show();
            $("#antar-obat").hide();
        });
        $("#simulasi-antar").on('click',function(){
            $("#antar-obat").show();
            $("#ambil-sendiri").hide();
        });
        $("#obat-diterima").on('click',function(){
            swal({
                title: "Konfirmasi Obat Diterima",
                text: "Apakah anda yakin obat telah diterima?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    hideSemua();
                    $("#wizard-8").show();
                    $("#wizard-8-t").show();
                }
            });
        });
    </script>
@endsection