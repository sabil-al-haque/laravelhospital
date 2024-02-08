<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel Hospital</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="doctorDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Doctor
                    </a>
                    <div class="dropdown-menu" aria-labelledby="doctorDropdown">
                        <a class="dropdown-item" href="{{ url('/doctor') }}">View Doctors</a>
                        <a class="dropdown-item" href="{{ url('/create_doctor') }}">Create Doctor</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="patientDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Patient
                    </a>
                    <div class="dropdown-menu" aria-labelledby="patientDropdown">
                        <a class="dropdown-item" href="{{ url('/patient') }}">View Patients</a>
                        <a class="dropdown-item" href="{{ url('/create_patient') }}">Create Patient</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                        <a class="dropdown-item" href="{{ url('/catagory') }}">View Categories</a>
                        <a class="dropdown-item" href="{{ url('/create_catagory') }}">Create Category</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="appointmentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Appointment
                    </a>
                    <div class="dropdown-menu" aria-labelledby="appointmentDropdown">
                        <a class="dropdown-item" href="{{ url('/appointment') }}">View Appointments</a>
                        <a class="dropdown-item" href="{{ url('/create_appointment') }}">Create Appointment</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="prescriptionDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Prescription
                    </a>
                    <div class="dropdown-menu" aria-labelledby="prescriptionDropdown">
                        <a class="dropdown-item" href="{{ url('/prescription') }}">View Prescriptions</a>
                        <a class="dropdown-item" href="{{ url('/create_prescription') }}">Create Prescription</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>