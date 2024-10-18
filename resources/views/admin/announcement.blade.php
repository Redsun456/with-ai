@php
    $page_label = "Admin Announcement";
@endphp

<x-admin-sidenav :pageLabel="$page_label">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('assets/css/admin-announcement.css') }}">
    <title>Announcement</title>
</head>
<body>

    <!-- Announcement Container -->
    <div class="announcement-container">
        <header>
            <h1>Announcements</h1>
        </header>
        <div class="announcement-list">
            <!-- Example announcement items -->
            <div class="announcement-item">
                <h3>Exam Schedule Released</h3>
                <p>All students are advised to check the updated exam schedules for this semester. Please be prepared.</p>
                <img src="announcement1.jpg" alt="Exam Announcement">
                <p><strong>Date: </strong>October 7, 2024</p>
            </div>

            <div class="announcement-item">
                <h3>School Fair</h3>
                <p>Join us for the school fair happening this weekend! Exciting games, prizes, and food stalls await!</p>
                <img src="announcement2.jpg" alt="School Fair">
                <p><strong>Date: </strong>October 5, 2024</p>
            </div>
            <!-- More announcements go here -->
        </div>
        <br>
        <!-- Button to trigger the modal -->
        <button class="create-announcement-btn" onclick="openModal()">Create Announcement</button>
    </div>

    <!-- Modal for Creating Announcement -->
    <div class="modal" id="announcement-modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2>Create New Announcement</h2>
            <form id="announcement-form">
                <label for="title">Title:</label>
                <input type="text" id="title" placeholder="Enter announcement title" required>

                <label for="description">Description:</label>
                <textarea id="description" placeholder="Enter announcement description" required></textarea>

                <!-- File Upload Section -->
                <div class="file-upload-container">
                    <label for="file-upload" class="file-upload-label">
                        <div class="file-upload-dropzone">
                            <p>Drag and drop an image or <span>click here</span> to upload</p>
                            <input type="file" id="file-upload" accept="image/*">
                        </div>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-btn">Create Announcement</button>
            </form>
        </div>
    </div>

    <script src="{{asset ('assets/js/admin-announcement.js') }}"></script>
</body>
</html>
</x-admin-sidenav>