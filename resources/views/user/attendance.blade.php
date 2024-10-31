@php
    $page_label = "Attendance";
@endphp
<x-user-sidenav2 :pageLabel="$page_label"> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attendance</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset ('assets/css/attendance.css')}}">
</head>
<body>
  <div class="sa-attendance-container">
    <h2>Attendance Record</h2>

    <!-- Attendance Table -->
    <table class="sa-attendance-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Time In</th>
                <th>Time Out</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2024-10-01</td>
                <td>08:00 AM</td>
                <td>12:00 PM</td>
                <td><span class="status present">Present</span></td>
            </tr>
            <tr>
                <td>2024-10-03</td>
                <td>08:10 AM</td>
                <td>12:00 PM</td>
                <td><span class="status late">Late</span></td>
            </tr>
            <tr>
                <td>2024-10-05</td>
                <td>08:00 AM</td>
                <td>12:00 PM</td>
                <td><span class="status absent">Absent</span></td>
            </tr>
            <!-- Additional rows can be added here for the complete attendance record -->
        </tbody>
    </table>
</div>
</div>
</body>
</html>
</x-user-sidenav2>