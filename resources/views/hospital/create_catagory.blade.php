<!doctype html>
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

        <a href="{{ url('/catagory') }}" class="btn btn-primary my-4">Back</a>
        @if (session('status'))
        <div class="alert alert-success"> {{ session('status') }}</div>
        @endif
        <form method="post" action="{{route('catagory.store')}}">
             @csrf
             @method('post')
            <div class="mb-3">
                <label for="" >Category Name</label>
                <input type="text" name="catagory" class="form-control" placeholder="Enter Category Name">
                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
              </div>
              <div class="mb-3">
                    <label for="" >Sub Category</label>
                    <input type="text" name="sub_catagory"  class="form-control" placeholder="Sub Category">
                    @error('sub_category')<span class="text-danger">{{ $message }}</span>@enderror
            <input type="submit" class="btn btn-primary my-4" value="Submit">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
