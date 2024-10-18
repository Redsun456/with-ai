@php
    $page_label = "Student Assistants Attendance";
@endphp
<x-admin-sidenav :pageLabel="$page_label">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('assets/css/admin-department-assignment.css')}}">
    <title>Student Assistants Attendance</title>
</head>

<body>

  <div class="department-panel">
    <header>
        <h1>Department Designation Management</h1>
    </header>

    <!-- SA Department Assignment List Panel -->
    <div class="sa-department-list">
        <table>
            <thead>
                <tr>
                    <th>Student Number</th>
                    <th>Name</th>
                    <th>Current Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2021-00123</td>
                    <td>John Doe</td>
                    <td>IT Department</td>
                    <td>
                        <button class="btn assign-department" onclick="openDepartmentModal('2021-00123')">Assign / Update Department</button>
                    </td>
                </tr>
                <tr>
                    <td>2022-00234</td>
                    <td>Jane Smith</td>
                    <td>HR Department</td>
                    <td>
                        <button class="btn assign-department" onclick="openDepartmentModal('2022-00234')">Assign / Update Department</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Department Assignment Modal -->
    <div class="modal" id="department-modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeDepartmentModal()">&times;</span>
            <h2>Assign / Update Department</h2>

            <form>
                <div class="form-group">
                    <label for="student-number">Student Number:</label>
                    <input type="text" id="student-number" name="student-number" readonly>
                </div>
                <div class="form-group">
                    <label for="sa-name">Name:</label>
                    <input type="text" id="sa-name" name="sa-name" readonly>
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <select id="department" name="department">
                        <option value="IT">IT Department</option>
                        <option value="HR">HR Department</option>
                        <option value="Finance">Finance Department</option>
                        <option value="Marketing">Marketing Department</option>
                        <option value="Admin">Admin Department</option>
                    </select>
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn save" onclick="saveDepartmentAssignment()">Save Assignment</button>
                </div>
            </form>
        </div>
    </div>

</div>

<script>
    function openDepartmentModal(saId) {
        document.getElementById("department-modal").style.display = "flex";
        // Mockup data population - in a real scenario, this would fetch data based on `saId`
        if (saId === '2021-00123') {
            document.getElementById('student-number').value = '2021-00123';
            document.getElementById('sa-name').value = 'John Doe';
        } else if (saId === '2022-00234') {
            document.getElementById('student-number').value = '2022-00234';
            document.getElementById('sa-name').value = 'Jane Smith';
        }
    }

    function closeDepartmentModal() {
        document.getElementById("department-modal").style.display = "none";
    }

    function saveDepartmentAssignment() {
        const studentNumber = document.getElementById('student-number').value;
        const department = document.getElementById('department').value;

        // Example action - In reality, this would send data to the server
        alert(`Department assignment for ${studentNumber} updated to ${department}.`);
        closeDepartmentModal();
    }
</script>


</body>

</html>

</x-admin-sidenav>