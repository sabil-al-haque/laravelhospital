<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Patient Prescription View</title>
</head>
<body>

<div class="container mt-5">
    <h2>{{ $patientData->name }} Prescription</h2>
    <table class="table mt-4">
        <tbody>
            <tr>
                <th scope="row">Patient's Name</th>
                <td>{{ $patientData->name }}</td>
            </tr>
            <tr>
                <th scope="row">Age</th>
                <td>{{ $patientData->age }}</td>
            </tr>
            <tr>
                <th scope="row">Date</th>
                <td>{{ $patientData->date }}</td>
            </tr>
            <tr>
                <th scope="row">Phone & Email</th>
                <td>{{ $patientData->phone }} | {{ $patientData->email }}</td>
            </tr>
            <tr>
                <th scope="row">Address</th>
                <td>{{ $patientData->address }}</td>
            </tr>
            <tr>
                <th scope="row">Medication Details</th>
                <td>{{ $patientData->medicationDetails }}</td>
            </tr>
            <tr>
                <th scope="row">Additional Information</th>
                <td>{{ $patientData->additionalInformation }}</td>
            </tr>
            <tr>
                <th scope="row">Doctor's Signature</th>
                <td>{{ $patientData->doctorsSignature }}</td>
            </tr>
            <tr>
                <th scope="row">Signed Date</th>
                <td>{{ $patientData->signedDate }}</td>
            </tr>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>