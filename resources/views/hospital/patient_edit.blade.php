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
    <div class="container">
        <a href="{{ url('/patient') }}" class="btn btn-primary my-4">Back</a>
        @if (session('status'))
        <div class="alert alert-success"> {{ session('status') }}</div>
        @endif

        <form action="{{ url('patient/'.$patients->id.'/edit') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $patients->name }}" class="form-control" placeholder="Enter Your Name">
                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="mb-3">
                <label for="email">Email address</label>
                <input type="email" name="email" value="{{ $patients->email }}" class="form-control" placeholder="Enter Your Email Address">
                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="mb-3">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" value="{{ $patients->phone }}" class="form-control" placeholder="Enter Your Phone Number">
                @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="mb-3">
                <label for="symptom">Symptom</label>
                <input type="text" name="symtom" value="{{ $patients->symtom }}" class="form-control" placeholder="Enter Your Symptom">
                @error('symptom')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="mb-3">
                <label for="disease">Disease</label>
                <input type="text" name="disease" value="{{ $patients->disease }}" class="form-control" placeholder="Enter Your Disease">
                @error('disease')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" class="form-select">
                    <option value="male" {{ $patients->gender == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $patients->gender == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ $patients->gender == 'other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('gender')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" name="address" value="{{ $patients->address }}" class="form-control" placeholder="Enter Your Full Address">
                @error('address')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <input type="submit" class="btn btn-primary my-4" value="Submit">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
