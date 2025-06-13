<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        table th, table td {
            vertical-align: middle !important;
        }
        .table thead th {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="text-primary fw-bold">Admin Dashboard</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger text-center">{{ session('error') }}</div>
    @endif

    <form action="/deleteall" method="POST">
        @csrf
        <div class="d-flex justify-content-end mb-2">
            <a href="/" class="btn btn-outline-secondary me-2">
            🏠 Home
            </a>
            <button type="submit" class="btn btn-danger">Delete Selected</button>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Select</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userData as $val)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $val->id }}"></td>
                        <td>{{ $val->userName }}</td>
                        <td>{{ $val->userEmail }}</td>
                        <td>{{ $val->userPassword }}</td>
                        <td>
                            <a href="{{ url('delete/' . $val->id) }}" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                        <td>
                            <a href="{{ url('update/' . $val->id) }}" class="btn btn-sm btn-outline-primary">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
</div>

</body>
</html>
