@extends('layouts.app')

@section('content')

    <div class="page-header">
        <div>
            <h3>Pricing Table 2</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Pricing Table 2</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center p-t-b-40">
                                    <div class="m-b-10 text-uppercase font-size-11 opacity-7">Starter</div>
                                    <div class="m-b-0 m-l-r-30 font-size-35 font-weight-bold">
                                        Free
                                    </div>
                                </th>
                                <th scope="col" class="text-center p-t-b-40">
                                    <div class="m-b-10 text-uppercase font-size-11 opacity-7">Basic</div>
                                    <div class="m-b-0 m-l-r-30 font-weight-bold">
                                        <sup>
                                            <small>$</small>
                                        </sup>
                                        <span class="font-size-35">189</span>
                                        <sup>
                                            <small class="font-size-11">monthly</small>
                                        </sup>
                                    </div>
                                </th>
                                <th scope="col" class="text-center p-t-b-40">
                                    <div class="m-b-10 text-uppercase font-size-11 opacity-7">Premium</div>
                                    <div class="m-b-0 m-l-r-30 font-weight-bold">
                                        <sup>
                                            <small>$</small>
                                        </sup>
                                        <span class="font-size-35">289</span>
                                        <sup>
                                            <small class="font-size-11">monthly</small>
                                        </sup>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center">
                                <td class="text-left">Email preview on air</td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-left">Spam testing and blocking</td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                                <td>
                                    <i data-feather="x" class="width-18 height-18 text-danger"></i>
                                </td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-left">10 GB Space</td>
                                <td>
                                    <i data-feather="x" class="width-18 height-18 text-danger"></i>
                                </td>
                                <td>
                                    <i data-feather="x" class="width-18 height-18 text-danger"></i>
                                </td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-left">50 user accounts</td>
                                <td>
                                    <i data-feather="x" class="width-18 height-18 text-danger"></i>
                                </td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-left">Free support for one years</td>
                                <td>
                                    <i data-feather="x" class="width-18 height-18 text-danger"></i>
                                </td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-left">Free upgrade for one year</td>
                                <td>
                                    <i data-feather="x" class="width-18 height-18 text-danger"></i>
                                </td>
                                <td>
                                    <i data-feather="x" class="width-18 height-18 text-danger"></i>
                                </td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-left">Free upgrade for one year</td>
                                <td>
                                    <i data-feather="x" class="width-18 height-18 text-danger"></i>
                                </td>
                                <td>
                                    <i data-feather="x" class="width-18 height-18 text-danger"></i>
                                </td>
                                <td>
                                    <i data-feather="check" class="width-18 height-18 text-success"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="text-center p-t-b-30">
                                    <button class="btn btn-primary">Start Trial</button>
                                </td>
                                <td class="text-center p-t-b-30">
                                    <button class="btn btn-primary">Start Trial</button>
                                </td>
                                <td class="text-center p-t-b-30">
                                    <button class="btn btn-primary">Start Trial</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
