@php
    $page_label = "Admin Dashboard";
@endphp

<x-admin-sidenav2 :pageLabel="$page_label">

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('assets/images/bcplg.png') }}" type="image/png">
  <link rel="stylesheet" href="{{asset ('assets/css/admin-dashboard.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="dashboard-container">
        <!-- Dashboard Summary Cards -->
        <div class="stats">
            <div class="card">
                <a href="/admin/application-review">
                <h3>Application Review</h3>
              
                <div class="stat-group">
                    <div class="stat-item">
                        <span class="stat-count">{{ $pendingApplications }}</span>
                        <span class="stat-label">Pending</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-count">{{ $approvedApplications }}</span>
                        <span class="stat-label">Approved</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-count">{{ $rejectedApplications }}</span>
                        <span class="stat-label">Rejected</span>
                    </div>
                </div>
            </a>
            </div>
           
            <div class="card">
                <h3>Disbursement</h3>
                <div class="stat-group">
                    <div class="stat-item">
                        <span class="stat-count">₱0</span>
                        <span class="stat-label">Disbursed</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-count">₱0</span>
                        <span class="stat-label">Pending</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <a href="/admin/user-account-management">
                <h3>Account Management</h3>
                <div class="stat-group">
                    <div class="stat-item">
                        <span class="stat-count">{{$adminCount}}</span>
                        <span class="stat-label">Admins</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-count">{{$userCount}}</span>
                        <span class="stat-label">Users</span>
                    </div>
                </div>
            </a>
            </div>
            <div class="card">
                <h3>Concerns</h3>
                <div class="stat-group">
                    <div class="stat-item">
                        <span class="stat-count">0</span>
                        <span class="stat-label">Open</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-count">0</span>
                        <span class="stat-label">Resolved</span>
                    </div>
                </div>           
            </div>
            <div class="card">
                <h3>Student Assistant</h3>
                <div class="stat-group">
                    <div class="stat-item">
                        <span class="stat-count">0</span>
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

</x-admin-sidenav2>

