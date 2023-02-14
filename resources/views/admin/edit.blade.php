<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset("admin/assets/vendors/mdi/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("admin/assets/vendors/css/vendor.bundle.base.css")}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset("admin/assets/vendors/select2/select2.min.css")}}">
    <link rel="stylesheet" href="{{asset("admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css")}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset("admin/assets/css/style.css")}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset("admin/assets/images/favicon.png")}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:admin/partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="admin/index.html"><img src="{{asset("admin/assets/images/logo.svg")}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="admin/index.html"><img src="{{asset("admin/assets/images/logo-mini.svg")}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{asset("admin/assets/images/faces/face15.jpg")}}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url("/redirect")}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="admin/pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="admin/pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="admin/pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url("/addProduct")}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Add Product</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url("/all_product")}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">All Product</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="admin/pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="admin/pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{url("/all_users")}}" >
            <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">All User</span>
            </a>
          
          </li> --}}
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url("/all_users")}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">All Users</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url("/confirm")}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">All Orders</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:admin/partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="admin/index.html"><img src="{{asset("admin/assets/images/logo-mini.svg")}}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" href="{{url("/")}}">View Website </a>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="admin/assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="admin/assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="admin/assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{asset("admin/assets/images/faces/face15.jpg")}}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{Auth::user()->name}}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <form action="{{url("/logout")}}" method="POST">
                        @csrf
                        <button class="btn btn-black">Logout</button>
                      </form>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
            <div class="row">
             
              <div class="col-md-8 m-auto grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Edit Product</h4>




                    <form action="{{url("/edit/$product->id")}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                      @method('PUT')
                      @csrf
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control text-white" value="{{$product->pName}}" id="exampleInputUsername2" placeholder="Product Name" name="pName">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control text-white" value="{{$product->price}}" id="exampleInputEmail2" placeholder="Price" name="price">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Quntity</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control text-white" value="{{$product->quntity}}" id="exampleInputMobile" placeholder="Quntity" name="quntity">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2"  class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <textarea class="form-control text-white"  id="exampleInputPassword2" placeholder="Description" name="desc">{{$product->desc}}</textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Image Product</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" id="exampleInputConfirmPassword2" name="image" >
                          <img src="{{asset("storage/$product->image")}}" width="25%" alt="" srcset="">
                        </div>
                      </div>
                     
                      <button type="submit" class="btn btn-primary me-2">Edit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>








                  </div>
                </div>
              </div>
   
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:admin/partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset("admin/assets/vendors/js/vendor.bundle.base.js")}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset("admin/assets/vendors/select2/select2.min.js")}}"></script>
    <script src="{{asset("admin/assets/vendors/typeahead.js/typeahead.bundle.min.js")}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset("admin/assets/js/off-canvas.js")}}"></script>
    <script src="{{asset("admin/assets/js/hoverable-collapse.js")}}"></script>
    <script src="{{asset("admin/assets/js/misc.js")}}"></script>
    <script src="{{asset("admin/assets/js/settings.js")}}"></script>
    <script src="{{asset("admin/assets/js/todolist.js")}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset("admin/assets/js/file-upload.js")}}"></script>
    <script src="{{asset("admin/assets/js/typeahead.js")}}"></script>
    <script src="{{asset("admin/assets/js/select2.js")}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>