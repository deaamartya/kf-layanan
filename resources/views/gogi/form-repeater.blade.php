@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')
    <div class="page-header">
        <h3>Form Repeater</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Forms</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Form Repeater</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <p class="lead">Creates an interface to add and remove a repeatable group of input elements. <a
                            class="link-1"
                            href="https://github.com/DubFriend/jquery.repeater" target="_blank">Demo page</a>.</p>
                    <div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- Javascript --&gt;
&lt;script src="vendors/jquery.repeater.min.js"&gt;&lt;/script&gt;</code></pre>
                    </div>
                    <div data-label="BASIC EXAMPLE" class="demo-code-preview mt-4">
                <pre><code class="language-html">&lt;form class="repeater"&gt;
    &lt;div data-repeater-list="group-a"&gt;
      &lt;div data-repeater-item&gt;
        &lt;input type="text" name="text-input" value="A"/&gt;
        &lt;input data-repeater-delete type="button" value="Delete"/&gt;
      &lt;/div&gt;
      &lt;div data-repeater-item&gt;
        &lt;input type="text" name="text-input" value="B"/&gt;
        &lt;input data-repeater-delete type="button" value="Delete"/&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;input data-repeater-create type="button" value="Add"/&gt;
&lt;/form&gt;

&lt;script&gt;
   $(document).ready(function () {
      $('.repeater').repeater();
   });
&lt;/script&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Repeating Forms</h6>
                    <form class="basic-repeater">
                        <div data-repeater-list="group-a">
                            <div data-repeater-item>
                                <div class="row">
                                    <div class="col-md-2 col-sm-12 form-group">
                                        <label for="name">Name</label>
                                        <input type="email" class="form-control" name="name" id="name"
                                               placeholder="Enter email id">
                                    </div>
                                    <div class="col-md-2 col-sm-12 form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Enter email id">
                                    </div>
                                    <div class="col-md-2 col-sm-12 form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="Male">Male</option>
                                            <option value="Female">female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-sm-12 form-group">
                                        <label for="profession">Profession</label>
                                        <select name="profession" id="profession" class="form-control">
                                            <option value="FontEnd Developer">Designer</option>
                                            <option value="BackEnd Developer">Developer</option>
                                            <option value="Bussiness Analystic">Tester</option>
                                            <option value="Project Cordinator">Manager</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-sm-12 form-group">
                                        <div><label>&nbsp;</label></div>
                                        <button type="button" class="btn btn-danger" data-repeater-delete>
                                            <i class="ti-close font-size-10 mr-2"></i> Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-repeater-create>
                            <i class="ti-plus font-size-10 mr-2"></i> Add
                        </button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Alert Repeating</h6>
                    <form class="alert-repeater">
                        <button type="button" class="btn btn-primary mb-3" data-repeater-create>
                            <i class="ti-plus font-size-10 mr-2"></i> Add
                        </button>
                        <div data-repeater-list="group-a">
                            <div data-repeater-item>
                                <div class="row">
                                    <div class="col-md-2 col-sm-12 form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" id="username"
                                               placeholder="Username">
                                    </div>
                                    <div class="col-md-2 col-sm-12 form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone"
                                               placeholder="Enter email id">
                                    </div>
                                    <div class="col-md-2 col-sm-12 form-group">
                                        <div><label>&nbsp;</label></div>
                                        <button type="button" class="btn btn-danger btn-floating" data-repeater-delete>
                                            <i class="ti-close font-size-10"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Info Repeater</h6>
                    <form class="basic-repeater">
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="customer_name">Customer Name</label>
                                        <input type="text" class="form-control" name="customer_name" id="customer_name"
                                               placeholder="Username">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="company">Company</label>
                                        <input type="text" class="form-control" name="company" id="company"
                                               placeholder="Company name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="country">Country</label>
                                        <select name="country" class="form-control" id="country">
                                            <option value="male">ABD</option>
                                            <option value="female">Germany</option>
                                            <option value="female">Russia</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="language">Language</label>
                                        <select name="language" class="form-control" id="language">
                                            <option value="male">English</option>
                                            <option value="female">German</option>
                                            <option value="female">Greek</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted">Customer Utm's</p>
                        <div data-repeater-list="group-a">
                            <div data-repeater-item>
                                <div class="row">
                                    <div class="col-md-2 col-sm-12 form-group">
                                        <label for="utm_id">UTM Id</label>
                                        <input type="text" class="form-control" name="utm_id" id="utm_id"
                                               placeholder="UTM Id">
                                    </div>
                                    <div class="col-md-2 col-sm-12 form-group">
                                        <label for="utm_name">UTM Name</label>
                                        <input type="text" class="form-control" name="utm_name" id="utm_name"
                                               placeholder="UTM Name">
                                    </div>
                                    <div class="col-md-2 col-sm-12 form-group">
                                        <div><label>&nbsp;</label></div>
                                        <button type="button" class="btn btn-outline-danger btn-floating"
                                                data-repeater-delete>
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-repeater-create>
                            <i data-feather="plus" class="mr-2"></i> Add
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
<!-- Prism -->
<script src="{{ url('vendors/prism/prism.js') }}"></script>

<!-- Form repeater -->
<script src="{{ url('vendors/jquery.repeater.min.js') }}"></script>

<!-- Form repeater examples -->
<script src="{{ url('assets/js/examples/pages/form-repeater.js') }}"></script>
@endsection
