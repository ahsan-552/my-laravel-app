<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <div class="card">
        <div class="card-header"><h4>Add New Student</h4></div>
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Phone</label>
                    <input type="number" name="phone" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Save Student</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</body>
</html>