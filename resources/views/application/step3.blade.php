<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset ('assets/css/appstep3.css')}}">
</head>
<body>

    <div class="container">
        <div class="title">
            
            <p> Account Registration </p>
        </div>

        <form method="POST" action="{{ route('application.storeStep3') }}" enctype="multipart/form-data">
            @csrf
            <div class="user_details">
                <div class="input_box">
                    <label for="name">Username</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your Username" required>
                </div>
                <div class="input_box">
                    <label for="student_number">Student Number</label>
                    <input type="number" name="student_number" value="{{ old('student_number') }}" placeholder="Enter your Student Number" required>
                </div>

                <div class="input_box">
                    <label for="email">Email Address *</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your Email Address" required>
                </div>
 
                <div class="input_box">
                    <label for="password">Password *</label>
                    <input type="password" name="password" placeholder="Enter your Password" required>
                </div>

            </div>

            <div class="back_btn">
                <br> 
                <a href="/application/step2" class="btnback">
                    <i class="uil uil-navigator"></i>
                    Back 
                </a>
            </div>

            <div class="reg_btn">
                <button type="submit" class="btnnext">Finish</button>
                <i class="uil uil-navigator"></i>
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