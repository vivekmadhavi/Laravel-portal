<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6">
        <div class="card p-4 shadow rounded-4">
            <h2 class="text-center mb-4">Register Page</h2>

            {{-- Success/Error Flash Messages --}}
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            {{-- Validation Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/RegisterData" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="userName" class="form-label">Name</label>
                    <input type="text" name="userName" class="form-control" value="{{ old('userName') }}">
                </div>

                <div class="mb-3">
                    <label for="userEmail" class="form-label">Email</label>
                    <input type="email" name="userEmail" class="form-control" value="{{ old('userEmail') }}">
                </div>

                <div class="mb-3">
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" name="userPassword" class="form-control">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>
            <div class="mt-3 text-center">
                <a href="/" class="btn btn-outline-secondary">🏠 Back to Home</a>
            </div>

        </div>
    </div>
</div>

</body>
</html>
