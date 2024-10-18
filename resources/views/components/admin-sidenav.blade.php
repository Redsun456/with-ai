<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset ('assets/css/admin-sidenav.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <div id="sidenav" class="sidenav">
        <img src={{asset('assets/images/bcplogo-mini.png')}} alt="img" class="bcplogo">
        <ul class="nav-link">
            <li class="bellNotiff">
            <a href="#" class="active">
                <i class='bx bx-bell'></i>
            </a>
            </li>
            <li class="userProfile">
    <a href="javascript:void(0);" class="dropdown-toggle">
        <i class='bx bx-cog'></i>
    </a>
    <div class="dropdown-content">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-button">
                <i class='bx bx-log-out'></i> Logout
            </button>
        </form>
    </div>
</li>

            <img src={{asset('assets/images/avatar.webp')}} alt="avatar" class="avatar"><br><br>
            <table class="user-profile">
              <tr>
                <td><span class="user-name"><b>ADMIN</b></span></td>
              </tr>
              <tr>
                  <td> <span class="user-mail">admin@bcp.edu.ph</span></td>    
              </tr>
            </table>        
        </ul><br>

        <table class="dashboard">
          <tr>
            <td>
              <ul class="nav-links">
              <li>
                <a href="/admin/dashboard">
                  <i class='bx bx-grid-alt' ></i>
                  <span class="links_name">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="/admin/admin-profile">
                  <i class='bx bx-user' ></i>
                  <span class="links_name">Profile</span>
                </a>
              </li>
              <li>
                <a href="/admin/announcement">
                  <i class='bx bxs-megaphone' ></i>
                  <span class="links_name">Announcement</span>
                </a>
              </li>
            </ul>   
            </td>
          </tr>  
                    
        </table>

        <table class="application-management"><br><br>
          <span class="main"><b>APPLICATION</b></span><br>
          <span class="sub"><b>Application Management</b></span>
          <tr>
            <td>
              <ul class="nav-links">
              <li>
                <a href="/admin/application-review">
                  <i class='bx bx-list-check' ></i>
                  <span class="links_name">Application Review</span>
                </a>
              </li>
            </ul>   
            </td>
          </tr>            
        </table>
      
        <table class="account-management"><br><br>
          <span class="main"><b>ACCOUNT</b></span><br>
          <span class="sub"><b>Account Management</b></span>
          <tr>
            <td>
              <ul class="nav-links">
              <li>
                <a href="/admin/user-account-management">
                  <i class='bx bx-user' ></i>
                  <span class="links_name">User</span>
                </a>
              </li>
             
            </ul>   
            </td>
          </tr>            
        </table>

        <br>
        <div class="dropdownStudent-Ass">
          <span class="main"><b>STUDENT ASSISTANT</b></span><br>
          <span class="sub"><b>Student Assistant Management</b></span><br><br>
          <button class="dropdown-btn"> <i class='bx bx-user' ></i>
            <span class="droplinks_name">Student Assistant</span>
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a class="dropdown-a" href="/admin/sa-list"> <i class='bx bx-user' ></i> <span class="droplinks_name">Student Assistant List</span></a>
            <a class="dropdown-a" href="/admin/sa-attendance"> <i class='bx bx-pen' ></i> <span class="droplinks_name">Attendance</span></a>
            <a class="dropdown-a" href="/admin/department-assignment"> <i class='bx bx-briefcase' ></i> <span class="droplinks_name">Department Designation</span></a>
            <a class="dropdown-a" href="/admin/sa-scheduling"> <i class='bx bx-calendar-check' ></i> <span class="droplinks_name">Scheduling</span></a>
          </div>
        </div>


        <table class="disbursement"><br><br>
          <span class="main"><b>DISBURSEMENT</b></span><br>
          <span class="sub"><b>Disbursement Management</b></span>
          <tr>
            <td>
              <ul class="nav-links">
              <li>
                <a href="/admin/disbursement">
                  <i class='bx bx-money' ></i>
                  <span class="links_name">Disbursement</span>
                </a>
              </li>
            </ul>   
            </td>
          </tr>            
      </table>  

        <table class="concerns"><br><br>
          <span class="main"><b>CONCERNS</b></span><br>
          <tr>
            <td>
              <ul class="nav-links">
              <li>
                <a href="/admin/concerns">
                  <i class='bx bx-file' ></i>
                  <span class="links_name">Concerns</span>
                </a>
              </li>
            </ul>   
            </td>
          </tr>            
        </table><br><br>
    </div>
    <div id="uppernav">
        <div class="upnav">
        <button class="openbtn" onclick="toggleNav()">☰</button>
        <div class="search-container-admin">
        <input type="text" id="searchInput" placeholder="Search..." aria-label="Search" />
        <button id="searchButton"><i class='bx bx-search' ></i></button>
      </div>
        
    </div>
<!--#################################################################################-->
<div class="page-label-container">
  <h2>
    {{ $pageLabel ?? 'No content to display' }}
</h2>
</div>
<div class="container">
{{ $slot }}
</div>
    </div>


    <script type="text/javascript">
    function toggleNav() {
    const sidenav = document.getElementById("sidenav");
    const uppernav = document.getElementById("uppernav");

    if (sidenav.style.left === "0px") {
        sidenav.style.left = "-280px";
        uppernav.style.marginLeft = "0";
    } else {
        sidenav.style.left = "0";
        uppernav.style.marginLeft = "280px";
    }
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {  
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}


    </script>

    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdownContent = document.querySelector('.dropdown-content');

        dropdownToggle.addEventListener('click', function () {
            dropdownContent.style.display = 
                dropdownContent.style.display === 'block' ? 'none' : 'block';
        });

        // Hide dropdown if clicking outside
        document.addEventListener('click', function (event) {
            if (!dropdownToggle.contains(event.target) && !dropdownContent.contains(event.target)) {
                dropdownContent.style.display = 'none';
            }
        });
    });
</script>

</body>
</html>
