<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset ('assets/css/appstep1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

    <div class="container">
        <div class="title">
            
            <p> Personal Information </p>
        </div>

        <form method="POST" action="{{ route('application.storeStep1') }}" enctype="multipart/form-data">
            @csrf
            <div class="upload-container" onclick="document.getElementById('idFile').click()">
                <i class="fas fa-cloud-upload-alt"></i>
                <p>Upload your ID Here</p>
                <input type="file" id="idFile" name="id_file" accept=".svg, .png, .jpg, .gif" required>
            </div>
            <br>
            <div class="file-upload-container">
                <label class="file-upload-label">Send Your Requirements Here:</label>
                <div class="file-upload-input">
                    <label for="requirementsFiles" class="file-upload-button">Choose Files</label>
                    <input id="requirementsFiles" name="requirement_files[]" type="file" multiple required>
                    <span class="file-upload-text">No file chosen</span>
                </div>
            </div>

            <div class="user_details">
                <div class="input_box">
                    <label for="Snumber">Student Number</label>
                    <input type="number" name="student_number" value="{{ old('student_number') }}" placeholder="Enter your Student Number" required>
                </div>

                <div class="input_box">
                    <label for="pc">Program</label>
                    <input type="text" name="program_course" value="{{ old('progaram_course') }}" id="p/c" placeholder="Enter your Program ex. BSIT" required>
                </div>

                <div class="input_box">
                    <label for="pc">Year and Section</label>
                    <input type="text" id="yas" name="year_section" value="{{ old('year_section') }}" placeholder="Enter your Year and Section ex.4102" required>
                </div>

                <div class="input_box">
                    <label for="Fname">First name</label>
                    <input type="text" id="Fname" name="first_name" value="{{ old('first_name') }}" placeholder="Enter your First Name" required>
                </div>

                <div class="input_box">
                    <label for="Mname">Middle name</label>
                    <input type="text" id="Fname" name="middle_name" value="{{ old('middle_name') }}" placeholder="Enter your Middle Name" required>
                </div>

                <div class="input_box">
                    <label for="Lname">Last name</label>
                    <input type="text" id="Fname" name="last_name" value="{{ old('last_name') }}" placeholder="Enter your Last Name" required>
                </div>

                <div class="input_box">
                    <label for="sufix">Suffix</label>
                    <input type="text" id="suffix" name="suffix" value="{{ old('suffix') }}" placeholder="Suffix ex. Jr">
                </div>


                <div class="input_box">
                    <label for="Birth">Date of Birth</label>
                    <input type="date" name="date_of_birth" id="date of birth" value="{{ old('date_of_birth') }}" placeholder="Enter your Date of Birth" required>
                </div>

                <div class="input_box">
                    <label for="Address">Address</label>
                    <input type="text" name="address" id="Address" value="{{ old('address') }}" placeholder="Enter your Address" required>
                </div>

                <div class="input_box">
                    <label for="Cnumber">Contact Number</label>
                    <input type="number" name="contact_number" id="num" value="{{ old('contact_number') }}"  placeholder="Enter your Contact Number" required>
                </div>

                <div class="input_box">
                    <label for="Email Address">Email Address</label>
                    <input type="email" name="email" id="ea" value="{{ old('email') }}" placeholder="Enter your Email Address" required>
                </div>
            </div>
            <div class="gender">
                <span class="gender_title">Gender</span>
            
                <input type="radio" name="gender" id="radio_1" value="Male" required>
                <input type="radio" name="gender" id="radio_2" value="Female" required>
            
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
            <br>

            <div class="button">
            <div class="back_btn">
                <a href="/" class="btnback">
                    <i class="uil uil-navigator"></i>
                    Back 
                </a>
            </div>
            <div class="reg_btn">
                <button type="submit" class="btnnext">Next</button>
                <i class="uil uil-navigator"></i>
            </div>
        </div>
        </form>
    </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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