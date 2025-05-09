<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registered Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin-bottom: 5px;
        }
        .filter-info {
            margin-bottom: 15px;
            font-style: italic;
            font-size: 11px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 10px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>NPL Event - Registered Users</h1>
    </div>
    
    <div class="filter-info">
        @if($startDate && $endDate)
            Filtered by date: {{ $startDate }} to {{ $endDate }}
        @elseif($searchTerm)
            Search results for: "{{ $searchTerm }}"
        @else
            Showing all registrations
        @endif
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Institution</th>
                <th>Designation</th>
                <th>Registered On</th>
            </tr>
        </thead>
        <tbody>
            @forelse($registrations as $registration)
            <tr>
                <td>{{ $registration->name }}</td>
                <td>{{ $registration->email }}</td>
                <td>{{ $registration->phone }}</td>
                <td>{{ $registration->institution }}</td>
                <td>{{ $registration->designation }}</td>
                <td>{{ $registration->created_at->format('M d, Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align: center;">No registrations found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    
    <div class="footer">
        <p>© {{ date('Y') }} NPL Event Management System</p>
    </div>
</body>
</html>
