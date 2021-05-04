@extends('layouts.app')

@section('content')

    <div class="page-header">
        <div>
            <h3>Pricing Table</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Pricing Table</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6">
                    <div class="pricing-table card">
                        <div class="card-body">
                            <h6 class="m-b-20 text-uppercase font-size-11 text-center">Starter</h6>
                            <h1 class="font-weight-bold text-center font-size-35">
                                Free
                            </h1>
                            <div>
                                <ul class="my-4 list-group list-group-flush">
                                    <li class="px-0 list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <i data-feather="check" class="width-18 height-18"></i>
                                                </span>
                                        Email preview on air
                                    </li>
                                    <li class="px-0 list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <i data-feather="check" class="width-18 height-18"></i>
                                                </span>
                                        Spam testing and blocking
                                    </li>
                                    <li class="px-0 list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-danger icon-block-xs icon-block-floating">
                                                    <i data-feather="x" class="width-18 height-18"></i>
                                                </span>
                                        10 GB Space
                                    </li>
                                    <li class="px-0 list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-danger icon-block-xs icon-block-floating">
                                                    <i data-feather="x" class="width-18 height-18"></i>
                                                </span>
                                        50 user accounts
                                    </li>
                                    <li class="px-0 list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-danger icon-block-xs icon-block-floating">
                                                    <i data-feather="x" class="width-18 height-18"></i>
                                                </span>
                                        Free support for one years
                                    </li>
                                    <li class="px-0 list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-danger icon-block-xs icon-block-floating">
                                                    <i data-feather="x" class="width-18 height-18"></i>
                                                </span>
                                        Free upgrade for one year
                                    </li>
                                </ul>
                            </div>
                            <button class="btn btn-primary">Start Trial</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pricing-table selected-pricing-table card bg-primary">
                        <div class="card-body">
                            <h6 class="m-b-20 text-uppercase font-size-11 text-center">Basic</h6>
                            <h1 class="m-b-20 font-weight-bold text-center">
                                <sup>
                                    <small>$</small>
                                </sup>
                                <span class="font-size-35">189</span>
                                <sup>
                                    <small class="font-size-11 text-uppercase">yearly</small>
                                </sup>
                            </h1>
                            <div>
                                <ul class="my-4 list-group list-group-flush">
                                    <li class="px-0 list-group-item bg-none d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <i data-feather="check" class="width-18 height-18"></i>
                                                </span>
                                        Email preview on air
                                    </li>
                                    <li class="px-0 list-group-item bg-none d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <i data-feather="check" class="width-18 height-18"></i>
                                                </span>
                                        Spam testing and blocking
                                    </li>
                                    <li class="px-0 list-group-item bg-none d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <i data-feather="check" class="width-18 height-18"></i>
                                                </span>
                                        10 GB Space
                                    </li>
                                    <li class="px-0 list-group-item bg-none d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <i data-feather="check" class="width-18 height-18"></i>
                                                </span>
                                        50 user accounts
                                    </li>
                                    <li class="px-0 list-group-item bg-none d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-danger icon-block-xs icon-block-floating">
                                                    <i data-feather="x" class="width-18 height-18"></i>
                                                </span>
                                        Free support for one years
                                    </li>
                                    <li class="px-0 list-group-item bg-none d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-danger icon-block-xs icon-block-floating">
                                                    <i data-feather="x" class="width-18 height-18"></i>
                                                </span>
                                        Free upgrade for one year
                                    </li>
                                </ul>
                            </div>
                            <button class="btn bg-white">Start Trial</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
