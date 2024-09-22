<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h1 class="mb-4">Curd Data</h1>
    <a href="{{ route('add') }}" class="btn btn-primary mb-3">Add New Record</a>
    
    @foreach ($curd as $item)
        <div class="card mb-3">
            <div class="card-body">
                <h3>{{ $item->name }}</h3>
                <p><strong>Day:</strong> {{ $item->day }}</p>
                <p>{{ $item->description }}</p>
                <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('delete', $item->id) }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
