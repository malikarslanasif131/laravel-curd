<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Curd Record</h1>
    <form action="{{ route('update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $curd->id }}">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $curd->name }}" required>
        </div>
        <div class="mb-3">
            <label for="day" class="form-label">Day</label>
            <select name="day" class="form-select" required>
                <option value="">Select Day</option>
                <option value="Monday" {{ $curd->day == 'Monday' ? 'selected' : '' }}>Monday</option>
                <option value="Tuesday" {{ $curd->day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                <option value="Wednesday" {{ $curd->day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                <option value="Thursday" {{ $curd->day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                <option value="Friday" {{ $curd->day == 'Friday' ? 'selected' : '' }}>Friday</option>
                <option value="Saturday" {{ $curd->day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                <option value="Sunday" {{ $curd->day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $curd->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Record</button>
    </form>
</div>
</body>
</html>
