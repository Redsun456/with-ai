@php
    $page_label = "Application Review";
@endphp
<x-admin-sidenav :pageLabel="$page_label">
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Application Review</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('assets/css/admin-application-review.css') }}">
</head>
<body>
    
      
      <div class="app-review-container">
        

        <!-- Search Bar and Filter Dropdown -->
        <div class="search-filter-container">
          <input type="text" id="search-bar" placeholder="Search by student name..." onkeyup="searchTable()">

          <!-- Filter Dropdown -->
          <select id="status-filter" onchange="filterTable()">
              <option value="all">All</option>
              <option value="pending">Pending</option>
              <option value="approved">Approved</option>
              <option value="rejected">Rejected</option>
          </select>
      </div>

      <!-- Table -->
      <table id="application-table">
          <thead>
              <tr>
                  <th>Date</th>
                  <th>Student Number</th>
                  <th>Name</th>
                  <th>Year</th>
                  <th>Section</th>
                  <th>AI Eligibility Score</th>
                  <th>Status</th>
                  <th>Action</th> 
              </tr>
          </thead>
          <tbody>
              <!-- Example rows, this data should be dynamically populated -->
              <tr class="approved">
                  <td></td>
                  <td>2021-00123</td>
                  <td>John Doe</td>
                  <td>3rd Year</td>
                  <td>IT 301</td>
                  <td>100%</td>
                  <td><span class="status approve">Approved</span></td>
                  <td>
                    <a href="/admin/view-application"><button class="view-btn" onclick="viewApplication('2021-00123')">View Application</button></a>
                    <button class="delete-btn" onclick="viewApplication('2021-00123')">Delete</button>
                  </td>
                  
              </tr>
              <tr class="pending">
                  <td></td>
                  <td>2022-00234</td>
                  <td>Jane Smith</td>
                  <td>1st Year</td>
                  <td>CS 101</td>
                  <td>100%</td>
                  <td><span class="status pending">Pending</span></td>
                  <td>
                    <button class="view-btn" onclick="viewApplication('2022-00234')">View Application</button>
                    <button class="delete-btn" onclick="viewApplication('2021-00123')">Delete</button>
                  </td>
                  
              </tr>
              <tr class="rejected">
                  <td></td>
                  <td>2021-00345</td>
                  <td>Michael Brown</td>
                  <td>2nd Year</td>
                  <td>SE 202</td>
                  <td>100%</td>
                  <td><span class="status rejected">Rejected</span></td>
                  <td>
                    <button class="view-btn" onclick="viewApplication('2021-00345')">View Application</button>
                    <button class="delete-btn" onclick="viewApplication('2021-00123')">Delete</button>
                  </td>
              </tr>
            
              <!-- Add more rows here dynamically from the database -->
          </tbody>
      </table>
  </div>

  <script src="{{asset ('assets/js/application-review.js') }}"></script>

</body>

</html>
</x-admin-sidenav>