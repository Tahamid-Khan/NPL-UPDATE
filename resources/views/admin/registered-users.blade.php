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
            <link rel="stylesheet" href="{{ asset('css/registerd_users.css') }}">   

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
                    <label>Filter:</label>
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
                    <div class="action-buttons mb-4" style="margin-top: 10px;">
    <a href="{{ route('admin.registrations.export') }}" class="btn btn-primary">
        <i class="fas fa-file-excel mr-2"></i> Export Registrations
    </a>
</div>

                    </div>
                </div>

            </form>

            <!-- Registered Users Content -->
            <div class="event-list-header">
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