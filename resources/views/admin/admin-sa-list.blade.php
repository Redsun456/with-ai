@php
    $page_label = "Student Assistants List";
@endphp
<x-admin-sidenav :pageLabel="$page_label">
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Student Assistants </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('assets/css/admin-sa-list.css')}}">
</head>
<body>

<div class="student-assistant-container">
    <!-- Search Bar -->
    <div class="search-container">
        <input type="text" id="search-bar" placeholder="Search by student name or department..." onkeyup="searchStudentAssistant()">
    </div>

    <!-- Student Assistant Table -->
    <table id="student-assistant-table">
        <thead>
            <tr>
                <th>Student Number</th>
                <th>Full Name</th>
                <th>Program</th>
                <th>Year</th>
                <th>Section</th>
                <th>Assigned Department</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example rows, dynamically populated from database -->
            <tr>
                <td>2021-00123</td>
                <td>John Doe</td>
                <td>BS IT</td>
                <td>3rd Year</td>
                <td>IT 301</td>
                <td>Library</td>
            </tr>
            <tr>
                <td>2022-00234</td>
                <td>Jane Smith</td>
                <td>BS CS</td>
                <td>1st Year</td>
                <td>CS 101</td>
                <td>IT Department</td>
            </tr>
            <tr>
                <td>2021-00345</td>
                <td>Michael Brown</td>
                <td>BS SE</td>
                <td>2nd Year</td>
                <td>SE 202</td>
                <td>Admin Office</td>
            </tr>
            <tr>
                <td>2020-00456</td>
                <td>Emily Davis</td>
                <td>BS IS</td>
                <td>4th Year</td>
                <td>IS 401</td>
                <td>Research Department</td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    function searchStudentAssistant() {
    const input = document.getElementById('search-bar').value.toUpperCase();
    const table = document.getElementById('student-assistant-table');
    const tr = table.getElementsByTagName('tr');

    for (let i = 1; i < tr.length; i++) {
        const tdName = tr[i].getElementsByTagName('td')[1];  // Full Name
        const tdDepartment = tr[i].getElementsByTagName('td')[5];  // Assigned Department

        if (tdName || tdDepartment) {
            const nameText = tdName.textContent || tdName.innerText;
            const deptText = tdDepartment.textContent || tdDepartment.innerText;
            
            if (nameText.toUpperCase().indexOf(input) > -1 || deptText.toUpperCase().indexOf(input) > -1) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }
        }
    }
</script>
</body>
</html>
</x-admin-sidenav>