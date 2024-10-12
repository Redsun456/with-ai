<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link rel="stylesheet" href="appstep3.css">
    <link rel="stylesheet" href="{{ asset ('assets/css/appstep3.css')}}">
</head>
<body>

    <div class="container">
        <div class="title">
            
            <p> Account Registration </p>
        </div>

        <form method="post" action="{{ url('/application/store') }}" enctype="multipart/form-data">
    @csrf
            <div class="user_details">
                <div class="input_box">
                    <label for="Snumber">Student Number</label>
                    <input type="number" name="Snumber" placeholder="Enter your Student Number" required>
                </div>

                <div class="input_box">
                    <label for="ea">Email Address *</label>
                    <input type="email" name="ea" placeholder="Enter your Email Address" required>
                </div>
 
                <div class="input_box">
                    <label for="pass">Password *</label>
                    <input type="password" name="pass" placeholder="Enter your Password" required>
                </div>

                <div class="input_box">
                    <label for="cp">Confirm Password *</label>
                    <input type="Password" id="cp" name="cp" placeholder="Confirm Password" required>
                </div>

            </div>

            <div class="reg_btn">
            <button type="submit">Submit</button>
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