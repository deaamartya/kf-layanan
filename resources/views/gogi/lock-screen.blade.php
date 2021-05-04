@extends('layouts.auth')

@section('content')

    <h5>Enter your password</h5>

    <!-- form -->
    <form>
        <div class="form-group d-flex align-items-center">
            <div class="mr-3">
                <figure class="mb-4 avatar avatar-sm">
                    <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="avatar">
                </figure>
            </div>
            <input type="password" class="form-control" placeholder="Password" required autofocus>
        </div>
        <button class="btn btn-primary btn-block">Unlock</button>
        <hr>
        <a href="{{ route('login') }}" class="btn btn-sm btn-outline-light ml-1">Sign out</a>
    </form>
    <!-- ./ form -->

@endsection
