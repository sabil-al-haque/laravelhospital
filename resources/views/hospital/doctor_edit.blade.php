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
    <div class="container">
        <a href="{{ url('/doctor') }}" class="btn btn-primary my-4">Back</a>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form action="{{ url('doctor/'.$doctors->id.'/edit') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $doctors->name }}" class="form-control" placeholder="Enter Your Name">
                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="mb-3">
                <label for="email">Email address</label>
                <input type="email" name="email" value="{{ $doctors->email }}" class="form-control" placeholder="Enter Your Email Address">
                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="mb-3">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" value="{{ $doctors->phone }}" class="form-control" placeholder="Enter Your Phone Number">
                @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" value="{{ $doctors->gender }}" class="form-select">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                @error('gender')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" name="address" value="{{ $doctors->address }}" class="form-control" placeholder="Enter Your Full Address">
                @error('address')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="address">Degree</label>
                <input type="text" name="degree" value="{{ $doctors->degree }}" class="form-control" placeholder="Enter Your Degree">
                @error('address')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="address">Current Clinic</label>
                <input type="text" name="clinic" value="{{ $doctors->clinic }}" class="form-control" placeholder="Enter Your Current Clinic Name">
                @error('address')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="address">Password</label>
                <input type="password" name="Password" value="{{ $doctors->Password }}" class="form-control" placeholder="Enter Your Password">
                @error('address')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="address">Experties</label>
                <input type="number" name="experties_id" value="{{ $doctors->experties_id }}" class="form-control" placeholder="Enter Experties">
                @error('address')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <input type="submit" class="btn btn-primary my-4" value="Submit">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
