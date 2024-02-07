<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Curd</title>
  </head>
  <body>
    <div class="container">
        <a href="{{ url('/home') }}" class="btn btn-primary my-4">Back</a>
        <form method="post" action="{{route('doctor.store')}}">
             @csrf 
             @method('post')
            <div class="mb-3">
                <label for="" >Name</label>
                <input type="text" name="name"  class="form-control" placeholder="Enter Your Name">
                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
              </div>
              </div>
                <label for="" >Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
              </div>
              <div class="mb-3">
                <div class="mb-3">
                    <label for="" >Phone Number</label>
                    <input type="text" name="phone"  class="form-control" placeholder="Enter Your Phone Number">
                    @error('contact')<span class="text-danger">{{ $message }}</span>@enderror
              </div>
              <div class="mb-3">
                    <label for="" >Speciality</label>
                    <input type="text" name="speciality"  class="form-control" placeholder="Enter Your Speciality">
                    @error('contact')<span class="text-danger">{{ $message }}</span>@enderror
              </div>
              <div class="mb-3">
                    <label for="" >Clinic Name</label>
                    <input type="text" name="clinic"  class="form-control" placeholder="Enter Your Clinic Name">
                    @error('contact')<span class="text-danger">{{ $message }}</span>@enderror
              </div>
            <div class="mb-3">
                <label for="" >Address</label>
                <input type="text" name="address"  class="form-control" placeholder="Enter Your Full Address">
                @error('address')<span class="text-danger">{{ $message }}</span>@enderror
              </div>

              <div class="mb-3">
                    <label for="" >Gender</label>
                    <input type="text" name="gender"  class="form-control" placeholder="Enter Your Gender">
                    @error('contact')<span class="text-danger">{{ $message }}</span>@enderror
              </div>

            <input type="submit" class="btn btn-primary my-4" value="Submit">
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>