@php
    $page_label = "Concerns";
@endphp
<x-user-sidenav :pageLabel="$page_label"> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Concerns</title>
    <link rel="stylesheet" href="{{asset ('assets/css/user-concerns.css')}}">
</head>
<body>
   
  <div class="concern-container">
    <div class="concern-header">
        <div class="breadcrumb">
            
        </div>
        <button class="add-concern-btn">+ Add Concern</button>
    </div>

    <h1 class="title">Student Concerns</h1>

    <div class="concern-table">
        <table>
            <thead>
                <tr>
                    <th>Concern Title</th>
                    <th>Status</th>
                    <th>Support Ticket</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="no-data">No Data Available</td>
                </tr>
            </tbody>
        </table>
            
        </div>
    </div>
</div>

    
</body>
</html>

</x-user-sidenav>