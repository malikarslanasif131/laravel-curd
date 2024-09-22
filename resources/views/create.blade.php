<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
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
        .btn-success {
            background-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <h1 class="mb-4">Add New Curd Record</h1>

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

    <!-- Create Form -->
    <form action="{{ route('create') }}" method="POST">
        @csrf

        <!-- Name Field -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input 
                type="text" 
                name="name" 
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}"
                required>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Day Field (Dropdown) -->
        <div class="mb-3">
            <label for="day" class="form-label">Day</label>
            <select 
                name="day" 
                class="form-select @error('day') is-invalid @enderror" 
                required>
                <option value="">Select Day</option>
                <option value="Monday" {{ old('day') == 'Monday' ? 'selected' : '' }}>Monday</option>
                <option value="Tuesday" {{ old('day') == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                <option value="Wednesday" {{ old('day') == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                <option value="Thursday" {{ old('day') == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                <option value="Friday" {{ old('day') == 'Friday' ? 'selected' : '' }}>Friday</option>
                <option value="Saturday" {{ old('day') == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                <option value="Sunday" {{ old('day') == 'Sunday' ? 'selected' : '' }}>Sunday</option>
            </select>
            @error('day')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description Field -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea 
                name="description" 
                class="form-control @error('description') is-invalid @enderror" 
                rows="3" 
                required>{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Add Record</button>
        <a href="{{ route('home')}}"  class="btn btn-light">Back </a>
    </form>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
