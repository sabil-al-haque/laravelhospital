<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Appointment Details</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">Laravel Hospital</a>
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
    <h2>Appointment Details</h2>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient's Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Phone & Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Area</th>
                    <th>Zip Code</th>
                    <th>Appointment Date</th>
                    <th>Start From</th>
                    <th>Ends On</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->phone }} | {{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->area }}</td>
                        <td>{{ $item->zip }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->start }}</td>
                        <td>{{ $item->end }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{ url('appointment/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                            <a href="{{ url('appointment/'.$item->id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('Are You Sure?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
