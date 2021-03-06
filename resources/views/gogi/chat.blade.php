@extends('layouts.app')

@section('bodyClassName', 'small-navigation')

@section('parentClassName', 'p-0')

@section('content')

    <div class="row no-gutters chat-block">

        <!-- begin::chat sidebar -->
        <div class="col-lg-4 chat-sidebar">

            <!-- begin::chat sidebar search -->
            <div class="chat-sidebar-header">
                <h3 class="mb-4">Chats</h3>
                <form class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search chat">
                        <div class="input-group-append">
                            <button class="btn btn-outline-light" type="button">
                                <i class="ti-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                           role="tab" aria-controls="pills-home" aria-selected="true">Chats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                           role="tab" aria-controls="pills-profile" aria-selected="false">Calls</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                           role="tab" aria-controls="pills-contact" aria-selected="false">Contacts</a>
                    </li>
                </ul>
            </div>
            <!-- begin::chat sidebar search -->

            <!-- end::chat list -->
            <div class="chat-sidebar-content">
                <div class="tab-content pt-3" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <div class="chat-lists">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <div class="avatar avatar-state-danger">
                                            <span class="avatar-title bg-success rounded-circle">F</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Francisco Ubsdale</h6>
                                        <span class="text-muted">Hello how are you?</span>
                                    </div>
                                    <div class="text-right ml-auto d-flex flex-column">
                                        <span class="badge badge-success badge-pill ml-auto mb-2">1</span>
                                        <span class="small text-muted">2:32 PM</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <div class="avatar avatar-state-success">
                                            <img src="{{ asset('assets/gogi/assets/media/image/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Natale Janu</h6>
                                        <span class="text-muted">Hi!</span>
                                    </div>
                                    <div class="text-right ml-auto d-flex flex-column">
                                        <span class="badge badge-success badge-pill ml-auto mb-2">3</span>
                                        <span class="small text-muted">08:27 PM</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item active d-flex align-items-center">
                                    <div class="pr-3">
                                        <span class="avatar avatar-state-warning">
                                            <img src="{{ asset('assets/gogi/assets/media/image/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <h6 class="mb-1">Orelie Rockhall</h6>
                                        <span class="text-muted">
                                                <i class="fa fa-image mr-1"></i> Photo
                                            </span>
                                    </div>
                                    <div class="text-right ml-auto d-flex flex-column">
                                        <span class="small text-muted">Yesterday</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                            <span class="avatar avatar-state-info">
                                                <img src="{{ asset('assets/gogi/assets/media/image/user/man_avatar1.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Barbette Bolf</h6>
                                        <span class="text-muted">
                                                <i class="fa fa-video-camera mr-1"></i> Video
                                            </span>
                                    </div>
                                    <div class="text-right ml-auto d-flex flex-column">
                                        <span class="small text-muted">Last week</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <span class="avatar avatar-state-secondary">
                                            <span class="avatar-title bg-warning rounded-circle">D</span>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Dudley Laborde</h6>
                                        <span class="text-muted">Hello how are you?</span>
                                    </div>
                                    <div class="text-right ml-auto d-flex flex-column">
                                        <span class="small text-muted">2:32 PM</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <span class="avatar avatar-state-success">
                                            <img src="{{ asset('assets/gogi/assets/media/image/user/man_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Boony Gidden</h6>
                                        <span class="text-muted">Hi!</span>
                                    </div>
                                    <div class="text-right ml-auto d-flex flex-column">
                                        <span class="small text-muted">08:27 PM</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <span class="avatar avatar-state-danger">
                                            <img src="{{ asset('assets/gogi/assets/media/image/user/women_avatar3.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <h6 class="mb-1">Vivianne Sothcott</h6>
                                        <span class="text-muted">
                                                <i class="fa fa-image mr-1"></i> Photo
                                            </span>
                                    </div>
                                    <div class="text-right ml-auto d-flex flex-column">
                                        <span class="small text-muted">Yesterday</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <span class="avatar avatar-state-warning">
                                            <img src="{{ asset('assets/gogi/assets/media/image/user/man_avatar4.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Brandais Reisen</h6>
                                        <span class="text-muted">
                                                <i class="fa fa-video-camera mr-1"></i> Video
                                            </span>
                                    </div>
                                    <div class="text-right ml-auto d-flex flex-column">
                                        <span class="small text-muted">Last week</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                         aria-labelledby="pills-profile-tab">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pr-3">
                                    <div class="avatar avatar-state-warning">
                                        <img src="{{ asset('assets/gogi/assets/media/image/user/women_avatar2.jpg') }}"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Orelie Rockhall</h6>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="ti-arrow-down mr-1 text-danger"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-right ml-auto">
                                    <i class="fa fa-video-camera text-danger"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pr-3">
                                    <div class="avatar avatar-state-success">
                                        <img src="{{ asset('assets/gogi/assets/media/image/user/man_avatar1.jpg') }}"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-1">Barbette Bolf</h6>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="ti-arrow-up mr-1 text-success"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-right ml-auto">
                                    <i class="fa fa-phone text-success"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pr-3">
                                    <div class="avatar avatar-state-warning">
                                        <img src="{{ asset('assets/gogi/assets/media/image/user/women_avatar1.jpg') }}"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div class="flex-grow- 1">
                                    <h6 class="mb-1">Natale Janu</h6>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="ti-arrow-up mr-1 text-success"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-right ml-auto">
                                    <i class="fa fa-phone text-success"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pr-3">
                                    <div class="avatar avatar-state-secondary">
                                        <span class="avatar-title bg-info rounded-circle">T</span>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-1">Terra Fehner</h6>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="ti-arrow-down mr-1 text-danger"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-right ml-auto">
                                    <i class="fa fa-video-camera text-danger"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pr-3">
                                    <div class="avatar avatar-state-info">
                                        <img src="{{ asset('assets/gogi/assets/media/image/user/women_avatar2.jpg') }}"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Orelie Rockhall</h6>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="ti-arrow-up mr-1 text-success"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-right ml-auto">
                                    <i class="fa fa-phone text-success"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                         aria-labelledby="pills-contact-tab">
                        <p>142 Contacts</p>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <div class="avatar avatar-state-danger">
                                            <span class="avatar-title bg-secondary rounded-circle">A</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Alene Ranyelld</h6>
                                        <div class="text-muted">United Kingdom</div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <a href="#" class="p-1">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <div class="avatar avatar-state-success">
                                            <img src="{{ asset('assets/gogi/assets/media/image/user/man_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Chloette Fewster</h6>
                                        <div class="text-muted">Estonia</div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <a href="#" class="p-1">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <div class="avatar avatar-state-warning">
                                            <img src="{{ asset('assets/gogi/assets/media/image/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <h6 class="mb-1">Stephanus Shergill</h6>
                                        <div class="text-muted">Austria</div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <a href="#" class="p-1">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <div class="avatar avatar-state-info">
                                            <img src="{{ asset('assets/gogi/assets/media/image/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Elvyn Frowde</h6>
                                        <div class="text-muted">Canada</div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <a href="#" class="p-1">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <div class="avatar avatar-state-secondary">
                                            <span class="avatar-title bg-success rounded-circle">A</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Alene Ranyelld</h6>
                                        <div class="text-muted">Canada</div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <a href="#" class="p-1">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <div class="avatar avatar-state-success">
                                            <img src="{{ asset('assets/gogi/assets/media/image/user/man_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Chloette Fewster</h6>
                                        <div class="text-muted">Spain</div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <a href="#" class="p-1">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <div class="avatar avatar-state-danger">
                                            <img src="{{ asset('assets/gogi/assets/media/image/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <h6 class="mb-1">Stephanus Shergill</h6>
                                        <div class="text-muted">Romania</div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <a href="#" class="p-1">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pr-3">
                                        <div class="avatar avatar-state-warning">
                                            <img src="{{ asset('assets/gogi/assets/media/image/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Elvyn Frowde</h6>
                                        <div class="text-muted">New Zealand</div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <a href="#" class="p-1">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                        <a href="#" class="p-1">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::chat list -->

        </div>
        <!-- end::chat sidebar -->

        <!-- begin::chat content -->
        <div class="col-lg-8 chat-content">

            <!-- begin::chat header -->
            <div class="chat-header border-bottom">
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <div class="avatar avatar-state-warning">
                            <img src="{{ asset('assets/gogi/assets/media/image/user/women_avatar2.jpg') }}" class="rounded-circle"
                                 alt="image">
                        </div>
                    </div>
                    <div>
                        <p class="mb-0">Orelie Rockhall</p>
                        <div class="m-0 small text-success">typing...</div>
                    </div>
                    <div class="ml-auto">
                        <ul class="nav align-items-center">
                            <li class="mr-4 d-sm-inline d-none">
                                <a href="#" title="Start Video Call" data-toggle="tooltip">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                            </li>
                            <li class="mr-4 d-sm-inline d-none">
                                <a href="#" title="Start Voice Call" data-toggle="tooltip">
                                    <i class="fa fa-phone"></i>
                                </a>
                            </li>
                            <li class="d-sm-inline d-none dropdown">
                                <a href="#" title="More options" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Profile</a>
                                    <a href="#" class="dropdown-item">Add contact</a>
                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                </div>
                            </li>
                            <li class="ml-4 mobile-chat-close-btn">
                                <a href="#" class="btn text-danger">
                                    <i class="ti-close"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end::chat header -->

            <!-- begin::messages -->
            <div class="messages">
                <div class="message-item">
                    <div class="message-item-content">Hi!</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Exercitationem fuga iure iusto libero, possimus quasi quis repellat sint tempora ullam!
                    </div>
                    <span class="time small text-muted font-italic">Yesterday</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Hello! How are you today?</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content d-flex">
                        <i class="ti-file mr-2 font-size-20 mt-2"></i>
                        <div>
                            <div>important_documents.pdf <i class="text-muted small">(50KB)</i></div>
                            <ul class="list-inline small">
                                <li class="list-inline-item"><a href="#">Download</a></li>
                                <li class="list-inline-item"><a href="#">View</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me message-media">
                    <img src="{{ asset('assets/gogi/assets/media/image/photo1.jpg') }}" alt="image">
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item message-item-divider">
                    <span>Today</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
            </div>
            <!-- end::messages -->

            <!-- begin::chat footer -->
            <div class="chat-footer border-top">
                <form>
                    <div class="form-group">
                        <div class="chat-footer-buttons">
                            <button class="btn btn-outline-light mr-2" type="button" title="Emoji"
                                    data-toggle="tooltip">
                                <i class="ti-face-smile"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="Write message...">
                        <div class="chat-footer-buttons">
                            <button class="btn btn-outline-light" type="button" title="Attach files"
                                    data-toggle="tooltip">
                                <i class="ti-link"></i>
                            </button>
                            <button class="btn btn-primary" type="submit">
                                <i class="ti-location-arrow"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end::chat footer -->

        </div>
        <!-- begin::chat content -->

    </div>

@endsection
