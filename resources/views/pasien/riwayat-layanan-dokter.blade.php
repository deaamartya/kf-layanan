@extends('pasien.layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/prism/prism.css') }}" type="text/css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/select2/css/select2.min.css') }}" type="text/css">
@endsection

@section('content')
<div class="page-header">
    <div>
        <h3>Cari Dokter</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12" id="list-riwayat">
                        <div class="card border" id="riwayat-1" style="cursor: pointer">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <a href="#" title="dokter">
                                            <img src="{{ asset('assets/img/foto-dokter.jpg') }}" class="img-dokter rounded-circle" alt="Vase" height="100" width="100">
                                        </a>
                                    </div>
                                    <div class="col-9">
                                        <h5>dr. Amelia Abdullah, Sp.OG</h5>
                                        <h6 class="text-gray">
                                            <i class="fa fa-stethoscope mr-2"></i>Dokter Kandungan
                                        </h6>
                                        <h6 class="text-gray">
                                            <i class="fa fa-hospital-o mr-2"></i>Jember - Jl. Gajah Mada No. 171
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border" id="riwayat-2" style="cursor: pointer">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <a href="#" title="dokter">
                                            <img src="{{ asset('assets/img/foto-dokter.jpg') }}" class="img-dokter rounded-circle" alt="Vase" height="100" width="100">
                                        </a>
                                    </div>
                                    <div class="col-9">
                                        <h5>dr. Masnunah, Sp.OG</h5>
                                        <h6 class="text-gray">
                                            <i class="fa fa-stethoscope mr-2"></i>Dokter Kandungan
                                        </h6>
                                        <h6 class="text-gray">
                                            <i class="fa fa-hospital-o mr-2"></i>Jember - Jl. Gajah Mada No. 171
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script>
        $('.select2-example').select2({
            placeholder: 'Pilih Kota'
        });
        $("#list-riwayat > .card").on('click',function(){
            $(".bd-example-modal-lg").modal('toggle');
        });
    </script>
@endsection