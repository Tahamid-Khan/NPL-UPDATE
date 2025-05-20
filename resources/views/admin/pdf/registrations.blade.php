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
    table-layout: fixed; /* Fixed table layout for better column control */
}
th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    vertical-align: top;
    word-wrap: break-word; /* Allow words to break */
    overflow-wrap: break-word;
    hyphens: auto; /* Enable hyphenation */
    max-width: 100%; /* Ensure content doesn't exceed column width */
}
th {
    background-color: #f2f2f2;
    font-weight: bold;
    font-size: 11px;
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

/* Improved table column sizing */
.event-table { 
    table-layout: fixed; 
    width: 100%; 
}

.event-table td { 
    word-wrap: break-word;
    overflow-wrap: break-word;
    white-space: normal;
    vertical-align: top;
    line-height: 1.4;
    padding: 8px 10px;
    font-size: 11px;
}

/* Column width adjustments */
.event-table th:nth-child(1), 
.event-table td:nth-child(1) { 
    width: 18%; /* Name column */
}

.event-table th:nth-child(2), 
.event-table td:nth-child(2) { 
    width: 22%; /* Email column */
}

.event-table th:nth-child(3), 
.event-table td:nth-child(3) { 
    width: 15%; /* Phone column */
}

.event-table th:nth-child(4), 
.event-table td:nth-child(4) { 
    width: 20%; /* Institution column */
}

.event-table th:nth-child(5), 
.event-table td:nth-child(5) { 
    width: 15%; /* Designation column */
}

.event-table th:nth-child(6), 
.event-table td:nth-child(6) { 
    width: 10%; /* Date column */
}

/* Text truncation with ellipsis for very long content */
.event-table td {
    position: relative;
    max-height: 100px; /* Limit height for very long content */
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Ensure table container allows proper rendering */
.event-table-container {
    width: 100%;
    overflow: hidden;
}

/* Ensure PDF rendering works well */
@page {
    margin: 0.5cm;
}

@media print {
    body {
        font-size: 10pt;
    }
    
    table {
        page-break-inside: auto;
    }
    
    tr {
        page-break-inside: avoid;
        page-break-after: auto;
    }
    
    thead {
        display: table-header-group;
    }
    
    tfoot {
        display: table-footer-group;
    }
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
