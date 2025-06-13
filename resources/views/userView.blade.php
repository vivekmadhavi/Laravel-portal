<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-lg rounded-4">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Welcome, {{ $userData->userName }}</h4>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Name:</strong> {{ $userData->userName }}
                            </li>
                            <li class="list-group-item">
                                <strong>Email:</strong> {{ $userData->userEmail }}
                            </li>
                            <li class="list-group-item">
                                <strong>Role:</strong> {{ $userData->role ?? 'Employee' }}
                            </li>
                        </ul>

                        <div class="mt-4 text-center">
                            <a href="/logout" class="btn btn-outline-danger">Logout</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
