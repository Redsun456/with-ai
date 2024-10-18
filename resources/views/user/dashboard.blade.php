@php
    $page_label = "Dashboard";
@endphp
<x-user-sidenav :pageLabel="$page_label"> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
</head>
<body>
  USERS DASHBOARD
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
</body>
</html>

</x-user-sidenav>