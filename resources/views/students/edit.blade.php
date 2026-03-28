<!DOCTYPE html>
<html>
<head>

    <title>Edit Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .card { border: none; border-radius: 15px; }
    </style>
</head>
<body class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Student Details</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('students.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $student->name }}" placeholder="Enter name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Email Address</label>
                            <input type="email" name="email" class="form-control" value="{{ $student->email }}" placeholder="Enter email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Phone Number</label>
                            <input type="number" name="phone" class="form-control" value="{{ $student->phone }}" placeholder="Enter phone number" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary shadow-sm">Update Information</button>
                            <a href="{{ route('students.index') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>