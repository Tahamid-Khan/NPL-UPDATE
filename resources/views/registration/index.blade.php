<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Participants - NPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        .registrations-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
        }
        .registrations-header {
            background: #cbaf61;
            color: white;
            padding: 20px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .registrations-header h2 {
            margin: 0;
            font-weight: 600;
        }
        .table-responsive {
            padding: 0;
        }
        .table {
            margin-bottom: 0;
        }
        .table th {
            background-color: var(--primary-light);
            color: var(--primary-dark);
            font-weight: 600;
            border-bottom: 2px solid var(--primary-color);
        }
        .table td, .table th {
            padding: 15px 20px;
            vertical-align: middle;
        }
        
        /* Enhanced Pagination Styling */
        .pagination-container {
            margin-top: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            padding: 15px;
        }
        .pagination {
            margin: 0;
            justify-content: center;
        }
        .page-item:first-child .page-link {
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }
        .page-item:last-child .page-link {
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
        }
        .page-link {
            color: #555;
            border: none;
            padding: 10px 16px;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .page-link:hover {
            background-color: #f0f0f0;
            color: var(--primary-color);
            z-index: 1;
        }
        .page-item.active .page-link {
            background-color: #cbaf61;
            border-color: #cbaf61;
            color: white;
            box-shadow: 0 4px 10px rgba(203, 175, 97, 0.3);
        }
    
        .page-link[rel="next"], .page-link[rel="prev"] {
        font-size: 20px;
        font-weight: bold;
        line-height: 1;
    }
        .page-item.disabled .page-link {
            color: #ccc;
        }
        .pagination-info {
            text-align: center;
            color: #777;
            font-size: 14px;
            margin-top: 10px;
        }
        
        .btn-add {
            background-color: white;
            color: #cbaf61;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-add:hover {
            background-color: #b69d55;
            color: white;
        }
        .empty-state {
            text-align: center;
            padding: 50px 20px;
        }
        .empty-icon {
            font-size: 60px;
            color: var(--secondary-color);
            margin-bottom: 20px;
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
