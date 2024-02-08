<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Patient Information Form</title>
</head>
<body>

<div class="container mt-5">
<a href="{{ url('/home') }}" class="btn btn-primary my-4">Back</a>
<form method="post" action="{{route('prescription.store')}}">
             @csrf 
             @method('post')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="patientName">Patient's Name</label>
                <input type="text" name="name" class="form-control" id="patientName" placeholder="Enter patient's name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="Enter age" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" id="date" required>
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter phone number" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Enter address" required>
            </div>
        </div>
        <div class="form-group">
            <label for="medicationDetails">Medication Details</label>
            <textarea class="form-control" name="medication" id="medicationDetails" rows="3" placeholder="Enter medication details"></textarea>
        </div>
        <div class="form-group">
            <label for="additionalInformation">Additional Information</label>
            <textarea class="form-control" name="additional_inf" id="additionalInformation" rows="3" placeholder="Enter additional information"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="doctorsSignature">Doctor's Signature</label>
                <input type="text" name="sign_of_doctor" class="form-control" id="doctorsSignature" placeholder="Enter doctor's signature" required>
            </div>
            <div class="form-group col-md-6">
                <label for="signedDate">Signed Date</label>
                <input type="date" name="signed_date" class="form-control" id="signedDate" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>