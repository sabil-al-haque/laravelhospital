<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Data Tables | Skoder - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">
        <!-- DataTables -->
        <link href="admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <body data-sidebar="dark" data-layout-mode="">

        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" key="t-menu">Menu</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-dashboards">Doctors</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ url('/doctor') }}" key="t-default">View Doctors</a></li>
                            <li><a href="{{ url('/create_doctor') }}" key="t-saas">Create Doctor</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-dashboards">Patients</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ url('/patient') }}" key="t-default">View Patient</a></li>
                            <li><a href="{{ url('/create_patient') }}" key="t-crypto">Create Patient</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-dashboards">Appointments</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ url('/appointment') }}" key="t-default">View Appointment</a></li>
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
                            <li><a href="{{ url('/create_prescription') }}" key="t-saas">Create Presscription</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-dashboards">Availability</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ url('/availability') }}" key="t-default">View Availability</a></li>
                            <li><a href="{{ url('/create_availability') }}" key="t-saas">Create Availability</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-dashboards">Disease</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ url('/disease') }}" key="t-default">View Disease</a></li>
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
                            <li><a href="{{ url('/create_experties') }}" key="t-saas">Create Experties</a></li>

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



                </ul>
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
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Buttons example</h4>
                                        <p class="card-title-desc">
                                        </p>

                                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Title</th>
                                                            <th>Doctor's ID</th>
                                                            <th>Day</th>
                                                            <th>Start Time</th>
                                                            <th>End Time</th>
                                                            <th>Action</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($availabilities as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->title }}</td>
                                                            <td>{{ $item->locatedoctor()->name }}</td>
                                                            <td>{{ $item->day }}</td>
                                                            <td>{{ $item->start_time }}</td>
                                                            <td>{{ $item->end_time }}</td>
                                                            <td>
                                                                <a href="{{ url('availability/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                                                <a
                                                                href="{{ url('availability/'.$item->id.'/delete') }}"
                                                                class="btn btn-danger mx-1"
                                                                onclick="return confirm('Are You Sure?')"
                                                                >
                                                                Delete
                                                            </a>
                                                            </td>
                                                        </tr>

                                                        @endforeach
                                                    </tbody>


                                                </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skoder.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Skoder Technology
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="admin/assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="admin/assets/libs/jszip/jszip.min.js"></script>
        <script src="admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="admin/assets/js/pages/datatables.init.js"></script>

        <script src="admin/assets/js/app.js"></script>

    </body>

</html>



