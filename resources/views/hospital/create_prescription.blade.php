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
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar >

                    <!--- Sidemenu -->
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
                                    <h4 class="mb-sm-0 font-size-18">Form Elements</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Your form code starts here -->
                        <div class="container mt-5">
                            @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                            @endif
                            <form method="post" action="{{ route('prescription.store') }}">
                                @csrf
                                @method('post')
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="appointments_id">Appointments ID</label>
                                        <input type="number" name="appointments_id" class="form-control" id="appointments_id" placeholder="Enter Appointments id" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="patients_id">Patient Id</label>
                                        <input type="number" name="patients_id" class="form-control" id="patients_id" placeholder="Enter Patient Id" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="doctors_id">Doctor Id</label>
                                        <input type="number" name="doctors_id" class="form-control" id="doctors_id" placeholder="Enter Doctor Id" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="date">Date</label>
                                        <input type="date" name="date" class="form-control" id="date" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="medication">Medication</label>
                                        <textarea class="form-control" name="medication" id="medication" rows="3" placeholder="Enter Medication Details"></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="additional_inf">Additional Information</label>
                                        <textarea class="form-control" name="additional_inf" id="additional_inf" rows="3" placeholder="Enter Additional Information"></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="sign_of_doctor">Doctor Sign</label>
                                        <input type="text" name="sign_of_doctor" class="form-control" id="sign_of_doctor" placeholder="Doctor Sign" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="signed_date">Signed Date</label>
                                        <input type="date" name="signed_date" class="form-control" id="signed_date" placeholder="Signed Date" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary my-4">Submit</button>
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
