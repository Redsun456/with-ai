<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link rel="stylesheet" href="app1.css">
    <link rel="stylesheet" href="{{ asset ('assets/css/appstep1.css') }}">
</head>
<body>

    <div class="container">
        <div class="title">
            
            <p> Personal Information </p>
        </div>

        <form method="POST" action="{{ url('/application/store') }}" enctype="multipart/form-data">
             @csrf
            <div class="upload-container" onclick="document.getElementById('fileInput').click()">
                <i class="fas fa-cloud-upload-alt"></i>
                <p></p>
                <p>Upload your ID Here</p>
                <p></p>
                <input type="file" id="fileInput" accept=".svg, .png, .jpg, .gif" />
            </div>
            <br>
            <div class="file-upload-container">
                <label class="file-upload-label">Send Your Requrements Here:</label>
                <div class="file-upload-input">
                    <label for="file-upload" class="file-upload-button">Choose Files</label>
                    <input id="file-upload" type="file" multiple>
                    <span class="file-upload-text">No file chosen</span>
                </div>
            </div>

            <div class="user_details">
                <div class="input_box">
                    <label for="Snumber">Student Number</label>
                    <input type="number" id="Snumber" placeholder="Enter your Student Number" required>
                </div>

                <div class="input_box">
                    <label for="pc">Program / Course</label>
                    <input type="text" id="p/c" placeholder="Enter your Course / Program" required>
                </div>

                <div class="input_box">
                    <label for="pc">Year and Section</label>
                    <input type="text" id="yas" placeholder="Enter your Year and Section" required>
                </div>

                <div class="input_box">
                    <label for="Fname">Full Name</label>
                    <input type="text" id="Fname" placeholder="Enter your Full Name" required>
                </div>

                <div class="input_box">
                    <label for="Birth">Date of Birth</label>
                    <input type="date" id="date of birth" placeholder="Enter your Date of Birth" required>
                </div>

                <div class="input_box">
                    <label for="Address">Address</label>
                    <input type="text" id="Address" placeholder="Enter your Address" required>
                </div>

                <div class="input_box">
                    <label for="Cnumber">Contact Number</label>
                    <input type="number" id="num" placeholder="Enter your Contact Number" required>
                </div>

                <div class="input_box">
                    <label for="Email Address">Email Address</label>
                    <input type="Email" id="ea" placeholder="Enter your Email Address" required>
                </div>
            </div>
            <div class="gender">
                <span class="gender_title">Gender</span>
                <input type="radio" name="gender" id="radio_1">
                <input type="radio" name="gender" id="radio_2">
                <input type="radio" name="gender" id="radio_3">

                <div class="category">
                    <label for="radio_1">
                        <span class="dot one"></span>
                        <span>Male</span>
                    </label>
                    <label for="radio_2">
                        <span class="dot two"></span>
                        <span>Female</span>
                    </label>
                </div>
            </div>
            <div class="reg_btn">
                  <a href="/appstep2" class="btnnext">Next</a>
                 <i class="uil uil-navigator"></i>
            </div>
        </form>
    </div>
    
    
    <aside class="requirements-section">
        <h2>Requirements</h2>
        <p>Xerox / Photo Copy of the following documents shall be submitted to your respective branch:</p>
        <ul>
            <li>School ID</li>
            <li>Certificate of Registration (COR)</li>
            <li>Parent's ID</li>
            <li>Letter of Consent</li>
        </ul>
    </aside>
</body>
</html>