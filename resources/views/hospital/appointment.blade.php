<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>{{ $appointmentData->patient_name }} Appointment Details</title>
</head>
<body>

<div class="container mt-5">
    <h2>{{ $appointmentData->patient_name }} Appointment Details</h2>
    <table class="table mt-4">
        <tbody>
            <tr>
                <th scope="row">Patient's Name</th>
                <td>{{ $appointmentData->patient_name }}</td>
            </tr>
            <tr>
                <th scope="row">Age</th>
                <td>{{ $appointmentData->age }}</td>
            </tr>
            <tr>
                <th scope="row">Gender</th>
                <td>{{ $appointmentData->gender }}</td>
            </tr>
            <tr>
                <th scope="row">Phone & Email</th>
                <td>{{ $appointmentData->phone }} | {{ $appointmentData->email }}</td>
            </tr>
            <tr>
                <th scope="row">Address</th>
                <td>{{ $appointmentData->address }}</td>
            </tr>
            <tr>
                <th scope="row">City</th>
                <td>{{ $appointmentData->city }}</td>
            </tr>
            <tr>
                <th scope="row">Area</th>
                <td>{{ $appointmentData->area }}</td>
            </tr>
            <tr>
                <th scope="row">Zip Code</th>
                <td>{{ $appointmentData->code }}</td>
            </tr>
            <tr>
                <th scope="row">Appointment Date</th>
                <td>{{ $appointmentData->date }}</td>
            </tr>
            <tr>
                <th scope="row">Start From</th>
                <td>{{ $appointmentData->startfrom }}</td>
            </tr>
            <tr>
                <th scope="row">Ends On</th>
                <td>{{ $appointmentData->endson }}</td>
            </tr>
            <tr>
                <th scope="row">Status</th>
                <td>{{ $appointmentData->status }}</td>
            </tr>
        </tbody>
    </table>

    <div class="mt-3">
        <a href="{{ route('appointment.edit', ['id' => $appointmentData->id]) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('appointment.destroy', ['id' => $appointmentData->id]) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this appointment?')">Delete</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>