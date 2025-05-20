<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Participants - NPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/r_indexfile.css') }}">   
    <style>
        :root {
            --primary-color: #0d6efd;
            --primary-dark: #0a58ca;
            --primary-light: #e7f1ff;
            --secondary-color: #6c757d;
        }
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px 0;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="registrations-container">
            <div class="registrations-header">
                <h2><i class="fas fa-users me-2"></i>Registered Participants</h2>
                <a href="{{ route('registration.form') }}" class="btn btn-add">
                    <i class="fas fa-plus me-1"></i> Registration Form
                </a>
            </div>
            
            <div class="table-responsive">
                @if(count($registrations) > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Institution</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Registration Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($registrations as $index => $registration)
                                <tr>
                                    <td>{{ $registrations->firstItem() + $index }}</td>
                                    <td>{{ $registration->name }}</td>
                                    <td>{{ $registration->email }}</td>
                                    <td>{{ $registration->phone }}</td>
                                    <td>{{ $registration->institution }}</td>
                                    <td>{{ $registration->designation }}</td>
                                    <td>{{ $registration->created_at->format('M d, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="empty-state">
                        <div class="empty-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h4>No Registrations Found</h4>
                        <p class="text-muted">There are no registered participants yet.</p>
                        <a href="{{ route('registration.form') }}" class="btn btn-primary mt-3">
                            <i class="fas fa-plus me-2"></i>Add First Registration
                        </a>
                    </div>
                @endif
            </div>
        </div>
        
        @if(count($registrations) > 0)
            <div class="pagination-container">
                {{ $registrations->links() }}
                <div class="pagination-info">
                    Showing {{ $registrations->firstItem() }} to {{ $registrations->lastItem() }} of {{ $registrations->total() }} registrations
                </div>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
