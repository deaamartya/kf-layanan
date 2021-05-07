@extends('layouts.auth')

@section('content')
    <h5>Registrasi Akun</h5>

    <!-- form -->
    <form action="{{ url('login') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" required autofocus id="nama">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" id="alamat"></textarea>
        </div>
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="number" class="form-control" placeholder="+628123456" required id="notelp">
        </div>
        <div class="form-group">
            <label>Jenis Pasien</label>
            <select class="custom-select custom-select-sm" id="jenis_pasien">
                <option selected disabled>Pilih jenis pasien</option>
                <option value="umum" id="umum">Umum</option>
                <option value="bpjs" id="bpjs">BPJS</option>
                <option value="lainnya" id="asuransi_lainnya">Asuransi Lainnya</option>
            </select>
        </div>
        <div class="row my-4" id="form-bpjs">
            <div class="col-3">
                <img src="{{ asset('assets/img/logo-bpjs.png') }}" height="100">
            </div>
            <div class="col-9">
                <label>No. BPJS</label>
                <input type="number" class="form-control" required id="no_bpjs">
            </div>
        </div>
        <div class="form-group" id="form-as-lainnya">
            <label>No. Asuransi</label>
            <input type="number" class="form-control" required id="no_asuransi">
        </div>
        <button class="btn btn-primary btn-block" id="register" type="submit">Register</button>
        <button class="btn btn-success btn-block" id="simulasi" type="button">Simulasi</button>
        <hr>
        <p class="text-muted">Sudah memiliki akun?</p>
        <a href="{{ url('login') }}" class="btn btn-outline-light btn-block">Log In!</a>
    </form>
    <!-- ./ form -->
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            var val = $("#jenis_pasien").val();
            if(val == "umum"){
                $("#form-bpjs").hide();
                $("#form-as-lainnya").hide();
            }
            else if(val == "bpjs"){
                $("#form-bpjs").show();
                $("#form-as-lainnya").hide();
            }
            else if(val == "lainnya"){
                $("#form-bpjs").hide();
                $("#form-as-lainnya").show();
            }
            else{
                $("#form-bpjs").hide();
                $("#form-as-lainnya").hide();
            }
            $("#jenis_pasien").on('change',function(){
                if($(this).val() == "umum"){
                    $("#form-bpjs").hide();
                    $("#form-as-lainnya").hide();
                }
                else if($(this).val() == "bpjs"){
                    $("#form-bpjs").show();
                    $("#form-as-lainnya").hide();
                }
                else if($(this).val() == "lainnya"){
                    $("#form-bpjs").hide();
                    $("#form-as-lainnya").show();
                }
            });

            $("#simulasi").on('click',function(){
                $("#nama").val('John Doe');
                $("#alamat").val('Jl. Mayjen Prof. Dr. Moestopo No.47, Pacar Kembang, Kec. Tambaksari, Kota SBY, Jawa Timur 60132');
                $("#notelp").val('+6281333654616');
                $('#jenis_pasien').val("bpjs").change();
                $("#no_bpjs").val('284638243');
                $("#no_asuransi").val('1413478612');
            });
        });
    </script>
@endsection