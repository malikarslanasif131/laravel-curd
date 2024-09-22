<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Curd Record</title>
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: white;
        }
        .form-control, .form-select {
            background-color: #333;
            color: white;
            border: 1px solid #555;
        }
        .form-control:focus, .form-select:focus {
            background-color: #222;
            border-color: #007bff;
            color: white;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <h1 class="mb-4">Edit Curd Record</h1>

    <!-- Validation Error Display -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Form -->
    <form action="{{ route('update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $curd->id }}">

        <!-- Name Field -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $curd->name }}" required>
        </div>

        <!-- Day Field (Dropdown) -->
        <div class="mb-3">
            <label for="day" class="form-label">Day</label>
            <select name="day" class="form-select" required>
                <option value="" disabled>Select Day</option>
                <option value="Monday" {{ $curd->day == 'Monday' ? 'selected' : '' }}>Monday</option>
                <option value="Tuesday" {{ $curd->day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                <option value="Wednesday" {{ $curd->day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                <option value="Thursday" {{ $curd->day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                <option value="Friday" {{ $curd->day == 'Friday' ? 'selected' : '' }}>Friday</option>
                <option value="Saturday" {{ $curd->day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                <option value="Sunday" {{ $curd->day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
            </select>
        </div>

        <!-- Description Field -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $curd->description }}</textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Record</button>
        <a href="{{ route('home')}}"  class="btn btn-light">Back </a>
    </form>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
