@php
    $page_label = "Student Assistant List"
@endphp
<x-admin-sidenav2 :pageLabel="$page_label">
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Student Assistants </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('assets/css/admin-sa-list.css')}}">
    <link rel="icon" href="{{ asset('assets/images/bcplg.png') }}" type="image/png">
</head>
<body>

<div class="student-assistant-container">
    <!-- Search Bar -->
    <div class="search-container">
        <button class="add-sa-btn" onclick="openAddSAModal()">+ Add Student Assistant</button>
        <input type="text" id="search-bar" placeholder="Search by student name or department..." onkeyup="searchStudentAssistant()">
    </div>

    <!-- Student Assistant Table -->
    <table id="student-assistant-table">
        <thead>
            <tr>
                <th>Student Number</th>
                <th>Full Name</th>
                <th>Program</th>
                <th>Year&Section</th>
                <th>Assigned Department</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example rows, dynamically populated from database -->
            <tr>
                <td>21011234</td>
                <td>User</td>
                <td>BSIT</td>
                <td>4102</td>
                <td>CCS Department</td>
            </tr>
        </tbody>
    </table>

    
</div>

<!-- Add Student Assistant Modal -->
<div id="add-sa-modal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeAddSAModal()">&times;</span>
        <h2>Add Student Assistant</h2>
        <form id="add-sa-form">
            <div class="form-group">
                <label for="student-number">Student Number</label>
                <input type="text" id="student-number" name="student-number" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="first_name">Middle Name</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="first_name">Last Name</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="first_name">Suffix</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="program">Program</label>
                <input type="text" id="program" name="program" required>
            </div>
            <div class="form-group">
                <label for="year-section">Year & Section</label>
                <input type="text" id="year-section" name="year-section" required>
            </div>
            <div class="modal-actions">
                <button type="submit" class="btn save">Add Student Assistant</button>
            </div>
        </form>
    </div>
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
}
function openAddSAModal() {
        document.getElementById('add-sa-modal').style.display = 'flex';
    }

    function closeAddSAModal() {
        document.getElementById('add-sa-modal').style.display = 'none';
    }
</script>
</body>
</html>
</x-admin-sidenav2>