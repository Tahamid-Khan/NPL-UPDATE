<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - NPL Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        /* Base Styles */
        :root {
            --primary-color: #4361ee;
            --primary-light: #eaefff;
            --secondary-color: #3f37c9;
            --success-color: #0bb07b;
            --info-color: #2196f3;
            --warning-color: #f48c06;
            --danger-color: #e63946;
            --dark-color: #212529;
            --gray-dark: #343a40;
            --gray: #6c757d;
            --gray-light: #f8f9fa;
            --gray-200: #e9ecef;
            --gray-300: #dee2e6;
            --border-color: #e0e0e0;
            --border-radius: 10px;
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fb;
            color: var(--gray-dark);
            min-height: 100vh;
            padding: 30px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .card {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
        }

        .card-header {
            padding: 25px;
            border-bottom: 1px solid var(--border-color);
        }

        .card-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 10px;
        }

        .card-subtitle {
            font-size: 14px;
            color: var(--gray);
        }

        .card-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            font-weight: 500;
            font-size: 14px;
            color: var(--gray-dark);
            margin-bottom: 10px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.15);
        }

        .error-message {
            color: var(--danger-color);
            font-size: 13px;
            margin-top: 5px;
        }

        .btn-group {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 20px;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .btn-secondary {
            background-color: var(--gray-light);
            color: var(--gray-dark);
        }

        .btn-secondary:hover {
            background-color: var(--gray-300);
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Edit User</h1>
                <p class="card-subtitle">Update user information</p>
            </div>
            <div class="card-body">
         <!-- Update the form fields to match Registration model -->
<form action="{{ route('admin.users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        @error('name')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        @error('email')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}" required>
        @error('phone')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="institution" class="form-label">Institution</label>
        <input type="text" id="institution" name="institution" class="form-control" value="{{ old('institution', $user->institution) }}" required>
        @error('institution')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="designation" class="form-label">Designation</label>
        <input type="text" id="designation" name="designation" class="form-control" value="{{ old('designation', $user->designation) }}" required>
        @error('designation')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="btn-group">
        <a href="{{ route('admin.registered-users') }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Update Registration</button>
    </div>
</form>

            </div>
        </div>
    </div>
</body>
</html>
