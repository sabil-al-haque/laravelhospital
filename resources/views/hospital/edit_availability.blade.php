<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Management</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Health Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="{{ url('/experties') }}">Expertise</a>
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

    <div class="container mt-4">
        <a href="{{ url('/availability') }}" class="btn btn-primary my-4">Back</a>

        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form action="{{ url('availability/'.$availabilities->id.'/edit') }}" method="POST">
            @csrf
            @method('PUT')

            <h1 class="mb-4">Edit Doctor Availabilities</h1>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $availabilities->title }}"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="doctorsId">Doctor's ID</label>
                    <input type="text" class="form-control" id="doctorsId" name="doctors_id"
                        value="{{ $availabilities->doctors_id }}" required>
                </div>
            </div>

            <div class="form-group">
                <label for="day">Day</label>
                <select name="day" class="form-select">
                    <option value="Sunday" @if($availabilities->day == 'Sunday') selected @endif>Sunday</option>
                    <option value="Monday" @if($availabilities->day == 'Monday') selected @endif>Monday</option>
                    <option value="Tuesday" @if($availabilities->day == 'Tuesday') selected @endif>Tuesday</option>
                    <option value="Wednesday" @if($availabilities->day == 'Wednesday') selected @endif>Wednesday</option>
                    <option value="Thursday" @if($availabilities->day == 'Thursday') selected @endif>Thursday</option>
                    <option value="Friday" @if($availabilities->day == 'Friday') selected @endif>Friday</option>
                    <option value="Saturday" @if($availabilities->day == 'Saturday') selected @endif>Saturday</option>
                </select>
                @error('day')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="startTime">Start Time</label>
                    <input type="time" class="form-control" id="startTime" name="start_time"
                        value="{{ $availabilities->start_time }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="endTime">End Time</label>
                    <input type="time" class="form-control" id="endTime" name="end_time"
                        value="{{ $availabilities->end_time }}" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update Availability</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
