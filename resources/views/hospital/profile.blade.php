<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Management</title>
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
    <h2 class="mb-4">User Profile</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Welcome, {{ $user->name }}!</h5>

            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
                <li class="list-group-item"><strong>Age:</strong> {{ $user->age }}</li>
                <li class="list-group-item"><strong>Gender:</strong> {{ $user->gender }}</li>
                <li class="list-group-item"><strong>Phone:</strong> {{ $user->phone }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                <li class="list-group-item"><strong>Address:</strong> {{ $user->address }}</li>
                <li class="list-group-item"><strong>City:</strong> {{ $user->city }}</li>
            </ul>

             <!-- Edit Button -->
             <a href="/edit-profile" class="btn btn-warning mt-3">Edit Profile</a>

             <!-- Delete Button -->
             <form action="/delete-profile" method="post" class="d-inline">
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger mt-3 ml-2" onclick="return confirm('Are you sure you want to delete your profile?')">Delete Profile</button>
             </form>

            <a href="/logout" class="btn btn-danger mt-3">Logout</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
