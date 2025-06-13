<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow rounded-4 p-4">

                <h2 class="text-center text-primary mb-4">Update User Data</h2>

                <form action="/userUpdates" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $userDetail->id }}"/>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $userDetail->userName }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $userDetail->userEmail }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password 
                            @if(empty($userDetail->userPassword))
                                <span class="text-muted">(Google Login - Not Editable)</span>
                            @endif
                        </label>
                        <input 
                            type="text" 
                            name="password" 
                            class="form-control" 
                            value="{{ $userDetail->userPassword }}" 
                            {{ empty($userDetail->userPassword) ? 'readonly' : '' }}
                        >
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>

                </form>

                <div class="text-center">
                    <a href="/admindashboard" class="btn btn-outline-secondary">← Back to Admin Dashboard</a>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>
