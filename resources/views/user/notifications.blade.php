@php
    $page_label = "Notifications";
@endphp
<x-user-sidenav2 :pageLabel="$page_label"> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Notifications</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset ('assets/css/notifications.css')}}">
</head>
<body>
  <div class="notifications-container">

    <!-- Notification Card Example -->
    <div class="notification-card">
        <div class="message-header">
            <h3>Disbursement Notice</h3>
            <span class="timestamp">2 hours ago</span>
        </div>
        <p>Your recent financial aid disbursement has been successfully processed. Please check your account for details.</p>
    </div>

    <div class="notification-card">
        <div class="message-header">
            <h3>Account Deletion Warning</h3>
            <span class="timestamp">1 day ago</span>
        </div>
        <p>Your account is scheduled for deletion due to being rejected for your application.</p>
    </div>

    <!-- Additional Notification Cards -->
    <!-- More notifications can be added here following the same structure -->
</div>
</body>
</html>
</x-user-sidenav2>