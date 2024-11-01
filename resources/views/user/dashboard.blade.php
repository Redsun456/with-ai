@php
    $page_label = "Dashboard";
@endphp
<x-user-sidenav2 :pageLabel="$page_label"> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset ('assets/css/user-dashboard.css')}}">
</head>
<body>
  <div class="dashboard-announcements-container">
    <h2>Announcements</h2>
    
    <!-- Announcement List -->
    <div class="announcement-list">
        <!-- Individual Announcement -->
        <div class="announcement">
            <div class="announcement-header">
                <h3>System Maintenance Scheduled</h3>
                <span class="announcement-date">October 13, 2024</span>
            </div>
            <p class="announcement-description">Our system will undergo maintenance on October 15, 2024, from 1:00 AM to 3:00 AM. Please save your work and logout before this time.</p>
        </div>

        <div class="announcement">
            <div class="announcement-header">
                <h3>New Feature Release</h3>
                <span class="announcement-date">October 10, 2024</span>
            </div>
            <p class="announcement-description">We are excited to announce a new user interface update. Check out the enhanced dashboard and new settings options!</p>
        </div>

        <!-- Add more announcements here -->
    </div>
</div>
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
</body>
</html>

</x-user-sidenav2>