<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Health Management</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">Health Management</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/doctor') }}">Doctor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/patient') }}">Patient</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/availability') }}">Availability</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/disease') }}">Disease</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/experties') }}">Experties</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/appointment') }}">Appointment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/prescription') }}">Prescription</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                  </li>
                </ul>
          </div>
        </div>
      </nav>

<div class="container mt-5">
<a href="{{ url('/appointment') }}" class="btn btn-primary my-4">Back</a>
        @if (session('status'))
        <div class="alert alert-success"> {{ session('status') }}</div>
        @endif
    <form action="{{route('appointment.store')}}" method="POST">
             @csrf
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="patientName">Availabilities Id</label>
                    <input type="number" name="availabilities_id"  class="form-control" id="patientName" placeholder="Enter patient name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="age">Doctor Id</label>
                    <input type="number" name="doctor_id"  class="form-control" id="age" placeholder="Enter age" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="age">Patient Id</label>
                    <input type="number" name="patient_id"  class="form-control" id="age" placeholder="Enter age" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Diease Id</label>
                    <input type="number" name="diease_id" class="form-control" id="phone" placeholder="Enter phone number" required>
                </div>
            </div>
        <button type="submit" class="btn btn-primary my-4">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
