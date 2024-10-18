@php
    $page_label = "Student Assistants Attendance";
@endphp
<x-admin-sidenav :pageLabel="$page_label">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('assets/css/admin-sa-attendance.css')}}">
    <title>Student Assistants Attendance</title>
</head>

<body>

  <div class="attendance-panel">
    <header>
        <h1>Student Assistant Attendance Management</h1>
    </header>

    <!-- SA Attendance List Panel -->
    <div class="sa-attendance-list">
        <table>
            <thead>
                <tr>
                    <th>Student Number</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2021-00123</td>
                    <td>John Doe</td>
                    <td>IT Department</td>
                    <td>
                        <button class="btn mark-attendance" onclick="openAttendanceModal('2021-00123')">Mark Attendance</button>
                    </td>
                </tr>
                <tr>
                    <td>2022-00234</td>
                    <td>Jane Smith</td>
                    <td>HR Department</td>
                    <td>
                        <button class="btn mark-attendance" onclick="openAttendanceModal('2022-00234')">Mark Attendance</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Attendance Management Modal -->
    <div class="modal" id="attendance-modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeAttendanceModal()">&times;</span>
            <h2>Mark Attendance</h2>

            <form>
                <div class="attendance-detail">
                    <h3>12-Day Duty Attendance Input</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="attendance-schedule">
                            <tr>
                                <td><input type="date" name="attendance-date-1"></td>
                                <td><input type="time" name="start-time-1"></td>
                                <td><input type="time" name="end-time-1"></td>
                                <td>
                                    <select name="attendance-status-1">
                                        <option value="present">Present</option>
                                        <option value="late">Late</option>
                                        <option value="absent">Absent</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn add-attendance" onclick="addAttendance()">Add</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="attendance-summary">
                    <h3>Summary of Attendance</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="attendance-summary-table">
                            <!-- Placeholder for Attendance Summary -->
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="modal-actions">
                    <button type="submit" class="btn-save">Save Attendance</button>
                </div>
            </form>
        </div>
    </div>

</div>

<script>
    function openAttendanceModal(saId) {
        document.getElementById("attendance-modal").style.display = "flex";
    }

    function closeAttendanceModal() {
        document.getElementById("attendance-modal").style.display = "none";
    }

    function addAttendance() {
        const dateInput = document.querySelector('input[name="attendance-date-1"]').value;
        const startTime = document.querySelector('input[name="start-time-1"]').value;
        const endTime = document.querySelector('input[name="end-time-1"]').value;
        const status = document.querySelector('select[name="attendance-status-1"]').value;

        if (dateInput && startTime && endTime) {
            const attendanceTable = document.getElementById('attendance-summary-table');
            const newRow = document.createElement('tr');
            const rowCount = attendanceTable.rows.length + 1;

            newRow.innerHTML = `
                <td>${rowCount}</td>
                <td>${dateInput}</td>
                <td>${startTime}</td>
                <td>${endTime}</td>
                <td>${status.charAt(0).toUpperCase() + status.slice(1)}</td>
                <td><button type="button" class="btn delete-attendance" onclick="deleteAttendance(this)">Delete</button></td>
            `;
            attendanceTable.appendChild(newRow);
        } else {
            alert("Please fill in all fields.");
        }
    }

    function deleteAttendance(button) {
        const row = button.parentNode.parentNode;
        row.remove();
    }
</script>


</body>

</html>

</x-admin-sidenav>