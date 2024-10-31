@php
    $page_label = "Concerns";
@endphp
<x-user-sidenav2 :pageLabel="$page_label"> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>User Concerns Management</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset ('assets/css/user-concerns.css')}}">
    </head>
    <body>
        <div class="concern-management-container">
            <!-- Button to open the modal -->
            <button id="openConcernModal" class="btn-primary">
                <i class='bx bx-plus'></i> Add New Concern
            </button>
    
            <!-- Create Concern Modal -->
            <div id="createConcernModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeConcernModal()">&times;</span>
                    <h2>Create New Concern</h2>
                    <form>
                        <div class="concern-form-group">
                            <label for="title">Concern Title</label>
                            <input type="text" id="title" name="title" required>
                        </div>
                        <div class="concern-form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" rows="4" required></textarea>
                        </div>
                        <button type="button" id="saveConcernButton" class="save-btn">
                            <i class='bx bx-save'></i> Submit Concern
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Display concerns -->
            <table class="concern-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="concernTableBody">
                    <tr>
                        <td>1</td>
                        <td>Issue with Login</td>
                        <td>Unable to login with the new credentials</td>
                        <td>Open</td>
                        <td>
                            <button class="btn-warning"><i class='bx bx-edit'></i> Edit</button>
                            <button class="btn-danger"><i class='bx bx-trash'></i> Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                </tbody>
            </table>
        </div>
    
        <script>
            function openConcernModal() {
                document.getElementById("createConcernModal").style.display = "flex";
            }
    
            function closeConcernModal() {
                document.getElementById("createConcernModal").style.display = "none";
            }
    
            document.getElementById('openConcernModal').addEventListener('click', openConcernModal);
            document.getElementById('saveConcernButton').addEventListener('click', function () {
                alert("Concern submitted!");
                closeConcernModal();
            });
        </script>
    </body>
    </html>
    

</x-user-sidenav2>