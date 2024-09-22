<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Add New Curd Record</h1>
    <form action="{{ route('create') }}" method="POST">
        @csrf

        <!-- Name field -->
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

        <!-- Day field -->
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

        <!-- Description field -->
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

        <!-- Submit button -->
        <button type="submit" class="btn btn-success">Add Record</button>
    </form>
</div>
</body>
</html>
