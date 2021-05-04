@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div>
            <h3>Google Map</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Maps</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Google Map</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Default</h6>
                                    <div id="default-map" style="height: 400px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Gray Map</h6>
                                    <div id="simple-map" style="height: 400px"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Map Marker</h6>
                            <div id="map-marker" style="height: 400px"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Directions Service</h6>
                            <div id="floating-panel">
                                <form class="form-inline m-b-20">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">Start</label>
                                        <select class="form-control" id="start">
                                            <option value="chicago, il">Chicago</option>
                                            <option value="st louis, mo">St Louis</option>
                                            <option value="joplin, mo">Joplin, MO</option>
                                            <option value="oklahoma city, ok">Oklahoma City</option>
                                            <option value="amarillo, tx">Amarillo</option>
                                            <option value="gallup, nm">Gallup, NM</option>
                                            <option value="flagstaff, az">Flagstaff, AZ</option>
                                            <option value="winona, az">Winona</option>
                                            <option value="kingman, az">Kingman</option>
                                            <option value="barstow, ca">Barstow</option>
                                            <option value="san bernardino, ca">San Bernardino</option>
                                            <option value="los angeles, ca">Los Angeles</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">End</label>
                                        <select class="form-control" id="end">
                                            <option value="chicago, il">Chicago</option>
                                            <option value="st louis, mo">St Louis</option>
                                            <option value="joplin, mo">Joplin, MO</option>
                                            <option value="oklahoma city, ok">Oklahoma City</option>
                                            <option value="amarillo, tx">Amarillo</option>
                                            <option value="gallup, nm">Gallup, NM</option>
                                            <option value="flagstaff, az">Flagstaff, AZ</option>
                                            <option value="winona, az">Winona</option>
                                            <option value="kingman, az">Kingman</option>
                                            <option value="barstow, ca">Barstow</option>
                                            <option value="san bernardino, ca">San Bernardino</option>
                                            <option value="los angeles, ca">Los Angeles</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div id="directions-simple" style="height: 400px"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Google map example -->
    <script src="{{ url('assets/js/examples/google-map.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDodpsFh_9UvPq6272RwRWUBqpjxuZ-MfA&callback=initialize"
            async defer></script>

    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
