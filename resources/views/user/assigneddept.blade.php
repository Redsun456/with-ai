@php
    $page_label = "Assigned Department";
@endphp
<x-user-sidenav2 :pageLabel="$page_label"> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assigned Department</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset ('assets/css/assigneddept.css')}}">
</head>
<body>
  <div class="department-assignment-container">
    <h2>My Department Assignment</h2>
    
    <!-- Assigned Department Details -->
    <div class="department-card">
        <h3>Department Name: Information Technology</h3>
        <p><strong>Assigned Role:</strong> IT Support Assistant</p>
        <p><strong>Supervisor:</strong> John Doe</p>
        <p><strong>Contact:</strong> johndoe@example.com</p>
        <p><strong>Location:</strong> Building A, Room 204</p>
    </div>
</div>
</body>
</html>
</x-user-sidenav2>