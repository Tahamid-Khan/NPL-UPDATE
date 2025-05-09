<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPL Management Free Workshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0d6efd;
            --primary-dark: #0a58ca;
            --primary-light: #e7f1ff;
        }
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }
        .registration-container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            position: relative;
        }
        .registration-header {
            background: #cbaf61;
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
        }
        .registration-header::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            right: 0;
            height: 20px;
            background: white;
            clip-path: polygon(0 0, 100% 0, 50% 100%);
        }
        .registration-header h2 {
            margin: 0;
            font-weight: 600;
            font-size: 28px;
            letter-spacing: 0.5px;
        }
        .registration-header p {
            margin-top: 10px;
            font-size: 16px;
            opacity: 0.9;
        }
        .event-details {
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            padding: 15px;
            margin: 15px auto 5px;
            max-width: 90%;
            backdrop-filter: blur(5px);
        }
        .event-details p {
            margin-bottom: 0;
            font-size: 15px;
            line-height: 1.5;
        }
        .event-details .event-date {
            font-weight: 600;
            display: inline-block;
            margin-top: 5px;
        }
        .event-details .event-time {
            font-weight: 600;
        }
        .event-details .collaboration {
            font-style: italic;
            opacity: 0.9;
            font-size: 14px;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .event-details .collaboration a {
            color: white;
            text-decoration: none;
            border-bottom: 1px dotted rgba(255, 255, 255, 0.7);
            transition: all 0.2s ease;
        }
        .event-details .collaboration a:hover {
            border-bottom-color: white;
            opacity: 1;
        }
        .registration-form {
            padding: 40px;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-label {
            font-weight: 500;
            margin-bottom: 10px;
            display: block;
            color: #444;
            font-size: 15px;
        }
        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s;
            font-size: 15px;
            background-color: #f9f9f9;
        }
        .form-control:focus {
            border-color: #cbaf61;
            box-shadow: 0 0 0 3px rgba(203, 175, 97, 0.2);
            background-color: #fff;
        }
        .error-message {
            color: #dc3545;
            font-size: 13px;
            margin-top: 5px;
        }
        .required-field::after {
            content: "*";
            color: #dc3545;
            margin-left: 4px;
        }
        .alert-danger {
            border-radius: 8px;
            border-left: 4px solid #dc3545;
        }
        .alert-danger ul {
            padding-left: 20px;
        }
        .alert-danger li {
            margin-bottom: 5px;
        }
        .submit-btn:hover {
            background-color: #cbaf61 !important;
            color: white !important;
            box-shadow: none !important;
        }
        /* Input field animation */
        .form-control:focus + .input-highlight {
            width: 100%;
        }
        .input-highlight {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #cbaf61;
            transition: width 0.3s;
        }
        /* Submit button styles */
        .submit-btn {
            background-color: #cbaf61;
            color: white;
            border: none;
            padding: 10px 20px;
            font-weight: 500;
            border-radius: 5px;
            min-width: 200px;
            width: auto;
        }
        /* Logo styles */
        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
            gap: 30px;
        }
        .logo-container img {
            height: 60px;
            object-fit: contain;
            border-radius: 5px;
            padding: 5px;
            background-color: white;
            margin: -2px;
            width: 138px;
        }
        .logo-container img.transparent-bg {
            background-color: transparent;
            padding: 5px;
        }
        .collaboration-logo {
            height: 30px;
            vertical-align: middle;
            margin-left: 5px;
            background-color: transparent;
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .registration-form {
                padding: 30px 20px;
            }
            .registration-header h2 {
                font-size: 24px;
            }
            .btn-container {
                width: 100%;
            }
            .submit-btn {
                width: 100%;
                min-width: 100%;
            }
            .logo-container {
                flex-direction: column;
                gap: 15px;
            }
            .logo-container img {
                height: 50px;
                width: 115px;
            }
            .collaboration-logo {
                height: 25px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="registration-container">
            <div class="registration-header">
                <!-- Add the logo container here -->
                <div class="logo-container">
                    <img src="{{ asset('logo/NPL.png') }}" alt="NPL Logo">
                </div>
                <h2>Mastering NPL Management Free Workshop</h2>
                <div class="event-details">
                  
                    <p><span class="event-date">Saturday, 17 May 2025</span> • <span class="event-time">10:30 AM - 12:30 PM</span></p>
                    <p class="collaboration">
                        Joint Collaboration with 
                        <a href="https://p2msoft.com/" target="_blank">
                            <img src="{{ asset('logo/P2M Logo.png') }}" alt="P2M Logo" class="transparent-bg collaboration-logo">
                        </a>
                    </p>
                </div>
                <p class="mb-0 mt-3">Please fill out the form below to register</p>
            </div>
            
            <div class="registration-form">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="/register/store" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name" class="form-label required-field">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter your full name">
                        @error('name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone" class="form-label required-field">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="Enter your phone number">
                                @error('phone')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label required-field">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email address">
                                @error('email')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="institution" class="form-label required-field">Name of Institution</label>
                        <input type="text" class="form-control" id="institution" name="institution" value="{{ old('institution') }}" required placeholder="Enter your institution name">
                        @error('institution')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="designation" class="form-label required-field">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" value="{{ old('designation') }}" required placeholder="Enter your designation">
                        @error('designation')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="d-flex justify-content-end mt-4 btn-container">
                        <button type="submit" class="btn submit-btn">
                            <i class="fas fa-paper-plane me-2"></i>Submit Registration
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
