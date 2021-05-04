@extends('layouts.app')

@section('head')
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ url('vendors/slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('vendors/slick/slick-theme.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>Flowerpot</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">E-commerce</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                </ol>
            </nav>
        </div>
        <div class="mt-2 mt-md-0">
            <div class="dropdown">
                <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="ti-settings mr-2"></i> Actions
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="slider-for">
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product1.png') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div>
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product5.png') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div>
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product6.png') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div>
                            </div>
                            <div class="slider-nav mt-4">
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product1.png') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div>
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product5.png') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div>
                                <div class="slick-slide-item">
                                    <img src="{{ url('assets/media/image/products/product6.png') }}"
                                         class="img-fluid rounded"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted mb-0">New Collection</p>
                                <span class="d-flex align-items-center">
                                <i class="fa fa-heart text-danger mr-2"></i> 259
                            </span>
                            </div>
                            <h2>Flowerpot</h2>
                            <p>
                                <span class="badge bg-success-bright text-success">In stock</span>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda
                                autem eaque error explicabo fugiat iusto necessitatibus, temporibus. Laudantium,
                                voluptate?</p>
                            <div class="font-size-30 mb-2">
                                <strong>$40.25</strong>
                                <small class="mr-2">
                                    <del>$80.50</del>
                                </small>
                                <small class="text-danger">50% Off</small>
                            </div>
                            <div class="d-flex">
                                <ul class="list-inline mb-3 mr-2">
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="fa fa-star-half-o text-warning"></i>
                                    </li>
                                </ul>
                                <span>(4.5)</span>
                            </div>
                            <p>Features:</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check mr-2 text-success"></i>It is a long established fact that a
                                    reader
                                    will be distracted.
                                </li>
                                <li><i class="fa fa-check mr-2 text-success"></i>Contrary to popular belief, Lorem Ipsum
                                    is
                                    not text.
                                </li>
                                <li><i class="fa fa-check mr-2 text-success"></i>There are many variations of passages
                                    of
                                    Lorem.
                                </li>
                            </ul>
                            <form class="mt-4 d-flex align-items-center">
                                <div>
                                    <input type="number" class="form-control" value="1">
                                </div>
                                <button class="btn btn-primary ml-2">Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills mb-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">Descriptions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="false">Comments (4)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                               aria-controls="contact" aria-selected="false">Questions (3)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h4 class="mb-4">Descriptions</h4>
                            <p class="font-weight-bold">Where was he raised?</p>
                            <p>You begin with a text, you sculpt information, you chisel away what's not needed, you come to the point, make things clear, add value, you're a content person, you like words. Design is no afterthought, far from it, but it comes in a deserved second. Anyway, you still use Lorem Ipsum and rightly so, as it will always have a place in the web workers toolbox, as things happen, not always the way you like it, not always in the preferred order. Even if your less into design and more into content strategy you may find some redeeming value with, wait for it, dummy copy, no less.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores dolorum
                                earum fugiat nostrum obcaecati, quis ratione rerum sapiente soluta!</p>
                            <p class="font-weight-bold">Chemicals in</p>
                            <p>Even if your less into design and more into content strategy you may find some redeeming value with, wait for it, dummy copy, no less.</p>
                            <p>Design is no afterthought, far from it, but it comes in a deserved second. Anyway, you still use Lorem Ipsum and rightly so, as it will always have a place in the web workers toolbox, as things happen, not always the way you like it, not always in the preferred order. Even if your less into design and more into content strategy you may find some redeeming value with, wait for it, dummy copy, no less.</p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h4 class="mb-4">Comments</h4>
                            <div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex px-0 py-4">
                                        <a href="#" class="flex-shrink-0">
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                                     class="rounded-circle" alt="image">
                                            </figure>
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">
                                                    <h6>Valentine Maton</h6>
                                                    <ul class="list-inline mb-1">
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">(5)</li>
                                                    </ul>
                                                </a>
                                                <div class="ml-auto">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-more-alt"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">Reply</a>
                                                            <a href="#" class="dropdown-item">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Odio, tempora.</p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex px-0 py-4">
                                        <a href="#" class="flex-shrink-0">
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                                     class="rounded-circle" alt="image">
                                            </figure>
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">
                                                    <h6>Valentine Maton</h6>
                                                    <ul class="list-inline mb-1">
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star-half-o text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">(3.5)</li>
                                                    </ul>
                                                </a>
                                                <div class="ml-auto">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-more-alt"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">Reply</a>
                                                            <a href="#" class="dropdown-item">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Odio, tempora.</p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex px-0 py-4">
                                        <a href="#" class="flex-shrink-0">
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                                     class="rounded-circle" alt="image">
                                            </figure>
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">
                                                    <h6>Valentine Maton</h6>
                                                    <ul class="list-inline mb-1">
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star-half-o text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">(4.5)</li>
                                                    </ul>
                                                </a>
                                                <div class="ml-auto">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-more-alt"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">Reply</a>
                                                            <a href="#" class="dropdown-item">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Odio, tempora.</p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex px-0 py-4">
                                        <a href="#" class="flex-shrink-0">
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                                     class="rounded-circle" alt="image">
                                            </figure>
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">
                                                    <h6>Valentine Maton</h6>
                                                    <ul class="list-inline mb-1">
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                        <li class="list-inline-item mb-0">(4)</li>
                                                    </ul>
                                                </a>
                                                <div class="ml-auto">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-more-alt"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">Reply</a>
                                                            <a href="#" class="dropdown-item">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Odio, tempora.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <form class="mt-4">
                                        <div class="form-group">
                                            <textarea rows="5" class="form-control"
                                                      placeholder="Write a comment about the product"></textarea>
                                        </div>
                                        <button class="btn btn-primary" type="button">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <h4 class="mb-4">Questions</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card shadow-none">
                                    <div class="card-header" id="headingOne">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            How are the delivery processes carried out?
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods, the paint you may slap on your face to impress the new boss is your business. But what about your daily bread? Design comps, layouts, wireframes—will your clients accept that you go about things the facile way? Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no no to forswear forever. Not so fast, I'd say, there are some redeeming factors in favor of greeking text, as its use is merely the symptom of a worse problem to take into consideration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none">
                                    <div class="card-header" id="headingTwo">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            Is there a payment option at the door?
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Do you like Cheese Whiz? Spray tan? Fake eyelashes? That's what is Lorem Ipsum to many—it rubs them the wrong way, all the way. It's unreal, uncanny, makes you wonder if something is wrong, it seems to seek your attention for all the wrong reasons. Usually, we prefer the real thing, wine without sulfur based preservatives, real butter, not margarine, and so we'd like our layouts and designs to be filled with real words, with thoughts that count, information that has value.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none">
                                    <div class="card-header" id="headingThree">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            How many can I order at the same time?
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>There's lot of hate out there for a text that amounts to little more than garbled words in an old language. The villagers are out there with a vengeance to get that Frankenstein, wielding torches and pitchforks, wanting to tar and feather it at the least, running it out of town in shame.</p>
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

@endsection

@section('script')
    <!-- Slick js -->
    <script src="{{ url('vendors/slick/slick.min.js') }}"></script>

    <script src="{{ url('assets/js/examples/pages/product-detail.js') }}"></script>
@endsection
