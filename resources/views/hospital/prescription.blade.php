<!DOCTYPE html>
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
        </div>
      </div>
    </nav>
<div class="container mt-5">
    <h2>Prescription Details</h2>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient's Name</th>
                    <th>Age</th>
                    <th>Date</th>
                    <th>Phone & Email</th>
                    <th>Address</th>
                    <th>Medication Details</th>
                    <th>Additional Information</th>
                    <th>Doctor's Signature</th>
                    <th>Signed Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patientData as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->phone }} | {{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->medication }}</td>
                        <td>{{ $item->additional_inf }}</td>
                        <td>{{ $item->sign_of_doctor }}</td>
                        <td>{{ $item->signed_date }}</td>
                        <td>
                            <a href="{{ url('prescription/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                            <a href="{{ url('prescription/'.$item->id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('Are You Sure?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
