@php
    $page_label = "Schedule";
@endphp
<x-user-sidenav2 :pageLabel="$page_label"> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Schedule</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset ('assets/css/schedule.css')}}">
</head>
<body>
  <div class="sa-schedule-container">
    <h2>Duty Schedule</h2>

    <!-- Duty Schedule Table -->
    <table class="sa-schedule-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Day</th>
                <th>Time</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2024-10-01</td>
                <td>Monday</td>
                <td>08:00 AM - 12:00 PM</td>
                <td>Library Services</td>
            </tr>
            <tr>
                <td>2024-10-03</td>
                <td>Wednesday</td>
                <td>08:00 AM - 12:00 PM</td>
                <td>Library Services</td>
            </tr>
            <tr>
                <td>2024-10-05</td>
                <td>Friday</td>
                <td>08:00 AM - 12:00 PM</td>
                <td>Library Services</td>
            </tr>
            <tr>
                <td>2024-10-08</td>
                <td>Monday</td>
                <td>08:00 AM - 12:00 PM</td>
                <td>Library Services</td>
            </tr>
            <tr>
                <td>2024-10-10</td>
                <td>Wednesday</td>
                <td>08:00 AM - 12:00 PM</td>
                <td>Library Services</td>
            </tr>
            <tr>
                <td>2024-10-12</td>
                <td>Friday</td>
                <td>08:00 AM - 12:00 PM</td>
                <td>Library Services</td>
            </tr>
            <!-- Additional rows can be added here for the full month schedule -->
        </tbody>
    </table>
</div>
</body>
</html>
</x-user-sidenav2>