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
                    <a class="nav-link" href="{{ url('/doctor') }}">View Doctor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/create_patient') }}">Create Patient</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/availability') }}">View Availability</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/create_disease') }}">Create Disease</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/experties') }}">View Experties</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/create_appointment') }}">Create Appointment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/prescription') }}">View Prescription</a>
                  </li>


                  @if (Route::has('login'))

                  @auth

                  <x-app-layout>

                  </x-app-layout>

                  @else

                  <li class="nav-item" class="my=2">
                    <a style="color: white"   href="{{route('login')}}">Login</a>
                  </li>
                  <li class="nav-item">
                    <a style="color: white"  href="{{route('register')}}">Register</a>
                  </li>

                  @endauth
                  @endif

            </ul>
          </div>
        </div>
      </nav>
</html>
