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
                            <a href="{{ url('/appointment') }}" class="btn btn-primary my-4">Appointment</a>
                            <a href="{{ url('/create_appointment') }}" class="btn btn-primary my-4">Create Appointment</a>
                            <a href="{{ url('/prescription') }}" class="btn btn-primary my-4">Prescription</a>
                            <a href="{{ url('/create_prescription') }}" class="btn btn-primary my-4">Create Prescription</a>
                        <div class="card-body">
                            <table class="table table-brodered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Phone Number</th>
                                        <th>Speciality</th>
                                        <th>Clinic Name</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($doctors as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->speciality }}</td>
                                        <td>{{ $item->clinic }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->gender }}</td>

                                        <td>
                                            <a href="{{ url('doctor/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                            <a
                                            href="{{ url('doctor/'.$item->id.'/delete') }}"
                                            class="btn btn-danger mx-1"
                                            onclick="return confirm('Are You Sure?')"
                                            >
                                            Delete
                                        </a>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>


                            </table>



                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
