<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Laravel Hospital</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                     <div class="card-header">
                            <a href="{{ url('/doctor') }}" class="btn btn-primary my-4">Doctor</a>
                            <a href="{{ url('/create_doctor') }}" class="btn btn-primary my-4">Create Doctor</a>
                            <a href="{{ url('/patient') }}" class="btn btn-primary my-4">Patient</a>
                            <a href="{{ url('/create_patient') }}" class="btn btn-primary my-4">Create Patient</a>
                            <a href="{{ url('/catagory') }}" class="btn btn-primary my-4">catagory</a>
                            <a href="{{ url('/create_catagory') }}" class="btn btn-primary my-4">Create Catagory</a>

                    </div>
                 </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>