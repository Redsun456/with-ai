@php
    $page_label = "Student Assistants Attendance";
@endphp
<x-admin-sidenav :pageLabel="$page_label">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('assets/css/admin-sa-scheduling.css')}}">
    <title>Student Assistants Attendance</title>
</head>

<body>

    <div class="schedule-panel">
        <header>
            <h1>Student Assistant Scheduling Management</h1>
        </header>

        <!-- SA List Panel -->
        <div class="sa-schedule-list">
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
                            <button class="btn manage-schedule" onclick="openScheduleModal('2021-00123')">Manage Schedule</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2022-00234</td>
                        <td>Jane Smith</td>
                        <td>HR Department</td>
                        <td>
                            <button class="btn manage-schedule" onclick="openScheduleModal('2022-00234')">Manage Schedule</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Schedule Management Modal -->
        <div class="modal" id="schedule-modal">
            <div class="modal-content">
                <span class="close-btn" onclick="closeScheduleModal()">&times;</span>
                <h2>Manage Schedule</h2>

                <form>
                    <div class="schedule-detail">
                        <h3>Set Detailed 12-Day Duty Schedule</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="duty-schedule">
                                <tr>
                                    <td><input type="date" name="schedule-date-1"></td>
                                    <td><input type="time" name="start-time-1"></td>
                                    <td><input type="time" name="end-time-1"></td>
                                    <td>
                                        <button type="button" class="btn add-schedule" onclick="addSchedule()">Add</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="schedule-summary">
                        <h3>Summary of Scheduled Duties</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="schedule-summary-table">
                                <!-- Placeholder for Summary -->
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="modal-actions">
                        <button type="submit" class="btn-save">Save Schedule</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script>
        function openScheduleModal(saId) {
            document.getElementById("schedule-modal").style.display = "flex";
        }

        function closeScheduleModal() {
            document.getElementById("schedule-modal").style.display = "none";
        }

        function addSchedule() {
            const dateInput = document.querySelector('input[name="schedule-date-1"]').value;
            const startTime = document.querySelector('input[name="start-time-1"]').value;
            const endTime = document.querySelector('input[name="end-time-1"]').value;

            if (dateInput && startTime && endTime) {
                const scheduleTable = document.getElementById('schedule-summary-table');
                const newRow = document.createElement('tr');
                const rowCount = scheduleTable.rows.length + 1;

                newRow.innerHTML = `
                    <td>${rowCount}</td>
                    <td>${dateInput}</td>
                    <td>${startTime}</td>
                    <td>${endTime}</td>
                    <td><button type="button" class="btn delete-schedule" onclick="deleteSchedule(this)">Delete</button></td>
                `;
                scheduleTable.appendChild(newRow);
            } else {
                alert("Please fill in all fields.");
            }
        }

        function deleteSchedule(button) {
            const row = button.parentNode.parentNode;
            row.remove();
        }
    </script>


</body>

</html>

</x-admin-sidenav>