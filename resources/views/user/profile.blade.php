@php
    $page_label = "Profile";
@endphp
<x-user-sidenav :pageLabel="$page_label"> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset ('assets/css/profile.css')}}">
</head>
<body>
  <div class="settings-container">
    <div class="account-section">
        <h1>Account</h1>
        <div class="avatar-section">
            <h2>Avatar</h2>
            <p>Display Picture</p>
            <div class="avatar-placeholder">
                <i class="fas fa-camera"></i>
            </div>
        </div>

        <div class="profile-section">
            <h2>Profile Information</h2>
          <br>
            <div class="profile-info">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user"></i>
                        <input type="text" id="firstName" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="middleName">Middle Name</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user"></i>
                        <input type="text" id="middleName" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user"></i>
                        <input type="text" id="lastName"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="suffix">Suffix</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user"></i>
                        <input type="text" id="suffix" >
                    </div> 
                </div>
                
                <h2>Profile Information</h2>
                <br>
                
                <div class="form-group">
                    <label for="Email">Email</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="e" >
                    </div> 
                </div>  

                <div class="form-group">
                    <label for="pe">Personal Email</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="pe" >
                    </div> 
                </div>

                <div class="form-group">
                    <label for="pn">Phone Number</label>
                    <div class="input-wrapper">
                        <i class="fas fa-phone"></i>
                        <input type="number" id="pn" >
                    </div> 
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <div class="input-wrapper">
                        <i class="fas fa-calendar"></i>
                        <input type="date" id="dob" >
                    </div> 
                </div>

                <h2>Secutity</h2>
                <br>
                <h3>Change your password</h3>

            </div>

            <div class="form-group">
                <label for="dob"><br>Current Passowrd *</label>
                <div class="input-wrapper">
                  <i class="fas fa-lock icon"></i>
                    <input type="password" id="cp" >
                </div> 
            </div>

            <div class="form-group">
                <label for="dob"><br>New password *</label>
                <div class="input-wrapper">
                  <i class="fas fa-lock icon"></i>
                    <input type="password" id="np" >
                </div> 
            </div>

            <div class="form-group">
              <label for="dob"><br>Confirm password *</label>
              <div class="input-wrapper">
                <i class="fas fa-lock icon"></i>
                  <input type="password" id="cp" >
              </div> 
          </div>


        </div>
</div>
</body>
</html>

</x-user-sidenav>