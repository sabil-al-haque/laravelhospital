<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Appointment Form</title>
</head>
<body>

<div class="container mt-5">
        @if (session('status'))
        <div class="alert alert-success"> {{ session('status') }}</div>
        @endif
    <form action="{{route('appointment.store')}}" method="POST">
             @csrf 
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="patientName">Patient Name</label>
                <input type="text" name="name" class="form-control" id="patientName" placeholder="Enter patient name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="Enter age" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
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
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="Enter city" required>
            </div>
            <div class="form-group col-md-6">
                <label for="area">Area</label>
                <input type="text" name="area" class="form-control" id="area" placeholder="Enter area" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="zipCode">Zip Code</label>
                <input type="text" name="zip" class="form-control" id="zip" placeholder="Enter zip code" required>
            </div>
            <div class="form-group col-md-6">
                <label for="appointmentDate">Appointment Date</label>
                <input type="date" name="date" class="form-control" id="date" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="availability">Availability</label>
                <input type="text" name="availability" class="form-control" id="availability" placeholder="Enter availability" required>
            </div>
            <div class="form-group col-md-6">
                <label for="startTime">Start From</label>
                <input type="time" name="start" class="form-control" id="start" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="endTime">Ends On</label>
                <input type="time" name="end" class="form-control" id="end" required>
            </div>
            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status" required>
                    <option value="scheduled">Scheduled</option>
                    <option value="cancelled">Cancelled</option>
                    <option value="completed">Completed</option>
                </select>
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