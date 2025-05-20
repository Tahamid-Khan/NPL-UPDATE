
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>NPL Management Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">   
</head>
<body>
    <div class="container">
        <div class="registration-container">
            <div class="registration-header">
                <!-- Updated header with logo containers positioned at left and right with equal height -->
                <div class="header-logos">
                    <div class="logo-container">
                        <img src="{{ asset('logo/NPL.png') }}" alt="NPL Logo">
                    </div>
                    <div class="collaboration-logo-container">
                        <a href="https://p2msoft.com/" target="_blank">
                            <img src="{{ asset('logo/P2M Logo.png') }}" alt="P2M Logo">
                        </a>
                    </div>
                </div>
                
                <h2>Training to Master NPL Management</h2>
                <!-- Updated with larger font size and uppercase -->
                <div class="free-online-text">FREE & ONLINE</div>
                <!-- Updated with increased font size and reduced gap -->
                <p class="qa-session-text">Live Q & A Session</p>
                
                <div class="event-details">
                    <p>
                        <span class="event-date">Saturday, 17-May-2025</span> • 
                        <span class="event-time">Start Time: 9 PM</span>
                    </p>
                    
                    <p class="">
                        Jointly organized by: Versatile Finance & Management Associates and Project 2morrow Software Ltd.
                    </p>
                </div>
                
                <p class="register-prompt">Please fill out the form below to register and uplift your career</p>
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
                
                <form  action="{{ url('/register/store') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name" class="form-label required-field">Full Name</label>
                        <div class="input-container">
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter your full name">
                            <div class="input-highlight"></div>
                        </div>
                        @error('name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone" class="form-label required-field">Phone Number</label>
                                <div class="input-container">
                                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="Enter your phone number">
                                    <div class="input-highlight"></div>
                                </div>
                                @error('phone')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label required-field">Email Address</label>
                                <div class="input-container">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email address">
                                    <div class="input-highlight"></div>
                                </div>
                                @error('email')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="institution" class="form-label required-field">Name of Institution</label>
                        <div class="input-container">
                            <input type="text" class="form-control" id="institution" name="institution" value="{{ old('institution') }}" required placeholder="Enter your institution name">
                            <div class="input-highlight"></div>
                        </div>
                        @error('institution')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="designation" class="form-label required-field">Designation</label>
                        <div class="input-container">
                            <input type="text" class="form-control" id="designation" name="designation" value="{{ old('designation') }}" required placeholder="Enter your designation">
                            <div class="input-highlight"></div>
                        </div>
                        @error('designation')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="btn-container">
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