@php
    $page_label = "User Management";
@endphp
<x-admin-sidenav :pageLabel="$page_label">
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-user-management.css') }}"> 
</head>
<body>
    <div class="user-management-container">

        <!-- Button to open the modal -->
        <button id="openSaveModal" class="btn-primary">
            <i class='bx bx-save'></i> Add New User
        </button>

        <!-- Save User Modal -->
        <div id="saveUserModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeSaveModal()">&times;</span>
                <h2>Add New User</h2>
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="user-form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="user-form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" required>
                    </div>
                    <div class="user-form-group">
                        <label for="studentno">Student Number</label>
                        <input type="text" id="studentno" name="student_number" required>
                    </div>
                    <div class="user-form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" id="saveButton" class="save-btn">
                        <i class='bx bx-save'></i> Save User
                    </button>
                </form>
            </div>
        </div>

        <!-- Edit User Modal -->
<div id="editUserModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeEditModal()">&times;</span>
        <h2>Edit User</h2>
        <form id="editUserForm" method="POST">
            @csrf
            @method('PUT')
            <div class="user-form-group">
                <label for="editName">Name</label>
                <input type="text" id="editName" name="name" required>
            </div>
            <div class="user-form-group">
                <label for="editEmail">Email</label>
                <input type="text" id="editEmail" name="email" required>
            </div>
            <div class="user-form-group">
                <label for="editStudentNumber">Student Number</label>
                <input type="text" id="editStudentNumber" name="student_number">
            </div>
            <div class="user-form-group">
                <label for="editPassword">New Password (Leave blank to keep current)</label>
                <input type="password" id="editPassword" name="password">
            </div>
            <button type="submit" class="save-btn">
                <i class='bx bx-save'></i> Update User
            </button>
        </form>
    </div>
</div>


        <!-- Search form -->
        <form method="GET" action="{{ route('users.search') }}">
            <div class="search-group">
                <span><i class='bx bx-search'></i></span>
                <input type="text" id="searchUser" name="search" placeholder="Search by Student Name...">
            </div>
        </form>

        <!-- Display the users -->
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Student Number</th>
                    <th>Name</th>
                    <th>Password (Encrypted)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="userTableBody">
                @if($users->isEmpty())
                    <tr>
                        <td colspan="6">No users found</td>
                    </tr>
                @else
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->student_number }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->password }}</td>
                            <td>
                                <!-- Edit button triggers the modal -->
                                <button class="btn-warning" onclick="openEditModal({{ $user->id }}, '{{ $user->name }}', '{{ $user->email }}', '{{ $user->student_number }}')">
                                    <i class='bx bx-edit'></i> Edit
                                </button><br>
                                <!-- Delete form -->
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">
                                        <i class='bx bx-trash'></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <script>
        function openSaveModal() {
            document.getElementById("saveUserModal").style.display = "block";
        }

        function closeSaveModal() {
            document.getElementById("saveUserModal").style.display = "none";
        }

        function openEditModal(id, name, email, studentNumber) {
    document.getElementById('editUserForm').action = `/admin/users/${id}`;
    document.getElementById('editName').value = name;
    document.getElementById('editEmail').value = email;
    document.getElementById('editStudentNumber').value = studentNumber;
    document.getElementById("editUserModal").style.display = "block";
    }


        function closeEditModal() {
            document.getElementById("editUserModal").style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target === document.getElementById("editUserModal")) {
                closeEditModal();
            }
            if (event.target === document.getElementById("saveUserModal")) {
                closeSaveModal();
            }
        }

        document.getElementById('openSaveModal').addEventListener('click', openSaveModal);
    </script>
</body>
</html>
</x-admin-sidenav>
