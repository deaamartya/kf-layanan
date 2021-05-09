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
</div>
<div class="row justify-content-center align-items-center">
    <div class="col-12">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center align-items-center mb-2">
                            <div class="d-flex justify-content-center align-items-center rounded-circle circle-1 bg-light text-center" style="height: 75px; width:75px;">
                                <h2>1</h2>
                            </div>
                            <hr class="m-0 p-0 border line-1" style="width: 25px;">
                            <div class="d-flex justify-content-center align-items-center rounded-circle circle-2 bg-light text-center" style="height: 75px; width:75px;">
                                <h2>2</h2>
                            </div>
                            <hr class="m-0 p-0 border line-2" style="width: 25px;">
                            <div class="d-flex justify-content-center align-items-center rounded-circle circle-3 bg-light text-center" style="height: 75px; width:75px;">
                                <h2>3</h2>
                            </div>
                            <hr class="m-0 p-0 border line-3" style="width: 25px;">
                            <div class="d-flex justify-content-center align-items-center rounded-circle circle-4 bg-light text-center" style="height: 75px; width:75px;">
                                <h2>4</h2>
                            </div>
                            <hr class="m-0 p-0 border line-4" style="width: 25px;">
                            <div class="d-flex justify-content-center align-items-center rounded-circle circle-5 bg-light text-center" style="height: 75px; width:75px;">
                                <h2>5</h2>
                            </div>
                            <hr class="m-0 p-0 border line-5" style="width: 25px;">
                            <div class="d-flex justify-content-center align-items-center rounded-circle circle-6 bg-light text-center" style="height: 75px; width:75px;">
                                <h2>6</h2>
                            </div>
                            <hr class="m-0 p-0 border line-6" style="width: 25px;">
                            <div class="d-flex justify-content-center align-items-center rounded-circle circle-7 bg-light text-center" style="height: 75px; width:75px;">
                                <h2>7</h2>
                            </div>
                        </div>
                        <hr>
                        <h3 class="wizard-title mt-3" id="wizard-1-t">Pilih Apotek</h3>
                        <div class="card card-body border card-wizard mt-3" id="list-apotek">
                            <div class="row">
                                <div class="col-12" id="container-kota">
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
                                <div class="col-12 mt-3" id="list-apotek-tabel">
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
                                    <button class="btn btn-lg btn-success" id="next-1">Selanjutnya<i class="fa fa-angle-right ml-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <h3 class="wizard-title mt-3" id="wizard-2-t">Konfirmasi dari Apotek</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-2">
                            <div class="row">
                                <button id="next-tolak">Tolak (Simulasi)</button>
                                <button id="next-ok">OK (Simulasi)</button>
                            </div>
                            <div class="row">
                                <div class="col-12 align-items-center text-center">
                                    <img src="{{ asset('assets/img/hourglass.gif') }}" class="mb-5" height="80">
                                    <h4 class="mt-2">Mohon tunggu konfirmasi dari apotek</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-tolak">
                            <div class="row">
                                <a href="{{ url('pasien/resep-aktif') }}">
                                    <button>OK (Simulasi)</button>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-12 align-items-center text-center">
                                    <img src="{{ asset('assets/img/cancel.svg') }}" class="mb-5" height="80">
                                    <h4 class="mt-2">Mohon maaf, apotek tidak dapat memenuhi permintaan resep Anda</h4>
                                    <h5 class="font-weight-normal">Silahkan pilih cabang Apotek Kimia Farma lainnya.</h5>
                                </div>
                            </div>
                        </div>

                        <h3 class="wizard-title mt-3" id="wizard-3-t">Konfirmasi dari Apotek</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-3">
                            <div class="row">
                                <button id="next-3">Kalkulasi selesai (Simulasi)</button>
                            </div>
                            <div class="row">
                                <div class="col-12 align-items-center text-center">
                                    <img src="{{ asset('assets/img/check-circle.gif') }}" class="mb-5" height="80">
                                    <h4 class="mt-2">Yey, apotek bisa memenuhi resep anda!</h4>
                                    <h5 class="font-weight-normal">Mohon tunggu proses kalkulasi selesai.</h5>
                                </div>
                            </div>
                        </div>

                        <h3 class="wizard-title mt-3" id="wizard-4-t">Konfirmasi Pesanan</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-4">
                            <h5>Total Pembayaran</h5>
                            <hr>
                            <table>
                                <tr>
                                    <td>
                                        <h6 class="text-gray text-right">Harga Resep(Rp)</h6>
                                    </td>
                                    <td>
                                    <h6 class="text-right">350.000 </h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-orange btn-sm float-right" id="layanan-antar" data-toggle="modal" data-target="#modal-layanan"><i class="fa fa-plus mr-2"></i>Tambah Layanan Antar</button>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr rowspan="3"><td></td><td></td></tr>
                                <tr>
                                    <td>
                                        <h6 class="text-gray text-right">Biaya Kirim(Rp)</h6>
                                    </td>
                                    <td>
                                        <h6 class="text-right" id="biaya-kirim">0</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="text-gray text-right">Total(Rp)</h6>
                                    </td>
                                    <td>
                                        <h6 class="text-right" id="total">350.000</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-success btn-lg mt-3 float-right text-right" id="konfirmasi-pesanan">
                                            <i class="fa fa-shopping-cart mr-2"></i>Pesan
                                        </button>
                                    </td>
                                </tr>
                            </table>
                            
                        </div>

                        <h3 class="wizard-title mt-3" id="wizard-5-t">Pembayaran</h3>
                        <div class="card card-bod bordery mb-0 card-wizard" id="wizard-5">
                            <div class="row content-bayar">
                                <div class="col-12 text-center">
                                    <h6>Total Pembayaran</h6>
                                    <h2>Rp360.000</h2>
                                </div>
                            </div>
                            <div class="row mt-3 justify-content-center content-bayar">
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
                            <div class="row mt-5 mb-3 justify-content-center content-bayar">
                                <div class="col-6 text-center">
                                    <button class="btn btn-success btn-lg px-4" id="konfirmasi-pembayaran"><i class="fa fa-credit-card mr-2"></i>Bayar</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class='preloader-dokter' id="loader-pembayaran">
                                        <div class='preloader-icon-dokter'></div>
                                        <span>Proses Pembayaran...</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="wizard-title mt-3" id="wizard-6-t">Pengerjaan Resep</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-6">
                            <div class="row">
                                <button id="next-6">Simulasi Resep Siap</button>
                            </div>
                            <div class="row">
                                <div class="col-12 align-items-center text-center">
                                    <img src="{{ asset('assets/img/hourglass.gif') }}" class="mb-5" height="80">
                                    <h4 class="mt-2">Mohon tunggu</h4>
                                    <h5 class="font-weight-normal">Resep sedang diproses oleh apotek</h5>
                                    
                                </div>
                            </div>
                        </div>

                        <h3 class="wizard-title mt-3" id="wizard-7-t">Pengambilan Obat</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-7">
                            <div class="row">
                                <button id="simulasi-ambil">Simulasi Ambil Sendiri</button>
                                <button id="simulasi-antar">Simulasi Layanan Antar</button>
                                <button id="simulasi-selesai-ambil">Simulasi Obat telah diambil (Ambil Sendiri)</button>
                            </div>
                            <div id="ambil-sendiri">
                                <div class="row">
                                    <div class="col-12 align-items-center text-center">
                                        <img src="{{ asset('assets/img/check-circle.gif') }}" class="mb-5" height="80">
                                        <h4>Obat selesai diracik</h4>
                                        <h5 class="font-weight-normal">Silahkan diambil</h5>
                                    </div>
                                </div>
                            </div>
                            <div id="antar-obat">
                                <div class="row">
                                    <div class="col-12 align-items-center text-center">
                                        <img src="{{ asset('assets/img/check-circle.gif') }}" class="mb-5" height="80">
                                        <h4>Obat selesai diracik</h4>
                                        <h5 class="font-weight-normal">Sedang proses diantar ketempat anda</h5>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12 align-items-center text-center">
                                        <button class="btn btn-success btn-lg px-4 mt-2" id="obat-diterima">Konfirmasi Obat Telah Diterima</button>
                                    </div>
                                    <div class="col-12 text-center mt-5">
                                        <button class="btn btn-danger px-4 disabled" id="obat-belum-datang">Obat belum datang</button>
                                        <p class="text-muted" id="timer-1jam">01:00:00</small>
                                    </div>
                                </div>
                                <button id="simulasi-1jam">(Simulasi) Setelah 1 Jam</button>
                            </div>
                        </div>

                        <h3 class="wizard-title mt-3" id="wizard-8-t">Pesanan Selesai</h3>
                        <div class="card card-body border mb-0 card-wizard" id="wizard-8">
                            <div class="row">
                                <div class="col-12 align-items-center text-center">
                                    <img src="{{ asset('assets/img/check-circle.gif') }}" class="mb-5" height="80">
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
            $(".circle-1").removeClass('bg-light');
            $(".circle-1").addClass('bg-success');
            $(".circle-1").addClass('shadow');
        });
        $("#next-tolak").on('click',function(){
            hideSemua();
            $("#wizard-tolak").show();
            $("#wizard-2-t").show();
            $(".circle-2").removeClass('bg-light');
            $(".circle-2").addClass('bg-success');
            $(".circle-2").addClass('shadow');
            $(".line-1").addClass('border-success');
        });
        $("#next-ok").on('click',function(){
            hideSemua();
            $("#wizard-3").show();
            $("#wizard-3-t").show();
            $(".circle-2").removeClass('bg-light');
            $(".circle-2").addClass('bg-success');
            $(".circle-2").addClass('shadow');
            $(".line-1").addClass('border-success');
        });
        $("#next-3").on('click',function(){
            hideSemua();
            toastr.options = {
                timeOut: 10000,
                progressBar: true,
                showMethod: "slideDown",
                hideMethod: "slideUp",
                showDuration: 200,
                hideDuration: 200
            };
            toastr["success"]("Perlu layanan obat?");
            var audioElement = document.createElement('audio');
            audioElement.setAttribute('src', "{{ asset('assets/pasien/sound/bell.wav') }}");
            audioElement.play();
            $("#wizard-4").show();
            $("#wizard-4-t").show();
            $(".circle-3").removeClass('bg-light');
            $(".circle-3").addClass('bg-success');
            $(".circle-3").addClass('shadow');
            $(".line-2").addClass('border-success');
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
            $(".circle-4").removeClass('bg-light');
            $(".circle-4").addClass('bg-success');
            $(".circle-4").addClass('shadow');
            $(".line-3").addClass('border-success');
        });
        $("#loader-pembayaran").hide();
        $("#konfirmasi-antar").on('click',function(){
            $("#biaya-kirim").html("10.000");
            $("#total").html("360.000");
        });
        $("#konfirmasi-pembayaran").on('click',function(){
            $("#loader-pembayaran").show();
            $(".content-bayar").hide();
            setTimeout(function(){ 
                $("#loader-pembayaran").hide();
                $("#modal-pembayaran").modal('toggle');
                swal({
                    title: "Pembayaran berhasil!",
                    icon: "success",
                    // timer: 3000,
                });
                hideSemua();
                $("#wizard-6").show();
                $("#wizard-6-t").show();
                $(".circle-5").removeClass('bg-light');
                $(".circle-5").addClass('bg-success');
                $(".circle-5").addClass('shadow');
                $(".line-4").addClass('border-success');
            }, 5000);
            
        });
        $("#antar-obat").hide();
        $("#ambil-sendiri").hide();
        $("#next-6").on('click',function(){
            hideSemua();
            $("#wizard-7").show();
            $("#wizard-7-t").show();
            $(".circle-6").removeClass('bg-light');
            $(".circle-6").addClass('bg-success');
            $(".circle-6").addClass('shadow');
            $(".line-5").addClass('border-success');
        });
        $("#simulasi-ambil").on('click',function(){
            $("#ambil-sendiri").show();
            $("#antar-obat").hide();
        });
        $("#simulasi-antar").on('click',function(){
            $("#antar-obat").show();
            $("#ambil-sendiri").hide();
        });
        $("#simulasi-1jam").on('click',function(){
            $("#obat-belum-datang").removeClass('disabled');
            $("#timer-1jam").remove();
        });
        $("#obat-belum-datang").on('click',function(){
            toastr.options = {
                timeOut: 5000,
                progressBar: true,
                showMethod: "slideDown",
                hideMethod: "slideUp",
                showDuration: 200,
                hideDuration: 200
            };
            toastr["success"]("Apotek telah diingatkan, mohon tunggu konfirmasi dari Apotek");
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
                    $(".circle-7").removeClass('bg-light');
                    $(".circle-7").addClass('bg-success');
                    $(".circle-7").addClass('shadow');
                    $(".line-6").addClass('border-success');
                }
            });
        });
        $("#simulasi-selesai-ambil").on('click',function(){
            hideSemua();
            $("#wizard-8").show();
            $("#wizard-8-t").show();
            $(".circle-7").removeClass('bg-light');
            $(".circle-7").addClass('bg-success');
            $(".circle-7").addClass('shadow');
            $(".line-6").addClass('border-success');
        });
    </script>
@endsection