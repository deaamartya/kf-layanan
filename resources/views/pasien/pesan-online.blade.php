@extends('pasien.layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/prism/prism.css') }}" type="text/css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/select2/css/select2.min.css') }}" type="text/css">
    <!-- Form Wizard -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/form-wizard/jquery.steps.css')}}" type="text/css">
@endsection

@section('content')
<div class="page-header d-md-flex justify-content-between">
    <div>
        <h3>Resep Aktif</h3>
    </div>
    <div class="mt-md-0">
        <button type="button" class="btn btn-primary ml-0 ml-md-2 mt-2 mt-md-0" id="terimaresep">Simulasi Terima Resep</button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12" id="tidak-ada-resep">
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="wizard-example">
                                            <h3>List Apotek KF</h3>
                                            <section id="list-apotek">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <select class="select2-example">
                                                            <option>Pilih Kota/Kabupaten</option>
                                                            @php $kota=['Kabupaten Bangkalan','Kabupaten Banyuwangi','Kabupaten Blitar','Kabupaten Bojonegoro','Kabupaten Bondowoso','Kabupaten Gresik','Kabupaten Jember','Kabupaten Jombang','Kabupaten Kediri','Kabupaten Lamongan','Kabupaten Lumajang','Kabupaten Madiun','Kabupaten Magetan','Kabupaten Malang','Kabupaten Mojokerto','Kabupaten Nganjuk','Kabupaten Ngawi','Kabupaten Pacitan','Kabupaten Pamekasan','Kabupaten Pasuruan','Kabupaten Ponorogo','Kabupaten Probolinggo','Kabupaten Sampang','Kabupaten Sidoarjo','Kabupaten Situbondo','Kabupaten Sumenep','Kabupaten Trenggalek','Kabupaten Tuban','Kabupaten Tulungagung','Kota Batu','Kota Blitar','Kota Kediri','Kota Madiun','Kota Malang','Kota Mojokerto','Kota Pasuruan','Kota Probolinggo','Kota Surabaya'] @endphp
                                                            @foreach($kota as $k)
                                                            <option value="{{ $k }}">{{ $k }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        
                                                    </div>
                                                </div>
                                            </section>
                                            <h3>Billing Information</h3>
                                            <section class="card card-body border mb-0">
                                                <h5>Billing Information</h5>
                                                <p>Wonderful transition effects.</p>
                                            </section>
                                            <h3>Payment Details</h3>
                                            <section class="card card-body border mb-0">
                                                <h5>Payment Details</h5>
                                                <p>The next and previous buttons help you to navigate through your content.</p>
                                            </section>
                                            <h3>Payment Details</h3>
                                            <section class="card card-body border mb-0">
                                                <h5>Payment Details</h5>
                                                <p>The next and previous buttons help you to navigate through your content.</p>
                                            </section>
                                            <h3>Payment Details</h3>
                                            <section class="card card-body border mb-0">
                                                <h5>Payment Details</h5>
                                                <p>The next and previous buttons help you to navigate through your content.</p>
                                            </section>
                                            <h3>Payment Details</h3>
                                            <section class="card card-body border mb-0">
                                                <h5>Payment Details</h5>
                                                <p>The next and previous buttons help you to navigate through your content.</p>
                                            </section>
                                            <h3>Payment Details</h3>
                                            <section class="card card-body border mb-0">
                                                <h5>Payment Details</h5>
                                                <p>The next and previous buttons help you to navigate through your content.</p>
                                            </section>
                                            <h3>Payment Details</h3>
                                            <section class="card card-body border mb-0">
                                                <h5>Payment Details</h5>
                                                <p>The next and previous buttons help you to navigate through your content.</p>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Informasi Layanan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <h4>Detail Kunjungan</h4>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-12">
                                <h6>
                                    <i class="fa fa-stethoscope mr-3"></i>5 Mei 2021 15.00 WIB
                                </h6>
                                <h6>
                                    <i class="fa fa-hospital-o mr-3"></i>Jember - Jl. Gajah Mada No. 171
                                </h6>
                                <h6>
                                    <i class="fa fa-money mr-3"></i>Rp200.000
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h4>Dokter</h4>
                        <hr>
                        <div class="row mb-5 align-items-center">
                            <div class="col-3">
                                <a href="#" title="dokter">
                                    <img src="{{ asset('assets/img/foto-dokter.jpg') }}" class="img-dokter rounded-circle" alt="Vase" height="80" width="80">
                                </a>
                            </div>
                            <div class="col-9 align-content-center">
                                <h5>dr. Amelia Abdullah, Sp.OG</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Resep</h4>
                <hr>
                <div class="row align-items-center">
                    <div class="col-5">
                        <img src="{{ asset('assets/img/qr-code-resep.png') }}" height="200">
                    </div>
                    <div class="col-7">
                        <h6 class="text-gray">
                            Apotek Kimia Farma Tempat Pengambilan Resep
                        </h6>
                        <h6>
                            Jember - Jl. Gajah Mada No. 171
                        </h6>
                    </div>
                    <div class="col-12">
                        <a href="#">
                            <button class="btn btn-primary">Simulasi Scan</button>
                        </a>
                    </div>
                </div>
                
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
    <!-- Form Wizard -->
    <script src="{{ asset('assets/gogi/vendors/form-wizard/jquery.steps.min.js')}}"></script>

    <script>
        $('#wizard-example').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            autoFocus: true,
            titleTemplate: '<span class="wizard-index">#index#</span> #title#'
        });
        $('.select2-example').select2({
            placeholder: 'Pilih Kota'
        });
        $("#list-resep").hide();
        $("#loader-dokter").hide();
        $("#terimaresep").on('click',function(){
            $("#tidak-ada-resep").hide();
            $("#loader-dokter").show();
            setTimeout(function(){ 
                $("#loader-dokter").hide();
                $("#list-resep").show();
            }, 500);
        });
        

    </script>
@endsection