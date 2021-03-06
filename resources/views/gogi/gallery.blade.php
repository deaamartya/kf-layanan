@extends('layouts.app')

@section('head')
    <!-- Magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/lightbox/magnific-popup.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header d-md-flex justify-content-between">
        <ul class="nav nav-pills gallery-filter justify-content-md-center mb-3 mb-md-0">
            <li class="nav-item">
                <a href="#" class="nav-link active" data-filter="*">All</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-filter=".webTemplates">Web</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-filter=".logos">Logos</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-filter=".drawings">Drawings</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-filter=".ui">UI Elements</a>
            </li>
        </ul>

        <div class="dropdown">
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Actions</a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Upload</a>
                <a href="#" class="dropdown-item text-danger">Delete</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="gallery-container row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 drawings mb-4">
                    <a href="{{ asset('assets/gogi/assets/media/image/photo1.jpg') }}" class="image-popup-gallery-item">
                        <div class="image-hover">
                            <img src="{{ asset('assets/gogi/assets/media/image/photo1.jpg') }}" class="rounded" alt="image">
                            <div class="image-hover-body rounded">
                                <div>
                                    <h4 class="mb-2">Gallery Item Title</h4>
                                    <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 webTemplates drawings ui mb-4">
                    <a href="{{ asset('assets/gogi/assets/media/image/photo2.jpg') }}" class="image-popup-gallery-item">
                        <div class="image-hover">
                            <img src="{{ asset('assets/gogi/assets/media/image/photo2.jpg') }}" class="rounded" alt="image">
                            <div class="image-hover-body rounded">
                                <div>
                                    <h4 class="mb-2">Gallery Item Title</h4>
                                    <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 logos mb-4">
                    <a href="{{ asset('assets/gogi/assets/media/image/photo3.jpg') }}" class="image-popup-gallery-item">
                        <div class="image-hover">
                            <img src="{{ asset('assets/gogi/assets/media/image/photo3.jpg') }}" class="rounded" alt="image">
                            <div class="image-hover-body rounded">
                                <div>
                                    <h4 class="mb-2">Gallery Item Title</h4>
                                    <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 ui mb-4">
                    <a href="{{ asset('assets/gogi/assets/media/image/photo4.jpg') }}" class="image-popup-gallery-item">
                        <div class="image-hover">
                            <img src="{{ asset('assets/gogi/assets/media/image/photo4.jpg') }}" class="rounded" alt="image">
                            <div class="image-hover-body rounded">
                                <div>
                                    <h4 class="mb-2">Gallery Item Title</h4>
                                    <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 ui mb-4">
                    <a href="{{ asset('assets/gogi/assets/media/image/photo5.jpg') }}" class="image-popup-gallery-item">
                        <div class="image-hover">
                            <img src="{{ asset('assets/gogi/assets/media/image/photo5.jpg') }}" class="rounded" alt="image">
                            <div class="image-hover-body rounded">
                                <div>
                                    <h4 class="mb-2">Gallery Item Title</h4>
                                    <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 drawings mb-4">
                    <a href="{{ asset('assets/gogi/assets/media/image/photo6.jpg') }}" class="image-popup-gallery-item">
                        <div class="image-hover">
                            <img src="{{ asset('assets/gogi/assets/media/image/photo6.jpg') }}" class="rounded" alt="image">
                            <div class="image-hover-body rounded">
                                <div>
                                    <h4 class="mb-2">Gallery Item Title</h4>
                                    <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 logos mb-4">
                    <a href="{{ asset('assets/gogi/assets/media/image/photo7.jpg') }}" class="image-popup-gallery-item">
                        <div class="image-hover">
                            <img src="{{ asset('assets/gogi/assets/media/image/photo7.jpg') }}" class="rounded" alt="image">
                            <div class="image-hover-body rounded">
                                <div>
                                    <h4 class="mb-2">Gallery Item Title</h4>
                                    <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 webTemplates logos mb-4">
                    <a href="{{ asset('assets/gogi/assets/media/image/photo8.jpg') }}" class="image-popup-gallery-item">
                        <div class="image-hover">
                            <img src="{{ asset('assets/gogi/assets/media/image/photo8.jpg') }}" class="rounded" alt="image">
                            <div class="image-hover-body rounded">
                                <div>
                                    <h4 class="mb-2">Gallery Item Title</h4>
                                    <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 logos mb-4">
                    <a href="{{ asset('assets/gogi/assets/media/image/photo9.jpg') }}" class="image-popup-gallery-item">
                        <div class="image-hover">
                            <img src="{{ asset('assets/gogi/assets/media/image/photo9.jpg') }}" class="rounded" alt="image">
                            <div class="image-hover-body rounded">
                                <div>
                                    <h4 class="mb-2">Gallery Item Title</h4>
                                    <div><i class="fa fa-tag mr-2"></i>Web, Logos</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Magnific popup -->
    <script src="{{ asset('assets/gogi/vendors/lightbox/jquery.magnific-popup.min.js') }}"></script>

    <!-- Isotope -->
    <script src="{{ asset('assets/gogi/vendors/jquery.isotope.min.js') }}"></script>

    <script src="{{ asset('assets/js/examples/pages/gallery.js') }}"></script>
@endsection
