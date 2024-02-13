<!doctype html>
<html lang="en">

<head>

        <meta charset="utf-8" />
        <title>skoder - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark" data-layout-mode="light">

        <!-- <body data-layout="horizontal" data-topbar="dark"> -->

            <!-- Begin page -->
            <div id="layout-wrapper">
                <header id="page-topbar">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>

                            <!-- App Search-->
                            <form class="app-search d-none d-lg-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="bx bx-search-alt"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </header>
             <!-- ========== Left Sidebar Start ========== -->
             <div class="vertical-menu">

                <div data-simplebar >

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>
                            <li>
                                <a href="{{ url('/doctor') }}" key="t-default">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Doctors</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('/doctor') }}" key="t-default">View Doctors</a></li>


                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Patients</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">

                                    <li><a href="{{ url('/create_patient') }}" key="t-crypto">Create Patient</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Appointments</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">

                                    <li><a href="{{ url('/create_appointment') }}" key="t-saas">Create Appointment</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Prescriptions</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('/prescription') }}" key="t-default">View Presscription</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Availability</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('/availability') }}" key="t-default">View Availability</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Disease</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('/create_disease') }}" key="t-saas">Create Disease</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Experties</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('/experties') }}" key="t-default">View Experties</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Users</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#" key="t-default">Admin</a></li>
                                    <li><a href="{{ url('/doctor') }}" key="t-saas">Doctor</a></li>
                                    <li><a href="{{ url('/patient') }}" key="t-saas">Patient</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="{{ url('/doctor') }}" key="t-default">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Profile</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/doctor') }}" key="t-default">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Log Out</span>
                                </a>
                            </li>



                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
             <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Create Patient</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Your form code starts here -->
                        <div class="container">

                            @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                            @endif
                            <form method="post" action="{{ route('patient.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
                                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="mb-3">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number">
                                    @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="mb-3">
                                    <label for="gender">Gender</label>
                                    <select name="gender" class="form-select">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @error('gender')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Enter Your Full Address">
                                    @error('address')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address">Password</label>
                                    <input type="password" name="Password" class="form-control" placeholder="Enter Your Password">
                                    @error('address')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                <input type="submit" class="btn btn-primary my-4" value="Submit">
                            </form>
                        </div>
                        <!-- Your form code ends here -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © skoder.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by skoder
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

            <!-- JAVASCRIPT -->
            <script src="admin/assets/libs/jquery/jquery.min.js"></script>
            <script src="admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="admin/assets/libs/metismenu/metisMenu.min.js"></script>
            <script src="admin/assets/libs/simplebar/simplebar.min.js"></script>
            <script src="admin/assets/libs/node-waves/waves.min.js"></script>

            <script src="admin/assets/js/app.js"></script>

        </body>

        </html>
