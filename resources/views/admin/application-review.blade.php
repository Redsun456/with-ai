@php
    $page_label = "Application Review";
@endphp
<x-admin-sidenav2 :pageLabel="$page_label">
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Application Review</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('assets/css/admin-application-review.css') }}">
      <link rel="icon" href="{{ asset('assets/images/bcplg.png') }}" type="image/png">
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
              <th>Full Name</th>
              <th>Yr&Sec</th>
              <th>Program</th>
              <th>AI Eligibility Score</th>
              <th>Status</th>
              <th>Action</th> 
            </tr>
          </thead>
          <tbody>
            @foreach($applicants as $applicant)
              <tr class="{{ strtolower($applicant->status) }}">
                <td>{{ $applicant->created_at->format('Y-m-d') }}</td>
                <td>{{ $applicant->student_number }}</td>
                <td>{{ $applicant->first_name }} {{ $applicant->middle_name }} {{ $applicant->last_name }}</td>
                <td>{{ $applicant->year_section }}</td>
                <td>{{ $applicant->program_course }}</td>
                <td>{{ $applicant->ai_eligibility_score ?? 'N/A' }}</td>
                <td>
                  <span class="status {{ strtolower($applicant->status) }}">{{ ucfirst($applicant->status) }}</span>
                </td>
                <td>
                  <a href="{{ route('application.view', $applicant->id) }}">
                    <button class="view-btn">View</button>
                </a>
                
                  <form action="/admin/delete-application/{{ $applicant->id }}" method="POST" style="display:inline;"  onsubmit="return confirmDelete()">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    
      <script src="{{ asset('assets/js/application-review.js') }}"></script>
      
    </body>
    </html>
    
    
</x-admin-sidenav2>