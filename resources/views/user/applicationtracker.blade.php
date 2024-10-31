@php
    $page_label = "Application Tracker";
@endphp
<x-user-sidenav2 :pageLabel="$page_label"> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Tracker</title>
    <link rel="stylesheet" href="{{asset ('assets/css/applicationtracker.css')}}">
    
</head>
<body>
      
  <div class="container">
    <h1>Application Status</h1>

    <!-- Status for Approved -->
    <div class="status-card approved-status">
        <div class="status-icon">
            <i class="uil uil-check-circle"></i>
        </div>
        <div class="status-info">
            <h2>Approved</h2>
            <p>Congratulations! Your application has been approved.</p>
            <p><strong>Date:</strong>  09 - 11 - 2001</p>
        </div>
    </div>

    <!-- Status for Pending -->
    <div class="status-card pending-status">
        <div class="status-icon">
            <i class="uil uil-hourglass"></i>
        </div>
        <div class="status-info">
            <h2>Pending</h2>
            <p>Your application is still under review. Please check back later.</p>
            <p><strong>Date:</strong>  2024 - 09 - 30</p>
        </div>
    </div>

    <!-- Status for Rejected -->
    <div class="status-card rejected-status">
        <div class="status-icon">
            <i class="uil uil-times-circle"></i>
        </div>
        <div class="status-info">
            <h2>Rejected</h2>
            <p>Unfortunately, your application has been rejected. You may contact support for further details.</p>
            <p><strong>Date:</strong>  2024 - 09 - 28</p>
        </div>
    </div>
</div>

    </div>
</div>


</body>
</html>
</x-user-sidenav2>