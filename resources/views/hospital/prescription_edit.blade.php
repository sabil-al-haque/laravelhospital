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
        <a href="{{ url('/prescription') }}" class="btn btn-primary my-4">Back</a>
        @if (session('status'))
        <div class="alert alert-success"> {{ session('status') }}</div>
        @endif
        <form method="post" action="{{ url('prescription/'.$patientData->id.'/edit') }}">
            {{$patientData}}
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="appointments_id">Appointments Id</label>
                    <input type="number" name="appointments_id" value= "{{$patientData->appointments_id}}" class="form-control" id="appointments_id" placeholder="Enter Appointments Id" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="patients_id">Patient Id</label>
                    <input type="number" name="patients_id" value= "{{$patientData->patients_id}}" class="form-control" id="patients_id" placeholder="Enter Patient Id" required>
                </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="doctors_id">Doctor Id</label>
                    <input type="number" name="doctors_id" value= "{{$patientData->doctors_id}}" class="form-control" id="doctors_id" placeholder="Enter Doctor Id" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" name="date" value= "{{$patientData->date}}" class="form-control" id="date"  required>
                </div>
                <div class="form-group col-md-6">
                    <label for="medication">Medication</label>
                    <textarea class="form-control" name="medication" value= "{{$patientData->medication}}" id="medication" rows="3" placeholder="Enter Medication Details" > </textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="additional_inf">Additional Information</label>
                    <textarea class="form-control" name="additional_inf" value= "{{$patientData->additional_inf}}" id="additional_inf" rows="3" placeholder="Enter Additional Information" > </textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="sign_of_doctor">Doctor Sign</label>
                    <input type="text" name="sign_of_doctor" value= "{{$patientData->sign_of_doctor}}" class="form-control" id="sign_of_doctor" placeholder="Doctor Sign" required>
                </div>
                <div class="form-group col-md-6">
                <label for="signed_date">Signed Date</label>
                <input type="date"  name="signed_date" value= "{{$patientData->signed_date}}" class="form-control" id="signed_date"  placeholder="Signed Date"required>
            </div>
        <button type="submit" class="btn btn-primary my-4">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
