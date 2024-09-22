<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd Data</title>
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css')}}" rel="stylesheet"> <!-- AOS CSS -->
    <style>
        body {
            background-color: #121212;
            color: #fff;
        }
        .table-dark {
            background-color: #333;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-warning {
            background-color: #f0ad4e;
            color: black;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .table td, .table th {
            color: #fff;
            vertical-align: middle;
        }
        .alert-success {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>


<body>

<div class="container mt-5">
    <!-- Flash message for success -->
    @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Heading and Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>CRUD Data</h1>
        <a href="{{ route('add') }}" class="btn btn-primary">Add New Record</a>
    </div>

    <!-- Data Table -->
    <div class="table-responsive">
        <table class="table table-dark table-hover" data-aos="fade-up"
     data-aos-duration="1500" >
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Day</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
           <tbody>
              @foreach ($curd as $item)
             <tr > <!-- AOS animation applied -->
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->day }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ date_format($item->created_at, 'd-M-Y')  }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('edit', $item->id) }}" class="btn btn-warning btn-sm m-1">Edit</a>
                            <a href="{{ route('delete', $item->id) }}" class="btn btn-danger btn-sm m-1 ">Delete</a>
                        </div>
                    </td>
              </tr>
    @endforeach
</tbody>

        </table>
    </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/aos.js')}}"></script> <!-- AOS JS -->
<script>
    AOS.init();
</script>

</body>

</html>
