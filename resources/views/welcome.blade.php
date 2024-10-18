<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Assistance Management System - Sign In</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="{{ asset ('assets/css/login.css')}}">
</head>
<body>
    <div class="container">
        <!-- Left Section -->
        <div class="login-section">
            <div class="login-box">
                <div class="logo">
                <img src="{{ asset ('assets/images/bcplg.png') }}" alt="Bestlink College of the Philippines">
                </div>
                <h2>Sign in</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group">
                        <label for="username">Email or Student Number *</label>
                        <input type="text" name="identifier" placeholder="Email or Student Number" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password *</label>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <button type="submit">Sign in</button>
                </form>
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="info-section">
            <div class="image">
            <img src="{{asset ('assets/images/famsimg.png')}}" alt="Financial Assistance">
            <h1>Financial Assistance </h1>
            <p><a href="/appstep1">Student Application click here</a></p>
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

</body>

</html>