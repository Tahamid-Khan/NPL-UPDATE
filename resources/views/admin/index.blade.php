<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EventFlow Admin</title>
    <title>Event Management Admin</title>
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

        input,
        select,
        textarea {
            font-family: 'Inter', sans-serif;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            padding: 10px 15px;
            outline: none;
            transition: var(--transition);
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.15);
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

        .sidebar-header {
            padding: 25px;
            display: flex;
            align-items: center;
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
            color: var(--gray-dark);
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
            background-color: var(--primary-light);
            color: var(--primary-color);
            font-weight: 600;
        }

        .nav-link.active i {
            color: var(--primary-color);
        }

        .nav-link .badge {
            margin-left: auto;
            background-color: var(--danger-color);
            color: white;
            font-size: 11px;
            padding: 3px 6px;
            border-radius: 10px;
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

        .nav-link-toggle {
            position: relative;
        }

        .nav-link-toggle::after {
            content: '\f107';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: 25px;
            transition: var(--transition);
        }

        .nav-link-toggle.active::after {
            transform: rotate(180deg);
        }

        /* Main content */
        .main-content {
            flex: 1;
            margin-left: 280px;
            width: calc(100% - 280px);
            transition: var(--transition);
            padding: 30px;
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

        .user-name {
            font-weight: 600;
            font-size: 14px;
        }

        .user-role {
            font-size: 12px;
            color: var(--gray);
        }

        /* Content section */
        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        /* Dashboard */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
            margin-bottom: 30px;
        }

        .stat-card {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--box-shadow);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-info {
            display: flex;
            flex-direction: column;
        }

        .stat-title {
            font-size: 14px;
            color: var(--gray);
            margin-bottom: 10px;
        }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 5px;
        }

        .stat-change {
            display: flex;
            align-items: center;
            font-size: 13px;
            font-weight: 500;
        }

        .stat-change.positive {
            color: var(--success-color);
        }

        .stat-change.negative {
            color: var(--danger-color);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }

        .stat-icon.blue {
            background-color: var(--primary-color);
        }

        .stat-icon.green {
            background-color: var(--success-color);
        }

        .stat-icon.orange {
            background-color: var(--warning-color);
        }

        .stat-icon.red {
            background-color: var(--danger-color);
        }

        .dashboard-cards {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 24px;
            margin-bottom: 30px;
        }

        .card {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
        }

        .card-header {
            padding: 20px 25px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark-color);
        }

        .card-actions {
            display: flex;
            gap: 10px;
        }

        .card-action {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
            background-color: var(--gray-light);
            transition: var(--transition);
        }

        .card-action:hover {
            background-color: var(--primary-light);
            color: var(--primary-color);
        }

        .card-body {
            padding: 25px;
        }

        .recent-events-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .recent-event {
            display: flex;
            align-items: center;
            padding: 15px;
            border-radius: var(--border-radius);
            background-color: var(--gray-light);
            transition: var(--transition);
        }

        .recent-event:hover {
            background-color: var(--primary-light);
        }

        .event-color {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .event-color.blue {
            background-color: var(--primary-color);
        }

        .event-color.green {
            background-color: var(--success-color);
        }

        .event-color.orange {
            background-color: var(--warning-color);
        }

        .event-color.red {
            background-color: var(--danger-color);
        }

        .event-info {
            flex: 1;
        }

        .event-title {
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 5px;
        }

        .event-details {
            display: flex;
            gap: 15px;
            font-size: 13px;
            color: var(--gray);
        }

        .event-detail {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .event-actions {
            display: flex;
            gap: 5px;
        }

        .event-action {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
            background-color: white;
            transition: var(--transition);
        }

        .event-action:hover {
            background-color: var(--primary-color);
            color: white;
        }

        /* Calendar */
        .calendar-container {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
        }

        .calendar-toolbar {
            padding: 20px 25px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .calendar-nav {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .calendar-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark-color);
        }

        .calendar-button {
            padding: 10px 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: var(--gray-light);
            color: var(--gray-dark);
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

        .calendar-view-select {
            background-color: var(--gray-light);
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: 500;
            color: var(--gray-dark);
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
        }

        .calendar-header {
            display: contents;
        }

        .calendar-weekday {
            padding: 15px;
            text-align: center;
            font-weight: 600;
            color: var(--gray);
            border-bottom: 1px solid var(--border-color);
        }

        .calendar-day {
            height: 120px;
            padding: 10px;
            border-right: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
            position: relative;
            transition: var(--transition);
        }

        .calendar-day:hover {
            background-color: var(--gray-light);
        }

        .calendar-day:nth-child(7n) {
            border-right: none;
        }

        .day-number {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-bottom: 5px;
        }

        .day-number.today {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
        }

        .other-month {
            background-color: #fafafa;
        }

        .other-month .day-number {
            color: var(--gray);
        }

        .day-events {
            display: flex;
            flex-direction: column;
            gap: 5px;
            max-height: calc(100% - 35px);
            overflow: hidden;
        }

        .day-event {
            padding: 5px 8px;
            border-radius: 5px;
            font-size: 11px;
            font-weight: 500;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .day-event.blue {
            background-color: var(--primary-light);
            color: var(--primary-color);
        }

        .day-event.green {
            background-color: #e6f8f1;
            color: var(--success-color);
        }

        .day-event.orange {
            background-color: #fff4ea;
            color: var(--warning-color);
        }

        .day-event.red {
            background-color: #fdeaea;
            color: var(--danger-color);
        }

        .day-more {
            font-size: 11px;
            color: var(--gray);
            text-align: center;
            margin-top: 3px;
            cursor: pointer;
        }

        /* Day view */
        .day-view {
            display: none;
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
        }

        .day-view.active {
            display: block;
        }

        .day-header {
            padding: 20px 25px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .day-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark-color);
        }

        .time-grid {
            display: flex;
            flex-direction: column;
        }

        .time-slot {
            display: flex;
            min-height: 60px;
            border-bottom: 1px solid var(--border-color);
        }

        .time-slot:last-child {
            border-bottom: none;
        }

        .time-label {
            width: 100px;
            padding: 10px;
            display: flex;
            justify-content: center;
            color: var(--gray);
            font-size: 13px;
            border-right: 1px solid var(--border-color);
        }

        .time-events {
            flex: 1;
            position: relative;
            padding: 5px;
        }

        .time-event {
            position: absolute;
            left: 5px;
            right: 5px;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 13px;
            font-weight: 500;
            z-index: 1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .time-event.blue {
            background-color: var(--primary-light);
            color: var(--primary-color);
            border-left: 3px solid var(--primary-color);
        }

        .time-event.green {
            background-color: #e6f8f1;
            color: var(--success-color);
            border-left: 3px solid var(--success-color);
        }

        .time-event.orange {
            background-color: #fff4ea;
            color: var(--warning-color);
            border-left: 3px solid var(--warning-color);
        }

        .time-event.red {
            background-color: #fdeaea;
            color: var(--danger-color);
            border-left: 3px solid var(--danger-color);
        }

        /* Create Event */
        .create-event-container {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
        }

        .create-event-header {
            padding: 25px;
            border-bottom: 1px solid var(--border-color);
        }

        .create-event-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 10px;
        }

        .create-event-subtitle {
            font-size: 14px;
            color: var(--gray);
        }

        .create-event-form {
            padding: 30px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-bottom: 30px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-label {
            font-weight: 500;
            font-size: 14px;
            color: var(--gray-dark);
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

        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .form-check-input {
            width: 18px;
            height: 18px;
            border-radius: 5px;
            accent-color: var(--primary-color);
        }

        .form-check-label {
            font-size: 14px;
            color: var(--gray-dark);
        }

        .color-options {
            display: flex;
            gap: 15px;
        }

        .color-option {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            border: 2px solid transparent;
            transition: var(--transition);
        }

        .color-option.selected {
            border-color: var(--gray-dark);
        }

        .color-option.blue {
            background-color: var(--primary-color);
        }

        .color-option.green {
            background-color: var(--success-color);
        }

        .color-option.orange {
            background-color: var(--warning-color);
        }

        .color-option.red {
            background-color: var(--danger-color);
        }

        .color-option.selected::after {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 14px;
        }

        .form-button-group {
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

        .filter-dropdown {
            position: relative;
        }

        .filter-button {
            padding: 10px 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: white;
            color: var(--gray-dark);
            font-weight: 500;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .filter-content {
            position: absolute;
            top: 100%;
            right: 0;
            width: 250px;
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 15px;
            margin-top: 10px;
            z-index: 10;
            display: none;
        }

        .filter-content.show {
            display: block;
        }

        .filter-group {
            margin-bottom: 15px;
        }

        .filter-title {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .filter-options {
            display: flex;
            flex-direction: column;
            gap: 8px;
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
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            font-size: 14px;
            color: var(--gray-dark);
            border-bottom: 1px solid var(--border-color);
        }

        .event-table td {
            padding: 15px 20px;
            font-size: 14px;
            border-bottom: 1px solid var(--border-color);
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

        .event-status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            display: inline-block;
        }

        .event-status.upcoming {
            background-color: var(--primary-light);
            color: var(--primary-color);
        }

        .event-status.active {
            background-color: #e6f8f1;
            color: var(--success-color);
        }

        .event-status.completed {
            background-color: var(--gray-light);
            color: var(--gray);
        }

        .event-status.cancelled {
            background-color: #fdeaea;
            color: var(--danger-color);
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

        .table-action.edit:hover {
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
        .nav-link-toggle::after {
    content: none !important;
    display: none !important;
}

        .page-item {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background-color: var(--gray-light);
            color: var(--gray-dark);
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

            .dashboard-cards {
                grid-template-columns: 1fr;
            }

            .form-grid {
                grid-template-columns: 1fr;
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

            .stats-grid {
                grid-template-columns: 1fr;
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

            .event-table th:nth-child(3),
            .event-table td:nth-child(3) {
                display: none;
            }

            .event-table th:nth-child(4),
            .event-table td:nth-child(4) {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .main-content {
                padding: 20px 15px;
            }

            .calendar-toolbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .calendar-day {
                height: 80px;
            }

            .day-events {
                display: none;
            }

            .day-more {
                display: none;
            }

            .event-table th:nth-child(2),
            .event-table td:nth-child(2) {
                display: none;
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
            </div>
            <div class="sidebar-content">
                <div class="nav-section">
                    <div class="nav-section-title">MENU</div>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="{{ url('/admin/registrations') }}" class="nav-link active" data-page="dashboard">
                                <i class="fas fa-chart-pie"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                        <li class="nav-item">
    <a href="{{ url('/admin/registered-users') }}" class="nav-link nav-link-toggle" data-toggle="events">
        <i class="fas fa-calendar-day"></i>
        <span>Events</span>
    </a>
    <ul class="nav-dropdown" id="events-dropdown">
        <li class="nav-item">
            <a href="{{ url('/admin/registered-users') }}" class="nav-link">
                <span>Event Registrations</span>
            </a>
        </li>
    </ul>
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
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-bell"></i>
                                <span>Notifications</span>
                                <span class="badge">3</span>
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
                <h1 class="page-title">Dashboard</h1>
                <div class="header-actions">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search...">
                    </div>
                    <!-- <button class="btn btn-primary" id="download-report">Download Report</button> -->
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="https://prium.github.io/falcon/v3.19.0/assets/img/team/3-thumb.png" alt="User">
                        </div>
                        <div class="user-info">
                            <div class="user-role">Administrator</div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div id="dashboard-content" class="content-section active">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-info">
                            <div class="stat-title">Total Events</div>
                            <div class="stat-value">1</div>
                            <div class="stat-change positive">
                                <i class="fas fa-arrow-up"></i>
                                <span>12.5% this month</span>
                            </div>
                        </div>
                        <div class="stat-icon blue">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <div class="stat-title">Active Events</div>
                            <div class="stat-value">1</div>
                            <div class="stat-change positive">
                                <i class="fas fa-arrow-up"></i>
                                <span>8.2% this month</span>
                            </div>
                        </div>
                        <div class="stat-icon green">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <div class="stat-title">Total Attendees</div>
                            <div class="stat-value">{{ number_format($totalAttendees) }}</div>
                            <div class="stat-change positive">
                                <i class="fas fa-arrow-up"></i>
                                <span>18.3% this month</span>
                            </div>
                        </div>

                        <div class="stat-icon orange">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <div class="stat-title">Cancelled Events</div>
                            <div class="stat-value">0</div>
                            <div class="stat-change negative">
                                <i class="fas fa-arrow-down"></i>
                                <span>5.1% this month</span>
                            </div>
                        </div>
                        <div class="stat-icon red">
                            <i class="fas fa-calendar-times"></i>
                        </div>
                    </div>
                </div>

                <div class="dashboard-cards">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Upcoming Events</h2>
                            <div class="card-actions">
                                <button class="card-action">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="recent-events-list">
                                <div class="recent-event">
                                    <div class="event-color blue"></div>
                                    <div class="event-info">
                                        <div class="event-title">Team Meeting</div>
                                        <div class="event-details">
                                            <div class="event-detail">
                                                <i class="fas fa-calendar"></i>
                                                <span>April 10, 2025</span>
                                            </div>
                                            <div class="event-detail">
                                                <i class="fas fa-clock"></i>
                                                <span>10:00 AM - 11:30 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-actions">
                                        <button class="event-action">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="event-action">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="recent-event">
                                    <div class="event-color green"></div>
                                    <div class="event-info">
                                        <div class="event-title">Product Launch</div>
                                        <div class="event-details">
                                            <div class="event-detail">
                                                <i class="fas fa-calendar"></i>
                                                <span>April 15, 2025</span>
                                            </div>
                                            <div class="event-detail">
                                                <i class="fas fa-clock"></i>
                                                <span>2:00 PM - 4:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-actions">
                                        <button class="event-action">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="event-action">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="recent-event">
                                    <div class="event-color orange"></div>
                                    <div class="event-info">
                                        <div class="event-title">Marketing Workshop</div>
                                        <div class="event-details">
                                            <div class="event-detail">
                                                <i class="fas fa-calendar"></i>
                                                <span>April 18, 2025</span>
                                            </div>
                                            <div class="event-detail">
                                                <i class="fas fa-clock"></i>
                                                <span>9:00 AM - 12:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-actions">
                                        <button class="event-action">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="event-action">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="recent-event">
                                    <div class="event-color red"></div>
                                    <div class="event-info">
                                        <div class="event-title">Client Meeting</div>
                                        <div class="event-details">
                                            <div class="event-detail">
                                                <i class="fas fa-calendar"></i>
                                                <span>April 20, 2025</span>
                                            </div>
                                            <div class="event-detail">
                                                <i class="fas fa-clock"></i>
                                                <span>11:00 AM - 12:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-actions">
                                        <button class="event-action">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="event-action">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Event Types</h2>
                            <div class="card-actions">
                                <button class="card-action">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="eventTypeChart" height="250"></canvas>
                        </div>
                    </div>
                </div>
            </div>


            <!-- List Events Content -->
            <!-- List Events Content -->
            <div id="list-events-content" class="content-section">
                <div class="event-list-header">
                    <h2 class="page-title">Registered Users</h2>
                    <div class="event-list-actions">
                        <div class="filter-dropdown">
                            <button class="filter-button" id="filter-button">
                                <i class="fas fa-filter"></i>
                                <span>Filter</span>
                            </button>
                            <div class="filter-content" id="filter-content">
                                <div class="filter-group">
                                    <div class="filter-title">Institution</div>
                                    <div class="filter-options">
                                        <div class="form-check">
                                            <input type="checkbox" id="filter-all" class="form-check-input" checked>
                                            <label for="filter-all" class="form-check-label">All Institutions</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-group">
                                    <div class="filter-title">Registration Date</div>
                                    <div class="filter-options">
                                        <div class="form-check">
                                            <input type="checkbox" id="filter-recent" class="form-check-input" checked>
                                            <label for="filter-recent" class="form-check-label">Recent (Last 7 days)</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" id="filter-older" class="form-check-input" checked>
                                            <label for="filter-older" class="form-check-label">Older</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-button-group">
                                    <button class="btn btn-secondary">Reset</button>
                                    <button class="btn btn-primary">Apply Filters</button>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('registration.form') }}" class="calendar-button primary">
                            <i class="fas fa-plus"></i>
                            <span>Add New Registration</span>
                        </a>
                    </div>
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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($registrations as $registration)
                            <tr>
                                <td>
                                    <div class="table-title">{{ $registration->name }}</div>
                                </td>
                                <td>{{ $registration->email }}</td>
                                <td>{{ $registration->phone }}</td>
                                <td>{{ $registration->institution }}</td>
                                <td>{{ $registration->designation }}</td>
                                <td>
                                    <div class="table-actions">
                                        <button class="table-action edit" data-id="{{ $registration->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="table-action delete" data-id="{{ $registration->id }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No registrations found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="pagination">
                        @if($registrations->onFirstPage())
                        <span class="page-item disabled">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                        @else
                        <a href="{{ $registrations->previousPageUrl() }}" class="page-item">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        @endif

                        @foreach(range(1, $registrations->lastPage()) as $page)
                        @if($page == $registrations->currentPage())
                        <span class="page-item active">{{ $page }}</span>
                        @elseif($page == 1 || $page == $registrations->lastPage() || abs($page - $registrations->currentPage()) < 3)
                            <a href="{{ $registrations->url($page) }}" class="page-item">{{ $page }}</a>
                            @elseif(abs($page - $registrations->currentPage()) == 3)
                            <span class="page-item disabled">...</span>
                            @endif
                            @endforeach

                            @if($registrations->hasMorePages())
                            <a href="{{ $registrations->nextPageUrl() }}" class="page-item">
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            //generate reoprt 
            document.getElementById('download-report').addEventListener('click', function() {
                window.location.href = "{{ route('admin.reports.event-financial') }}";
            });
            // Initialize event type chart
            const ctx = document.getElementById('eventTypeChart').getContext('2d');
            const eventTypeChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Conference', 'Boot Camp', 'Expo', 'Competition', 'Workshop', 'Meeting'],
                    datasets: [{
                        data: [30, 20, 15, 10, 15, 10],
                        backgroundColor: [
                            '#4361ee',
                            '#0bb07b',
                            '#f48c06',
                            '#e63946',
                            '#7209b7',
                            '#4cc9f0'
                        ],
                        borderWidth: 0,
                        hoverOffset: 5
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '70%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                padding: 15
                            }
                        }
                    }
                }
            });

            // Toggle dropdown in sidebar
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

            // Page navigation
            // Page navigation
            document.querySelectorAll('.nav-link[data-page]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Update active nav link
                    document.querySelectorAll('.nav-link').forEach(l => {
                        l.classList.remove('active');
                    });
                    this.classList.add('active');

                    // Update page title
                    const pageTitle = this.querySelector('span').textContent;
                    document.querySelector('.page-title').textContent = pageTitle;

                    // Show corresponding content
                    const page = this.getAttribute('data-page');
                    document.querySelectorAll('.content-section').forEach(section => {
                        section.classList.remove('active');
                    });

                    document.getElementById(`${page}-content`).classList.add('active');
                });
            });


            // Calendar navigation
            const prevMonthBtn = document.getElementById('prev-month');
            const nextMonthBtn = document.getElementById('next-month');
            const todayBtn = document.getElementById('today-button');
            const calendarViewSelect = document.getElementById('calendar-view');
            const backToMonthBtn = document.getElementById('back-to-month');

            if (prevMonthBtn) {
                prevMonthBtn.addEventListener('click', function() {
                    // Navigate to previous month
                    console.log('Previous month');
                });
            }

            if (nextMonthBtn) {
                nextMonthBtn.addEventListener('click', function() {
                    // Navigate to next month
                    console.log('Next month');
                });
            }

            if (todayBtn) {
                todayBtn.addEventListener('click', function() {
                    // Navigate to today
                    console.log('Today');
                });
            }

            if (calendarViewSelect) {
                calendarViewSelect.addEventListener('change', function() {
                    if (this.value === 'day') {
                        document.getElementById('month-view').style.display = 'none';
                        document.getElementById('day-view').classList.add('active');
                    } else {
                        document.getElementById('day-view').classList.remove('active');
                        document.getElementById('month-view').style.display = 'block';
                    }
                });
            }

            if (backToMonthBtn) {
                backToMonthBtn.addEventListener('click', function() {
                    document.getElementById('calendar-view').value = 'month';
                    document.getElementById('day-view').classList.remove('active');
                    document.getElementById('month-view').style.display = 'block';
                });
            }

            // Day click handler
            document.querySelectorAll('.calendar-day:not(.other-month)').forEach(day => {
                day.addEventListener('click', function() {
                    const dayNumber = this.querySelector('.day-number').textContent;
                    document.getElementById('day-view-title').textContent =
                        `April ${dayNumber}, 2025`;
                    document.getElementById('calendar-view').value = 'day';
                    document.getElementById('month-view').style.display = 'none';
                    document.getElementById('day-view').classList.add('active');
                });
            });

            // Filter dropdown
            const filterBtn = document.getElementById('filter-button');
            const filterContent = document.getElementById('filter-content');

            if (filterBtn && filterContent) {
                filterBtn.addEventListener('click', function() {
                    filterContent.classList.toggle('show');
                });

                // Close filter dropdown when clicking outside
                document.addEventListener('click', function(e) {
                    if (!filterBtn.contains(e.target) && !filterContent.contains(e.target)) {
                        filterContent.classList.remove('show');
                    }
                });
            }

            // Color option selection
            document.querySelectorAll('.color-option').forEach(option => {
                option.addEventListener('click', function() {
                    document.querySelectorAll('.color-option').forEach(opt => {
                        opt.classList.remove('selected');
                    });
                    this.classList.add('selected');
                });
            });

            // Create event form submission
            const eventForm = document.getElementById('event-form');
            if (eventForm) {
                eventForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Event created successfully!');
                });
            }

            // All day event checkbox
            const allDayCheckbox = document.getElementById('all-day-event');
            if (allDayCheckbox) {
                allDayCheckbox.addEventListener('change', function() {
                    const startTime = document.getElementById('event-start-time');
                    const endTime = document.getElementById('event-end-time');

                    if (this.checked) {
                        startTime.disabled = true;
                        endTime.disabled = true;
                    } else {
                        startTime.disabled = false;
                        endTime.disabled = false;
                    }
                });
            }

            // Quick links to create event from calendar
            document.querySelectorAll('[data-page="create-event"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Update active nav link
                    document.querySelectorAll('.nav-link').forEach(l => {
                        l.classList.remove('active');
                    });
                    document.querySelector('.nav-link[data-page="create-event"]').classList.add(
                        'active');

                    // Update page title
                    document.querySelector('.page-title').textContent = 'Create Event';

                    // Show corresponding content
                    document.querySelectorAll('.content-section').forEach(section => {
                        section.classList.remove('active');
                    });

                    document.getElementById('create-event-content').classList.add('active');
                });
            });
        });
    </script>
</body>

</html>