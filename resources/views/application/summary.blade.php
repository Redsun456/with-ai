<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Summary</title>
    <link rel="stylesheet" href="{{ asset('assets/css/summary.css') }}">
</head>
<body>

    <div class="container">
        <div class="title">
            <h2>Application Summary</h2>
        </div>
        
        <div class="summary-content">
            <section>
                <h3>Personal Information</h3>
                <p><strong>Student Number:</strong> {{ $applicantData['student_number'] }}</p>
                <p><strong>Program / Course:</strong> {{ $applicantData['program_course'] }}</p>
                <p><strong>Year and Section:</strong> {{ $applicantData['year_section'] }}</p>
                <p><strong>Full Name:</strong> {{ $applicantData['first_name'] }} {{ $applicantData['middle_name'] }} {{ $applicantData['last_name'] }} {{ $applicantData['suffix'] }}</p>
                <p><strong>Date of Birth:</strong> {{ $applicantData['date_of_birth'] }}</p>
                <p><strong>Address:</strong> {{ $applicantData['address'] }}</p>
                <p><strong>Contact Number:</strong> {{ $applicantData['contact_number'] }}</p>
                <p><strong>Email Address:</strong> {{ $applicantData['email'] }}</p>
                <p><strong>Gender:</strong> {{ $applicantData['gender'] }}</p>
            </section>

            <section>
                <h3>Parent / Guardian Information</h3>
                <p><strong>Father's Name:</strong> {{ $applicantData['father_name'] ?? 'N/A' }}</p>
                <p><strong>Father's Birthdate:</strong> {{ $applicantData['father_birthday'] ?? 'N/A' }}</p>
                <p><strong>Father's Occupation:</strong> {{ $applicantData['father_occupation'] ?? 'N/A' }}</p>
                <p><strong>Father's Salary:</strong> {{ $applicantData['father_salary'] ?? 'N/A' }}</p>
                <p><strong>Father's Contact:</strong> {{ $applicantData['father_contact'] ?? 'N/A' }}</p>
                <p><strong>Mother's Name:</strong> {{ $applicantData['mother_name'] ?? 'N/A' }}</p>
                <p><strong>Mother's Birthdate:</strong> {{ $applicantData['mother_birthday'] ?? 'N/A' }}</p>
                <p><strong>Mother's Occupation:</strong> {{ $applicantData['mother_occupation'] ?? 'N/A' }}</p>
                <p><strong>Mother's Salary:</strong> {{ $applicantData['mother_salary'] ?? 'N/A' }}</p>
                <p><strong>Mother's Contact:</strong> {{ $applicantData['mother_contact'] ?? 'N/A' }}</p>
                <p><strong>Guardian's Name:</strong> {{ $applicantData['guardian_name'] ?? 'N/A' }}</p>
                <p><strong>Guradian's Birthdate:</strong> {{ $applicantData['guardian_birthday'] ?? 'N/A' }}</p>
                <p><strong>Guardian's Occupation:</strong> {{ $applicantData['guardian_occupation'] ?? 'N/A' }}</p>
                <p><strong>Guardian's Salary:</strong> {{ $applicantData['guardian_salary'] ?? 'N/A' }}</p>
                <p><strong>Guardian's Contact:</strong> {{ $applicantData['guardian_contact'] ?? 'N/A' }}</p>
            </section>

            <section>
                <h3>Uploaded Files</h3>
                <p><strong>ID Picture:</strong> 
                    <a href="{{ asset($applicantData['id_file']) }}" target="_blank">View Uploaded ID Picture</a>
                </p>
                <p><strong>Requirements:</strong> 
                    @foreach(json_decode($applicantData['requirement_files']) as $file)
                        <a href="{{ asset($file) }}" target="_blank">{{ basename($file) }}</a>@if(!$loop->last), @endif
                    @endforeach
                </p>
            </section>

            <div class="reg_btn">
                <a href="{{ route('application.step2') }}" class="btnback">Back</a>
                <form method="POST" action="{{ route('application.confirm') }}" style="display: inline;">
                    @csrf
                    <button type="submit">Confirm & Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
