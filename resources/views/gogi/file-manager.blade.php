@extends('layouts.app')

@section('parentClassName', 'web-app')

@section('content')

    <div class="row no-gutters app-block">
        <div class="col-md-3 app-sidebar">
            <button class="btn btn-primary btn-block file-upload-btn mb-3" data-toggle="modal"
                    data-target="#compose">
                Upload Files
            </button>
            <form class="d-none" id="file-upload">
                <input type="file" multiple>
            </form>
            <div class="app-sidebar-menu">
                <div>
                    <div class="list-group list-group-flush">
                        <a href="" class="list-group-item active d-flex align-items-center">
                            <i class="ti-folder mr-2 list-group-icon"></i>All Files
                            <span class="small ml-auto">45</span>
                        </a>
                        <a href="" class="list-group-item">
                            <i class="ti-desktop mr-2 list-group-icon"></i>My Devices
                        </a>
                        <a href="" class="list-group-item">
                            <i class="ti-upload mr-2 list-group-icon"></i>Recents
                        </a>
                        <a href="" class="list-group-item d-flex align-items-center">
                            <i class="ti-star mr-2 list-group-icon"></i>Important
                            <span class="small ml-auto">10</span>
                        </a>
                        <a href="" class="list-group-item">
                            <i class="ti-trash mr-2 list-group-icon"></i>Deleted Files
                        </a>
                    </div>
                </div>
                <p class="mt-4 font-weight-bold">Storage Status</p>
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <i data-feather="database" class="width-30 height-30"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="progress" style="height: 10px">
                            <div class="progress-bar progress-bar-striped" role="progressbar"
                                 style="width: 40%" aria-valuenow="10" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <div class="line-height-12 small text-muted mt-2">19.5GB used of 25GB</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 app-content">
            <h3 class="mb-4">File Manager</h3>
            <div class="app-action">
                <div class="action-left">
                    <ul class="list-inline">
                        <li class="list-inline-item mb-0">
                            <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                <i data-feather="plus" class="mr-1"></i>
                                Add
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Folder</a>
                                <a class="dropdown-item" href="#">File</a>
                            </div>
                        </li>
                        <li class="list-inline-item mb-0">
                            <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">Folders</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item d-flex justify-content-between" href="#">
                                    Video
                                    <span class="text-muted">21</span>
                                </a>
                                <a class="dropdown-item d-flex justify-content-between" href="#">
                                    Image
                                    <span class="text-muted">5</span>
                                </a>
                                <a class="dropdown-item d-flex justify-content-between" href="#">
                                    Audio
                                    <span class="text-muted">12</span>
                                </a>
                                <a class="dropdown-item d-flex justify-content-between" href="#">
                                    Documents
                                    <span class="text-muted">7</span>
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item mb-0">
                            <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                Order by
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Date</a>
                                <a class="dropdown-item" href="#">Name</a>
                                <a class="dropdown-item" href="#">Size</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="action-right">
                    <form class="d-flex">
                        <a href="#" class="app-sidebar-menu-button btn btn-outline-light">
                            <i data-feather="menu"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search files"
                                   aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-light" type="button" id="button-addon1">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <h5 class="mb-4">Folders</h5>

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card app-file-list">
                        <div class="app-file-icon">
                            <i class="fa fa-file-text-o text-danger"></i>
                            <div class="dropdown position-absolute top-0 right-0 mr-3">
                                <a href="#" class="btn btn-floating btn-sm" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Copy to</a>
                                    <a href="#" class="dropdown-item">Move to</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 small">
                            <a href="#" class="d-block mb-1">Documents</a>
                            <div class="text-muted mb-1">10 folders and 100 files</div>
                            <div class="text-muted">5.90 GB</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card app-file-list">
                        <div class="app-file-icon">
                            <i class="fa fa-refresh text-secondary"></i>
                            <div class="dropdown position-absolute top-0 right-0 mr-3">
                                <a href="#" class="btn btn-floating btn-sm" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Copy to</a>
                                    <a href="#" class="dropdown-item">Move to</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 small">
                            <a href="#" class="d-block mb-1">Backup</a>
                            <div class="text-muted mb-1">5 folders and 312 files</div>
                            <div class="text-muted">16.38 GB</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card app-file-list">
                        <div class="app-file-icon">
                            <i class="fa fa-file-text-o text-warning"></i>
                            <div class="dropdown position-absolute top-0 right-0 mr-3">
                                <a href="#" class="btn btn-floating btn-sm" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Copy to</a>
                                    <a href="#" class="dropdown-item">Move to</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 small">
                            <a href="#" class="d-block mb-1">Other Files</a>
                            <div class="text-muted mb-1">25 files</div>
                            <div class="text-muted">805 MB</div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="mb-4">Recent Files</h5>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover mb-0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Size</th>
                                <th>Modified</th>
                                <th>Label</th>
                                <th>Members</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#">
                                        <figure class="avatar avatar-sm mr-2">
                                            <span class="avatar-title bg-warning rounded-pill">
                                                <i class="ti-folder"></i>
                                            </span>
                                        </figure>
                                        User Research
                                    </a>
                                </td>
                                <td>2MB</td>
                                <td>3/9/19, 2:40PM</td>
                                <td>
                                    <div class="badge bg-warning-bright text-warning">Project</div>
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        <figure class="avatar avatar-sm" title="Lisle Essam"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar2.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar5.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-floating btn-sm" data-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a href="#" class="dropdown-item">Download</a>
                                            <a href="#" class="dropdown-item">Copy to</a>
                                            <a href="#" class="dropdown-item">Move to</a>
                                            <a href="#" class="dropdown-item">Rename</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <figure class="avatar avatar-sm mr-2">
                                <span class="avatar-title bg-warning rounded-pill">
                                    <i class="ti-folder"></i>
                                </span>
                                        </figure>
                                        Design Thinking Project
                                    </a>
                                </td>
                                <td>10MB</td>
                                <td>3/9/19, 2:40PM</td>
                                <td>
                                    <div class="badge bg-secondary-bright text-secondary">Software</div>
                                </td>
                                <td>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-floating btn-sm" data-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a href="#" class="dropdown-item">Download</a>
                                            <a href="#" class="dropdown-item">Copy to</a>
                                            <a href="#" class="dropdown-item">Move to</a>
                                            <a href="#" class="dropdown-item">Rename</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <figure class="avatar avatar-sm mr-2">
                                <span class="avatar-title rounded-pill">
                                    <i class="ti-file"></i>
                                </span>
                                        </figure>
                                        Meeting-notes.doc
                                    </a>
                                </td>
                                <td>139KB</td>
                                <td>3/9/19, 2:40PM</td>
                                <td>
                                    <div class="badge bg-primary-bright text-primary">Public</div>
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        <figure class="avatar avatar-sm" title="Lisle Essam"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar2.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar5.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Mella Mixter"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar1.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Jo Hugill"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar1.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Cullie Philcott"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar5.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="" data-toggle="tooltip"
                                                data-original-title="Cullie Philcott">
                                            <span class="avatar-title bg-primary rounded-circle">+ 5</span>
                                        </figure>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-floating btn-sm" data-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a href="#" class="dropdown-item">Download</a>
                                            <a href="#" class="dropdown-item">Copy to</a>
                                            <a href="#" class="dropdown-item">Move to</a>
                                            <a href="#" class="dropdown-item">Rename</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <figure class="avatar avatar-sm mr-2">
                                <span class="avatar-title rounded-pill">
                                    <i class="ti-image"></i>
                                </span>
                                        </figure>
                                        Sitemap.png
                                    </a>
                                </td>
                                <td>810KB</td>
                                <td>3/9/19, 2:40PM</td>
                                <td>
                                    <div class="badge bg-success-bright text-success">Social Media</div>
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        <figure class="avatar avatar-sm" title="Lisle Essam"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar2.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar5.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Mella Mixter"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar1.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-floating btn-sm" data-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a href="#" class="dropdown-item">Download</a>
                                            <a href="#" class="dropdown-item">Copy to</a>
                                            <a href="#" class="dropdown-item">Move to</a>
                                            <a href="#" class="dropdown-item">Rename</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <figure class="avatar avatar-sm mr-2">
                                <span class="avatar-title rounded-pill">
                                    <i class="ti-file"></i>
                                </span>
                                        </figure>
                                        Analytics.pdf
                                    </a>
                                </td>
                                <td>10KB</td>
                                <td>3/9/19, 2:40PM</td>
                                <td>
                                    <div class="badge bg-info-bright text-info">Design</div>
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        <figure class="avatar avatar-sm" title="Lisle Essam"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar2.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar5.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Mella Mixter"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar1.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Mella Mixter"
                                                data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar4.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </figure>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-floating btn-sm" data-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a href="#" class="dropdown-item">Download</a>
                                            <a href="#" class="dropdown-item">Copy to</a>
                                            <a href="#" class="dropdown-item">Move to</a>
                                            <a href="#" class="dropdown-item">Rename</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
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

@section('script')
    <!-- File manager example -->
    <script src="{{ url('assets/js/examples/file-manager.js') }}"></script>
@endsection
