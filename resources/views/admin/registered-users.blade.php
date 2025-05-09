<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NPL Admin - Registered Users</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Datepair CSS -->
    <link rel="stylesheet" href="https://jonthornton.github.io/Datepair.js/dist/datepair.css">
    <style>
        /* Base Styles */
        :root {
            --primary-color: #4361ee;
            --primary-light: #eaefff;
            --secondary-color: #3f37c9;
            --success-color: #0bb07b;
            --danger-color: #e63946;
            --dark-color: #212529;
            --gray: #6c757d;
            --gray-light: #f8f9fa;
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
            color: var(--dark-color);
            min-height: 100vh;
            display: flex;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        button {
            cursor: pointer;
            border: none;
            outline: none;
            background: none;
        }

        /* Layout */
        .app-container {
            display: flex;
            width: 100%;
        }

        /* Sidebar */
        .sidebar {
            width: 280px;
            background-color: white;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            z-index: 100;
            display: flex;
            flex-direction: column;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar.collapsed .logo span,
        .sidebar.collapsed .nav-section-title,
        .sidebar.collapsed .nav-link span {
            display: none;
        }

        .sidebar.collapsed .nav-link {
            justify-content: center;
            padding: 12px 0;
        }

        .sidebar.collapsed .nav-link i {
            margin-right: 0;
        }

        .sidebar.collapsed .nav-dropdown .nav-link {
            padding-left: 0;
        }

        .sidebar-header {
            padding: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--border-color);
        }

        .sidebar-header .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }

        .sidebar-header .logo-icon {
            width: 35px;
            height: 35px;
            background-color: var(--primary-color);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 12px;
        }

        .toggle-sidebar {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--gray-light);
            color: var(--gray);
            transition: var(--transition);
        }

        .toggle-sidebar:hover {
            background-color: var(--primary-light);
            color: var(--primary-color);
        }

        .sidebar-content {
            flex: 1;
            padding: 20px 0;
            overflow-y: auto;
        }

        .nav-section {
            margin-bottom: 30px;
        }

        .nav-section-title {
            text-transform: uppercase;
            font-size: 12px;
            color: var(--gray);
            font-weight: 600;
            padding: 0 25px;
            margin-bottom: 15px;
        }

        .nav-item {
            margin-bottom: 5px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 25px;
            color: var(--dark-color);
            font-weight: 500;
            border-radius: 0;
            transition: var(--transition);
        }

        .nav-link i {
            width: 20px;
            font-size: 18px;
            margin-right: 15px;
            color: var(--gray);
            transition: var(--transition);
        }

        .nav-link:hover {
            background-color: var(--primary-light);
            color: var(--primary-color);
        }

        .nav-link:hover i {
            color: var(--primary-color);
        }

        .nav-link.active {

            font-weight: 600;
        }



        .nav-dropdown {
            height: 0;
            overflow: hidden;
            transition: var(--transition);
        }

        .nav-dropdown.show {
            height: auto;
        }

        .nav-dropdown .nav-link {
            padding-left: 60px;
        }

        /* Main content */
        .main-content {
            flex: 1;
            margin-left: 280px;
            width: calc(100% - 280px);
            transition: var(--transition);
            padding: 30px;
        }

        .main-content.expanded {
            margin-left: 80px;
            width: calc(100% - 80px);
        }

        /* Header */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: var(--dark-color);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-box {
            position: relative;
            width: 280px;
        }

        .search-box input {
            width: 100%;
            padding: 12px 20px 12px 45px;
            border-radius: 8px;
            background-color: white;
            box-shadow: var(--box-shadow);
            border: none;
        }

        .search-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            font-size: 18px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            overflow: hidden;
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-role {
            font-size: 12px;
            color: var(--gray);
        }

        /* Event List */
        .event-list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .event-list-actions {
            display: flex;
            gap: 15px;
        }

        .calendar-button {
            padding: 10px 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: var(--gray-light);
            color: var(--dark-color);
            font-weight: 500;
            transition: var(--transition);
        }

        .calendar-button:hover {
            background-color: var(--primary-light);
            color: var(--primary-color);
        }

        .calendar-button.primary {
            background-color: var(--primary-color);
            color: white;
        }

        .calendar-button.primary:hover {
            background-color: var(--secondary-color);
        }

        /* Date Range Picker */
        .date-range-picker {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: white;
            padding: 15px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            margin-bottom: 20px;
        }

        .date-range-picker label {
            font-weight: 600;
            font-size: 14px;
            color: var(--dark-color);
        }

        .date-range-picker .date-inputs {
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 1;
        }

        .date-range-picker .date-input {
            position: relative;
            flex: 1;
        }

        .date-range-picker input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 14px;
            color: var(--dark-color);
        }

        .date-range-picker .date-input i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            pointer-events: none;
        }

        .ui-datepicker .ui-datepicker-title select {
            font-size: 1em;
            margin: 7px 2px;
        }

        .ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all {
            left: 539.867px;
        }

        .date-range-picker .filter-button {
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 6px;
            font-weight: 500;
            transition: var(--transition);
        }

        .date-range-picker .filter-button:hover {
            background-color: var(--secondary-color);
        }

        .date-range-picker .reset-button {
            padding: 10px 20px;
            background-color: var(--gray-light);
            color: var(--dark-color);
            border-radius: 6px;
            font-weight: 500;
            transition: var(--transition);
        }

        .date-range-picker .reset-button:hover {
            background-color: #e9ecef;
        }

        .event-table-container {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
        }

        .event-table {
            width: 100%;
            border-collapse: collapse;
        }

        .event-table th {
            background-color: #f8f9fa;
            text-align: left;
            font-weight: 600;
            font-size: 14px;
            color: var(--dark-color);
            border-bottom: 1px solid var(--border-color);
            padding: 15px 20px;
            white-space: nowrap;
        }

        .event-table td {
            padding: 15px 20px;
            font-size: 14px;
            border-bottom: 1px solid var(--border-color);
            vertical-align: middle;
        }

        .event-table tr:last-child td {
            border-bottom: none;
        }

        .event-table tr:hover {
            background-color: #f8f9fa;
        }

        .table-title {
            font-weight: 600;
        }

        .table-actions {
            display: flex;
            gap: 10px;
        }

        .table-action {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--gray-light);
            color: var(--gray);
            transition: var(--transition);
        }

        .table-action:hover {
            background-color: var(--primary-light);
            color: var(--primary-color);
        }

        .table-action.delete:hover {
            background-color: #fdeaea;
            color: var(--danger-color);
        }

        .pagination {
            display: flex;
            justify-content: center;
            padding: 20px;
            gap: 5px;
        }

        .page-item {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background-color: var(--gray-light);
            color: var(--dark-color);
            font-weight: 500;
            transition: var(--transition);
            cursor: pointer;
        }

        .page-item:hover {
            background-color: var(--primary-light);
            color: var(--primary-color);
        }

        .page-item.active {
            background-color: var(--primary-color);
            color: white;
            cursor: default;
        }

        .page-item.disabled {
            opacity: 0.5;
            cursor: not-allowed;
            pointer-events: none;
        }

        .nav-link-toggle {
            position: relative;
            justify-content: space-between;
        }

        .toggle-icon {
            transition: transform 0.3s ease;
            font-size: 12px;
            margin-left: auto;
        }

        .nav-link-toggle.active .toggle-icon {
            transform: rotate(180deg);
        }

        .sidebar.collapsed .toggle-icon {
            display: none;
        }

        /* Responsive design */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
                box-shadow: none;
            }

            .sidebar.show {
                transform: translateX(0);
                box-shadow: var(--box-shadow);
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .header-actions {
                width: 100%;
            }

            .search-box {
                width: 100%;
            }

            .date-range-picker {
                flex-direction: column;
                align-items: flex-start;
            }

            .date-range-picker .date-inputs {
                width: 100%;
                flex-direction: column;
            }

            .date-range-picker .date-input {
                width: 100%;
            }

            .date-range-picker .buttons {
                display: flex;
                width: 100%;
                gap: 10px;
                margin-top: 10px;
            }

            .date-range-picker .filter-button,
            .date-range-picker .reset-button {
                flex: 1;
            }

            .event-list-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .event-list-actions {
                width: 100%;
                justify-content: space-between;
            }
        }

        @media (max-width: 576px) {
            .main-content {
                padding: 20px 15px;
            }
        }
    </style>
</head>

<body>
    <div class="app-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <span>NPL</span>
                </a>
                <button class="toggle-sidebar">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="sidebar-content">
                <div class="nav-section">
                    <div class="nav-section-title">MENU</div>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="{{ url('/admin/npl') }}" class="nav-link active" data-page="dashboard">
                                <i class="fas fa-chart-pie"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/admin/registered-users') }}"  class="nav-link nav-link-toggle active" data-toggle="events">
                                <i class="fas fa-calendar-day"></i>
                                <span>Events</span>
                                <i class="fas  toggle-icon ml-auto"></i>
                            </a>
                            <!-- <ul class="nav-dropdown show" id="events-dropdown" style="height: auto;">
                                <li class="nav-item">
                                    <a href="{{ url('/admin/registered-users') }}" class="nav-link active">
                                        <span>Event Registrations</span>
                                    </a>
                                </li>
                            </ul> -->
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-chart-line"></i>
                                <span>Reports</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav-section">
                    <div class="nav-section-title">SETTINGS</div>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cog"></i>
                                <span>General Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user-cog"></i>
                                <span>User Management</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <h1 class="page-title">Registered Users</h1>
                <div class="header-actions">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search users...">
                    </div>
                    <div class="user-profile">
                        <div class="user-avatar">
                        </div>
                        <div class="user-info">
                            <div class="user-role">Administrator</div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Date Range Picker -->
            <form action="{{ route('admin.registrations.filter-by-date') }}" method="GET" id="dateRangeForm">
                <div class="date-range-picker">
                    <label>Filter by Registration Date:</label>
                    <div class="date-inputs">
                        <div class="date-input">
                            <input type="text" id="start_date" name="start_date" placeholder="From" class="datepicker" value="{{ $start_date ?? '' }}">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <div class="date-input">
                            <input type="text" id="end_date" name="end_date" placeholder="To" class="datepicker" value="{{ $end_date ?? '' }}">
                            <i class="fas fa-calendar"></i>
                        </div>
                    </div>
                    <div class="buttons">
                        <button type="submit" class="filter-button">
                            <i class="fas fa-filter"></i> Filter
                        </button>
                        <a href="{{ route('admin.registered-users') }}" class="reset-button">
                            <i class="fas fa-redo"></i> Reset
                        </a>
                    </div>
                    <div class="event-list-actions">
                        <a href="{{ route('admin.registrations.download') }}{{ isset($start_date) && isset($end_date) ? '?start_date='.$start_date.'&end_date='.$end_date : '' }}{{ isset($searchTerm) ? '?term='.$searchTerm : '' }}" class="calendar-button">
                            <i class="fas fa-file-pdf"></i>
                            <span>Download PDF</span>
                        </a>
                    </div>
                </div>

            </form>

            <!-- Download Options -->
            <!-- <div class="download-options">
                <a href="{{ route('admin.registrations.download') }}{{ isset($start_date) && isset($end_date) ? '?start_date='.$start_date.'&end_date='.$end_date : '' }}{{ isset($searchTerm) ? '?term='.$searchTerm : '' }}" class="calendar-button">
                    <i class="fas fa-file-pdf"></i>
                    <span>Download PDF</span>
                </a>
            </div> -->

            <!-- Registered Users Content -->
            <div class="event-list-header">
                <!-- <h2 class="page-title">System Users</h2> -->
                <!-- <div class="event-list-actions">
                    <a href="{{ route('admin.registrations.download') }}{{ isset($start_date) && isset($end_date) ? '?start_date='.$start_date.'&end_date='.$end_date : '' }}{{ isset($searchTerm) ? '?term='.$searchTerm : '' }}" class="calendar-button">
                        <i class="fas fa-file-pdf"></i>
                        <span>Download PDF</span>
                    </a>
                    <a href="{{ route('register') }}" class="calendar-button primary">
                        <i class="fas fa-plus"></i>
                        <span>Add New User</span>
                    </a>
                </div> -->
            </div>
            <div class="event-table-container">
                <table class="event-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Institution</th>
                            <th>Designation</th>
                            <th>Registered On</th>
                            <!-- <th>Actions</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>
                                <div class="table-title">{{ $user->name }}</div>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->institution }}</td>
                            <td>{{ $user->designation }}</td>
                            <td>{{ $user->created_at->format('M d, Y') }}</td>
                            <!-- <td>
                                <div class="table-actions">
                                    <button class="table-action edit" data-id="{{ $user->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="table-action delete" data-id="{{ $user->id }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td> -->
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No registrations found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="pagination">
                    @if($users->onFirstPage())
                    <span class="page-item disabled">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                    @else
                    <a href="{{ $users->previousPageUrl() }}" class="page-item">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    @endif

                    @foreach(range(1, $users->lastPage()) as $page)
                    @if($page == $users->currentPage())
                    <span class="page-item active">{{ $page }}</span>
                    @elseif($page == 1 || $page == $users->lastPage() || abs($page - $users->currentPage()) < 3)
                        <a href="{{ $users->url($page) }}" class="page-item">{{ $page }}</a>
                        @elseif(abs($page - $users->currentPage()) == 3)
                        <span class="page-item disabled">...</span>
                        @endif
                        @endforeach

                        @if($users->hasMorePages())
                        <a href="{{ $users->nextPageUrl() }}" class="page-item">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        @else
                        <span class="page-item disabled">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                        @endif
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and jQuery UI -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Datepair.js -->
    <script src="https://jonthornton.github.io/Datepair.js/dist/datepair.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle sidebar collapse
            const toggleSidebar = document.querySelector('.toggle-sidebar');
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');

            if (toggleSidebar) {
                toggleSidebar.addEventListener('click', function() {
                    sidebar.classList.toggle('collapsed');
                    mainContent.classList.toggle('expanded');
                });
            }

            // Toggle dropdown in sidebar
            const eventsDropdown = document.getElementById('events-dropdown');
            const eventsToggle = document.querySelector('[data-toggle="events"]');

            if (eventsDropdown && eventsToggle) {
                eventsDropdown.classList.add('show');
                eventsToggle.classList.add('active');
                eventsDropdown.style.height = eventsDropdown.scrollHeight + 'px';
            }

            document.querySelectorAll('.nav-link-toggle').forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = this.getAttribute('data-toggle');
                    const dropdown = document.getElementById(`${target}-dropdown`);

                    this.classList.toggle('active');

                    if (dropdown.classList.contains('show')) {
                        dropdown.classList.remove('show');
                        dropdown.style.height = '0';
                    } else {
                        dropdown.classList.add('show');
                        dropdown.style.height = dropdown.scrollHeight + 'px';
                    }
                });
            });

            // Initialize datepickers
            $(function() {
                // Initialize jQuery UI datepicker
                $(".datepicker").datepicker({
                    dateFormat: 'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '2000:+0'
                });

                // Initialize datepair
                var dateRangePicker = document.getElementById('dateRangeForm');
                var datepair = new Datepair(dateRangePicker, {
                    'defaultDateDelta': 30,
                    'dateClass': 'datepicker'
                });
            });

            // Edit user
            document.querySelectorAll('.table-action.edit').forEach(button => {
                button.addEventListener('click', function() {
                    const userId = this.getAttribute('data-id');
                    window.location.href = `/admin/users/${userId}/edit`;
                });
            });

            // Delete user
            document.querySelectorAll('.table-action.delete').forEach(button => {
                button.addEventListener('click', function() {
                    if (confirm('Are you sure you want to delete this user?')) {
                        const userId = this.getAttribute('data-id');

                        // Create a form to submit the delete request
                        const form = document.createElement('form');
                        form.method = 'POST';
                        form.action = `/admin/users/${userId}`;
                        form.style.display = 'none';

                        const csrfToken = document.createElement('input');
                        csrfToken.type = 'hidden';
                        csrfToken.name = '_token';
                        csrfToken.value = '{{ csrf_token() }}';

                        const method = document.createElement('input');
                        method.type = 'hidden';
                        method.name = '_method';
                        method.value = 'DELETE';

                        form.appendChild(csrfToken);
                        form.appendChild(method);
                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            });

            // Search functionality
            const searchInput = document.querySelector('.search-box input');
            if (searchInput) {
                searchInput.addEventListener('keyup', function(e) {
                    if (e.key === 'Enter') {
                        const searchTerm = this.value.trim();
                        if (searchTerm) {
                            window.location.href = `{{ route('admin.registrations.search') }}?term=${searchTerm}`;
                        }
                    }
                });
            }
        });
    </script>
</body>

</html>