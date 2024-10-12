<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link rel="stylesheet" href="appstep2.css">
    <link rel="stylesheet" href="{{ asset('assets/css/appstep2.css')}}">
</head>
<body>

    <div class="container">
        <div class="title">
            <p> Parents / Guardian Information </p>
        </div>
        <form method="POST" action="{{ url('/application/store') }}" enctype="multipart/form-data">
    @csrf
            <div class="user_details">
                <div class="container">
                    <div class="title-Parents">
                        <p> Father's Information </p>
                    </div>
                </div>
                <div class="input_box">
                    <label for="ffname">Father's Full Name *</label>
                    <input type="text" id="ffname" placeholder="Enter your Father's Full Name" required>
                </div>
                <div class="input_box">
                    <label for="birthday">Birthday *</label>
                    <input type="date" id="Birthday" required>
                </div>
                <div class="input_box">
                    <label for="occupation">Father's Occupation *</label>
                    <input type="text" id="Occupation" placeholder="Enter your Father's Occupation" required>
                </div>
                <div class="input_box">
                    <label for="salary">Salary *</label>
                    <input type="number" id="Salary" placeholder="Enter your Father's Salary" required>
                </div>
                <div class="input_box">
                    <label for="address">Address *</label>
                    <input type="text" id="address" placeholder="Enter your Father's Address" required>
                </div>
                <div class="input_box">
                    <label for="contact-number">Contact Number *</label>
                    <input type="number" id="contact-number" placeholder="Enter your Father's Contact Number" required>
                </div>  

                <div class="container">
                    <div class="title-Parents">
                        <p> Mother's Information </p>
                    </div>
                </div>

                <div class="input_box">
                    <label for="Mfname">Mother's Fullname (Maiden Name)*</label>
                    <input type="text" id="middlename" placeholder="Enter your Mother's Full Name" required>
                </div>
                <div class="input_box">
                    <label for="birthday">Birthday *</label>
                    <input type="date" id="Birthday" required>
                </div>
                <div class="input_box">
                    <label for="occupation">Mother's Occupation *</label>
                    <input type="text" id="Occupation" placeholder="Enter your Mother's Occupation" required>
                </div>
                <div class="input_box">
                    <label for="salary">Salary *</label>
                    <input type="number" id="Salary" required placeholder="Enter your Mother's Salary" required>
                </div>
                <div class="input_box">
                    <label for="address">Address *</label>
                    <input type="text" id="address" required placeholder="Enter your Mother's Address" required>
                </div>
                <div class="input_box">
                    <label for="contact-number">Contact Number *</label>
                    <input type="text" id="contact-number" required placeholder="Enter your Mother's Contact Number" required> 
                </div>
            </div>

            <div class="back_btn">
                <br> 
                <a href="/appstep1" class="btnback">
                    <i class="uil uil-navigator"></i>
                    Back 
                </a>
            </div>

            <div class="reg_btn">
                <a href="/appstep3" class="btnnext">
                    Next 
                </a>
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
