<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="{{ asset('assets/images/bcplg.png') }}" type="image/png">
    <link rel="stylesheet" href="{{asset ('assets/css/admin-sidenav2.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.5/css/boxicons.min.css">
</head>
<body>
<!-- palitan mo nalang mga nakalagay dyan sa side base sa system nyo -->
    <div class="sidenav" id="sidenav">
        <h4 class="text-center" style="color: white; font-size: 20px;">Financial Assistance Department</h4><br><br>
        
        <div class="avatar-container text-center">
            <img src="{{asset('assets/images/avatar.webp')}}" alt="Avatar" class="avatar">
            <p class="username text-white">admin</p>
            <p class="email text-white">admin@gmail.com</p>
        </div>
        
        <div class="container mt-5">
            <div class="dropdownSmsprofile">
                <a class="dropdown-a" href="/admin/dashboard" style="text-decoration: none;"><i class='bx bx-grid-alt'></i> Dashboard</a>  
            </div>
            
            <div class="dropdownSmsprofile">
              <a class="dropdown-a" href="/admin/admin-profile" style="text-decoration: none;"> <i class='bx bx-user'></i> Admin Profile</a>
            </div>
    
            <div class="dropdownSmsprofile">
              <a class="dropdown-a" href="/admin/announcement" style="text-decoration: none;"> <i class='bx bxs-megaphone'></i>Announcement</a>
            </div>
    
            <div class="dropdownSmsprofile">
                <button class="dropdown-btn" onclick="toggleDropdown(this)">
                    <i class='bx bx-user'></i> Application Management <i class="fa fa-caret-down" style="float: right;"></i>
                </button>
                <div class="dropdown-container">
                    <a class="dropdown-a" href="/admin/application-review" style="text-decoration: none;"><span>Application Review</span></a>
                </div>
            </div>

            <div class="dropdownSmsprofile">
              <button class="dropdown-btn" onclick="toggleDropdown(this)">
                  <i class='bx bx-user'></i> User Management <i class="fa fa-caret-down" style="float: right;"></i>
              </button>
              <div class="dropdown-container">
                  <a class="dropdown-a" href="/admin/user-account-management" style="text-decoration: none;"><span>User Account</span></a>
              </div>
          </div>
    
            <div class="dropdownSmsprofile">
                <button class="dropdown-btn" onclick="toggleDropdown(this)">
                    <i class='bx bx-user'></i> Student Assistant Management <i class="fa fa-caret-down" style="float: right;"></i>
                </button>
                <div class="dropdown-container">
                    <a class="dropdown-a" href="/admin/sa-list" style="text-decoration: none;"><span>Student Assitant List</span></a>
                    <a class="dropdown-a" href="/admin/sa-scheduling" style="text-decoration: none;"><span>Scheduling</span></a>
                    <a class="dropdown-a" href="/admin/sa-attendance" style="text-decoration: none;"><span>Attendance</span></a>
                    <a class="dropdown-a" href="/admin/department-assignment" style="text-decoration: none;"><span>Department Assignment</span></a>
                </div>
            </div>

            <div class="dropdownSmsprofile">
              <button class="dropdown-btn" onclick="toggleDropdown(this)">
                  <i class='bx bx-money'></i> Disbursement Management<i class="fa fa-caret-down" style="float: right;"></i>
              </button>
              <div class="dropdown-container">
                  <a class="dropdown-a" href="/admin/disbursement" style="text-decoration: none;"><span>Disbursement</span></a>
              </div>
          </div>

    
            <div class="dropdownSmsprofile">
                <button class="dropdown-btn" onclick="toggleDropdown(this)">
                    <i class='bx bx-file'></i> Concerns <i class="fa fa-caret-down" style="float: right;"></i>
                </button>
                <div class="dropdown-container">
                    <a class="dropdown-a" href="/admin/concerns" style="text-decoration: none;"><span>Concerns</span></a>
                </div>
            </div>

            <div class="dropdownSmsprofile">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-button" style="background-color: transparent; color: white; padding-right: 145px; border: none; cursor: pointer"  >
                    <i class='bx bx-log-out'></i> Logout
                </button>
            </form>
            </div>
        </div>
    </div>
    
    
<div class="main" id="mainContent">
    <button class="btn" id="toggleButton">&nbsp; ☰ &nbsp;</button>
    <hr>
    <h2 class="text-left" style="font-size: 22px;">{{ $pageLabel ?? 'No content to display' }}</h2><br>
    
    <!-- dito ka mag start -->
    {{$slot}}

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

    //SideNav
    const toggleButton = document.getElementById('toggleButton');
    const sidenav = document.getElementById('sidenav');
    const mainContent = document.getElementById('mainContent');

    toggleButton.addEventListener('click', () => {
        sidenav.classList.toggle('hidden');
        mainContent.classList.toggle('shift');
    });

    // Dropdown
    function toggleDropdown(button){
    button.classList.toggle("active");
    var dropdownContent = button.nextElementSibling;
    dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
}

    window.onclick = function(event){
        if (!event.target.matches('.dropdown-btn')) {
            var dropdowns = document.getElementsByClassName("dropdown-container");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.style.display === "block"){
                    openDropdown.style.display = "none";
                }
            }
        }
    };


</script>
</body>
</html>
