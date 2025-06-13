<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            height: 100vh;
        }
        .card {
            border: none;
            border-radius: 1.5rem;
        }
        .btn-lg {
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
        }
        .btn-google {
            background-color: white;
            color: #db4437;
            border: 1px solid #db4437;
            transition: all 0.3s ease;
        }
        .btn-google:hover {
            background-color: #db4437;
            color: white;
        }
    </style>
</head>
<body>

<div class="d-flex justify-content-center align-items-center h-100">
    <div class="card shadow-lg p-5 text-center" style="max-width: 500px; width: 100%;">
        <h1 class="mb-3 text-primary">Welcome to the Employee Portal</h1>
        <p class="lead mb-4">Login or Register to continue</p>

        <div class="d-grid gap-3 mb-3">
            <a href="loginPage" class="btn btn-primary btn-lg">Login</a>
            <a href="registerPage" class="btn btn-success btn-lg">Register</a>
        </div>

        <hr class="my-4">

        <a href="/auth/google" class="btn btn-google btn-lg me-2">
            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google Icon" style="height: 20px; margin-right: 8px;">
            Login with Google
        </a><br/>
        <a href="/auth/github" class="btn btn-dark btn-lg">
            <img src="https://www.svgrepo.com/show/512317/github-142.svg" alt="GitHub Icon" style="height: 20px; margin-right: 8px;">
            Login with GitHub
        </a>


    </div>
</div>

</body>
</html>
