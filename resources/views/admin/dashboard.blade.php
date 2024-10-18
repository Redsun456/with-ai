@php
    $page_label = "Admin Dashboard";
@endphp

<x-admin-sidenav :pageLabel="$page_label">

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset ('assets/css/admin-dashboard.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="dashboard-container">
        <!-- Dashboard Summary Cards -->
        <div class="stats">
            <div class="card">
                <h3>Application Review</h3>
                <div class="stat-group">
                    <div class="stat-item">
                        <span class="stat-count">120</span>
                        <span class="stat-label">Pending</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-count">80</span>
                        <span class="stat-label">Approved</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-count">20</span>
                        <span class="stat-label">Rejected</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3>Disbursement</h3>
                <div class="stat-group">
                    <div class="stat-item">
                        <span class="stat-count">₱25,000</span>
                        <span class="stat-label">Disbursed</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-count">₱10,000</span>
                        <span class="stat-label">Pending</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3>Account Management</h3>
                <div class="stat-group">
                    <div class="stat-item">
                        <span class="stat-count">5</span>
                        <span class="stat-label">Admins</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-count">200</span>
                        <span class="stat-label">Users</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3>Concerns</h3>
                <div class="stat-group">
                    <div class="stat-item">
                        <span class="stat-count">15</span>
                        <span class="stat-label">Open</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-count">5</span>
                        <span class="stat-label">Resolved</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3>Student Assistant</h3>
                <div class="stat-group">
                    <div class="stat-item">
                        <span class="stat-count">100</span>
                        <span class="stat-label">Active</span>
                    </div>
                </div>
            </div>
        </div>

    
    </div>

    

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

</body>
</html>

</x-admin-sidenav>

