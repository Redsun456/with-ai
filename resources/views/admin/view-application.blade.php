@php
    $page_label = "View Application";
@endphp
<x-admin-sidenav :pageLabel="$page_label">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('assets/css/admin-view-application.css') }}">
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
                <img src="path-to-id-picture" alt="ID Picture">
            </div>
            <div class="requirements">
                <h2>Requirements Uploaded</h2>
                <ul>
                    <li>Birth Certificate</li>
                    <li>Transcript of Records</li>
                    <li>Certificate of Good Moral</li>
                    <!-- Add more requirements as needed -->
                </ul>
            </div>
        </div>

        <!-- Application Details Table -->
        <div class="application-details">
            <table>
                <tr>
                    <th>Student Number</th>
                    <td>2021-00123</td>
                </tr>
                <tr>
                    <th>Program</th>
                    <td>BS Information Technology</td>
                </tr>
                <tr>
                    <th>Year and Section</th>
                    <td>3rd Year, IT-301</td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td>John Doe</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>January 15, 2001</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>123 Main St, City, Country</td>
                </tr>
                <tr>
                    <th>Contact Number</th>
                    <td>+1234567890</td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <td>johndoe@example.com</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>Male</td>
                </tr>
                <tr>
                    <th>Father's Full Name</th>
                    <td>Michael Doe</td>
                </tr>
                <tr>
                    <th>Father's Birthday</th>
                    <td>June 12, 1975</td>
                </tr>
                <tr>
                    <th>Father's Occupation</th>
                    <td>Engineer</td>
                </tr>
                <tr>
                    <th>Father's Salary</th>
                    <td>$50,000</td>
                </tr>
                <tr>
                    <th>Father's Address</th>
                    <td>123 Main St, City, Country</td>
                </tr>
                <tr>
                    <th>Mother's Full Name</th>
                    <td>Mary Doe</td>
                </tr>
                <tr>
                    <th>Mother's Birthday</th>
                    <td>August 20, 1978</td>
                </tr>
                <tr>
                    <th>Mother's Occupation</th>
                    <td>Teacher</td>
                </tr>
                <tr>
                    <th>Mother's Salary</th>
                    <td>$40,000</td>
                </tr>
                <tr>
                    <th>Mother's Address</th>
                    <td>123 Main St, City, Country</td>
                </tr>
                <tr>
                    <th>AI Eligibility Assessment Score</th>
                    <td>100%</td>
                </tr>
            </table>
        </div>

        <!-- Action Buttons -->
        <div class="application-actions">
            <button class="btn approve">Approve</button>
            <button class="btn reject">Reject</button>
        </div>

    </div>
</body>

</html>
</x-admin-sidenav>