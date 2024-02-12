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
      <nav >
        <div >
          <a  href="{{ url('/') }}">Health Management</a>

          <div  >
            <ul >
                <li >
                    <a  href="{{ url('/doctor') }}">Doctor</a>
                  </li>
                  <li >
                    <a  href="{{ url('/patient') }}">Patient</a>
                  </li>
                  <li >
                    <a  href="{{ url('/availability') }}">Availability</a>
                  </li>
                  <li >
                    <a  href="{{ url('/disease') }}">Disease</a>
                  </li>
                  <li >
                    <a  href="{{ url('/experties') }}">Experties</a>
                  </li>
                  <li >
                    <a  href="{{ url('/appointment') }}">Appointment</a>
                  </li>
                  <li >
                    <a  href="{{ url('/prescription') }}">Prescription</a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login / Create Account</a>
                  </li> --}}

                  @if (Route::has('login'))

                  @auth

                    <x-app-layout>

                    </x-app-layout>

                  @else

                  <li class="nav-item">
                    <a  href="{{route('login')}}">Login</a>
                  </li>
                  <li class="nav-item">
                    <a  href="{{route('register')}}">Register</a>
                  </li>

                  @endauth
                  @endif

            </ul>
          </div>
        </div>
      </nav>
</html>
