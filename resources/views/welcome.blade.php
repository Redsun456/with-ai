<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System - Sign In</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset ('assets/css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Left Section -->
        <div class="login-section">
            <div class="login-box">
                <div class="img">
                    <img src="{{asset ('assets/images/famsimg.png')}}" alt="Financial Assistance" style="width: 200px;" >

                </div>
                <h2>Sign in</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group">
                        <label for="username">Username or Email*</label>
                        <input type="text" name="identifier" placeholder="Username or Email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password *</label>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class='bx bx-show' id="togglePassword"></i>
                    </div>
                    <button type="submit">Sign in</button>
                </form>
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="info-section">
            <div class="image">
            <img src="{{ asset ('assets/images/bcplg.png') }}"  alt="Financial Assistance" style="width: 200px;">
            <h1>Financial Assistance </h1>
            <p><a href="application/step1">Student Application click here</a></p>
            </div>
        </div>
    </div>

    <!-- Show error messages if any -->
    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <script>
        const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("password");

togglePassword.addEventListener("click", function () {
    // Toggle the type attribute
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
    
    // Toggle the eye icon
    this.classList.toggle("bx-show");
    this.classList.toggle("bx-hide");
});
    </script>

</body>

</html>
