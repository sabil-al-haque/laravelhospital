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
                    <a class="nav-link" href="{{ url('/catagory') }}">Category</a>
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
                <form class="d-flex ms-auto">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-light" type="submit">Search</button>
              </form>
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
                <label for="patientName">Patient's Name</label>
                <input type="text" name="name" value= "{{$patientData->name}}" class="form-control" id="patientName" placeholder="Enter patient's name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="age">Age</label>
                <input type="number" name="age" value= "{{$patientData->age}}" class="form-control" id="age" placeholder="Enter age" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" name="date" value= "{{$patientData->date}}" class="form-control" id="date" required>
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" value= "{{$patientData->phone}}" class="form-control" id="phone" placeholder="Enter phone number" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" value= "{{$patientData->email}}" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="address">Address</label>
                <input type="text" name="address" value= "{{$patientData->address}}" class="form-control" id="address" placeholder="Enter address" required>
            </div>
        </div>
        <div class="form-group">
            <label for="medicationDetails">Medication Details</label>
            <textarea class="form-control" value= "{{$patientData->medication}}" name="medication"  id="medicationDetails" rows="3" placeholder="Enter medication details"></textarea>
        </div>
        <div class="form-group">
            <label for="additionalInformation">Additional Information</label>
            <textarea class="form-control" name="additional_inf" value= "{{$patientData->additional_inf}}" id="additionalInformation" rows="3" placeholder="Enter additional information"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="doctorsSignature">Doctor's Signature</label>
                <input type="text" name="sign_of_doctor" value= "{{$patientData->sign_of_doctor}}" class="form-control" id="doctorsSignature" placeholder="Enter doctor's signature" required>
            </div>
            <div class="form-group col-md-6">
                <label for="signedDate">Signed Date</label>
                <input type="date" name="signed_date" value= "{{$patientData->signed_date}}" class="form-control" id="signedDate" required>
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
