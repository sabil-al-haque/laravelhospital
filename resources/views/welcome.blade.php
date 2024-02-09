<!doctype html>
<html lang="en">
  <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <title>Hospital Management</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">Hospital Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/doctor') }}">Doctor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/create_doctor') }}">Create Doctor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/patient') }}">Patient</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/create_patient') }}">Create Patient</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/catagory') }}">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/create_catagory') }}">Create Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/appointment') }}">Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/create_appointment') }}">Create Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/prescription') }}">Prescription</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/create_prescription') }}">Create Prescription</a>
            </li>
          </ul>
          <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-light" type="submit">Search</button>
            </form>
        </div>
      </div>
    </nav>

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Bootstrap JavaScript and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-NrdMiiV9LqyiBqEGT2VilEJdZfbCttdb7D/c7M7s7UJPRF17FA5qFZhR5BT2O5G7"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  </body>
</html>
