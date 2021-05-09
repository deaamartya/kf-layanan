@extends('layouts.auth')

@section('content')
    <h5>Log In</h5>

    <!-- form -->
    <form action="{{ url('pasien') }}" method="get">
        @csrf
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" autofocus id="nama">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" id="password">
        </div>
        <button class="btn btn-primary btn-block" id="register" type="submit">Log In</button>
        <hr>
        <p class="text-muted">Belum memiliki akun?</p>
        <a href="{{ url('registrasi') }}" class="btn btn-outline-light btn-block">Registrasi</a>
    </form>
    <!-- ./ form -->
@endsection

@section('script')
    <script>
        $(document).ready(function(){
        });
    </script>
@endsection