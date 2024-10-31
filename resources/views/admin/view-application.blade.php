@php
    $page_label = "View Application";
@endphp
<x-admin-sidenav2 :pageLabel="$page_label">
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/admin-view-application.css') }}">
        <title>View Application</title>
    </head>
    
    <body>
        <div class="application-container">
            <header>
                <h1>Applicant Details</h1>
            </header>
    
            <!-- ID Picture and Uploaded Requirements Section -->
            <div class="id-requirements-section">
                <div class="id-picture">
                    <img src="{{ asset('storage/' . $applicant->id_picture) }}" alt="ID Picture">
                </div>
                <div class="requirements">
                    <h2>Requirements Uploaded</h2>
                    <ul>
                        @foreach($applicant->requirement_files as $requirement)
                            <li><a href="{{ asset('storage/' . $requirement) }}" target="_blank">{{ ucfirst(str_replace('_', ' ', pathinfo($requirement, PATHINFO_FILENAME))) }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
    
            <!-- Application Details Table -->
            <div class="application-details">
                <table>
                    <tr>
                        <th>Student Number</th>
                        <td>{{ $applicant->student_number }}</td>
                    </tr>
                    <tr>
                        <th>Program</th>
                        <td>{{ $applicant->program_course }}</td>
                    </tr>
                    <tr>
                        <th>Year and Section</th>
                        <td>{{ $applicant->year_section }}</td>
                    </tr>
                    <tr>
                        <th>Full Name</th>
                        <td>{{ $applicant->first_name }} {{ $applicant->middle_name }} {{ $applicant->last_name }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $applicant->date_of_birth }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $applicant->address }}</td>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <td>{{ $applicant->contact_number }}</td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>{{ $applicant->email }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ $applicant->gender }}</td>
                    </tr>
                    <tr>
                        <th>Father's Full Name</th>
                        <td>{{ $applicant->father_name  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Father's Birthday</th>
                        <td>{{ $applicant->father_birthday  ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Father's Occupation</th>
                        <td>{{ $applicant->father_occupation  ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Father's Salary</th>
                        <td>{{ $applicant->father_salary  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Father's Address</th>
                        <td>{{ $applicant->father_address  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Mother's Full Name</th>
                        <td>{{ $applicant->mother_name  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Mother's Birthday</th>
                        <td>{{ $applicant->mother_birthday  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Mother's Occupation</th>
                        <td>{{ $applicant->mother_occupation  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Mother's Salary</th>
                        <td>{{ $applicant->mother_salary  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Mother's Address</th>
                        <td>{{ $applicant->mother_address  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Guardian's Full Name</th>
                        <td>{{ $applicant->guardian_name  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Guardian's Birthday</th>
                        <td>{{ $applicant->guardian_birthday  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Guardian's Occupation</th>
                        <td>{{ $applicant->guardian_occupation  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Guardian's Salary</th>
                        <td>{{ $applicant->guardian_salary  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>Guardian's Address</th>
                        <td>{{ $applicant->guardian_address  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th>AI Eligibility Assessment Score</th>
                        <td>{{ $applicant->ai_eligibility_score ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>
    
            <!-- Action Buttons -->
            <div class="application-actions">
                <form action="{{ route('applicants.approve', ['id' => $applicant->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn approve">Approve</button>
                </form>
                <form action="{{ route('applicants.reject', ['id' => $applicant->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn reject">Reject</button>
                </form>
                <a href="/admin/application-review"><button" class="btn back">Back</button></a>
            </div>
        </div>
    </body>
    
    </html>
    
</x-admin-sidenav2>