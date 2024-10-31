<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/appstep2.css')}}">
</head>
<body>

    <div class="container">
        <div class="title">
            <p> Parents / Guardian Information </p>
        </div>
        <form method="POST" action="{{ route('application.storeStep2') }}" enctype="multipart/form-data">
            @csrf
            <div class="user_details">
                <div class="container">
                    <div class="title-Parents">
                        <p> Father's Information </p>
                    </div>
                </div> 
                <div class="input_box">
                    <label for="ffname">Father's Full Name </label>
                    <input type="text" name="father_name" id="ffname" placeholder="Enter your Father's Full Name" >
                </div>
                <div class="input_box">
                    <label for="birthday">Birthday </label>
                    <input type="date" name="father_birthday" id="Birthday" >
                </div>
                <div class="input_box">
                    <label for="occupation">Father's Occupation </label>
                    <input type="text" name="father_occupation" placeholder="Enter your Father's Occupation" >
                </div>
                <div class="input_box">
                    <label for="salary">Salary </label>
                    <input type="number" name="father_salary" id="Salary" placeholder="Enter your Father's Salary" >
                </div>
                <div class="input_box">
                    <label for="address">Address </label>
                    <input type="text"  name="father_address" id="address" placeholder="Enter your Father's Address" >
                </div>
                <div class="input_box">
                    <label for="contact-number">Contact Number </label>
                    <input type="number" name="father_contact" id="contact-number" placeholder="Enter your Father's Contact Number" >
                </div>  

                <div class="container">
                    <div class="title-Parents">
                        <p> Mother's Information </p>
                    </div>
                </div>

                <div class="input_box">
                    <label for="Mfname">Mother's Fullname (Maiden Name)</label>
                    <input type="text" name="mother_name" id="middlename" placeholder="Enter your Mother's Full Name" >
                </div>
                <div class="input_box">
                    <label for="birthday">Birthday </label>
                    <input type="date" name="mother_birthday" id="Birthday" >
                </div>
                <div class="input_box">
                    <label for="occupation">Mother's Occupation </label>
                    <input type="text" name="mother_occupation" id="Occupation" placeholder="Enter your Mother's Occupation" >
                </div>
                <div class="input_box">
                    <label for="salary">Salary </label>
                    <input type="number" name="mother_salary" id="Salary"  placeholder="Enter your Mother's Salary" >
                </div>
                <div class="input_box">
                    <label for="address">Address </label>
                    <input type="text" name="mother_address" id="address"  placeholder="Enter your Mother's Address" >
                </div>
                <div class="input_box">
                    <label for="contact-number">Contact Number </label>
                    <input type="number" name="mother_contact" id="contact-number"  placeholder="Enter your Mother's Contact Number" > 
                </div>

                <div class="container">
                    <div class="title-Parents">
                        <p> Guardian's Information </p>
                    </div>
                </div>
    
                <div class="input_box">
                    <label for="Gfname">Guardian's Fullname (<span style="font-size: 11.2px">Maiden Name if Female</span>)*</label>
                    <input type="text" name="guardian_name" id="middlename" placeholder="Enter your Gurdian's Full Name" >
                </div>
                <div class="input_box">
                    <label for="birthday">Birthday </label>
                    <input type="date" name="guardian_birthday" id="Birthday" >
                </div>
                <div class="input_box">
                    <label for="occupation">Guardian's Occupation </label>
                    <input type="text" name="guardian_occupation" id="Occupation" placeholder="Enter your Guardian's Occupation" >
                </div>
                <div class="input_box">
                    <label for="salary">Salary </label>
                    <input type="number" name="guardian_salary" id="Salary"  placeholder="Enter your Guardian's Salary" >
                </div>
                <div class="input_box">
                    <label for="address">Address </label>
                    <input type="text" name="guardian_address" id="address"  placeholder="Enter your Guardian's Address" >
                </div>
                <div class="input_box">
                    <label for="contact-number">Contact Number </label>
                    <input type="number" name="guardian_contact" id="contact-number"  placeholder="Enter your Guardian's Contact Number" > 
                </div>
            </div>

            <div class="back_btn">
                <br> 
                <a href="/application/step1" class="btnback">
                    <i class="uil uil-navigator"></i>
                    Back 
                </a>
            </div>

            <div class="reg_btn">
                <button type="submit" class="btnnext">Next</button>
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
        <br>
        <p>Note: If don't have both parents, leave it blank and just fill the guardian's information</p>
    </aside>

</body>
</html>
