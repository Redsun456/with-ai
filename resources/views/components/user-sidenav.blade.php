<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset ('assets/css/user-sidenav.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <td><span class="user-name"><b>STUDENT</b></span></td>
              </tr>
              <tr>
                  <td> <span class="user-mail">Student@bcp.edu.ph</span></td>    
              </tr>
            </table>        
        </ul><br>

        <table class="dashboard">
          <tr>
            <td>
              <ul class="nav-links">
              <li>
                <a href="/dashboard">
                  <i class='bx bx-grid-alt' ></i>
                  <span class="links_name">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="/profile">
                  <i class='bx bx-user' ></i>
                  <span class="links_name">Profile</span>
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
                <a href="/application-tracker">
                  <i class='bx bx-list-check' ></i>
                  <span class="links_name">Application Tracker</span>
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
            <a class="dropdown-a" href="attendance.html"> <i class='bx bx-pen' ></i> <span class="droplinks_name">Attendance</span></a>
            <a class="dropdown-a" href="assigneddept.html"> <i class='bx bx-briefcase' ></i> <span class="droplinks_name">Asigned Department</span></a>
            <a class="dropdown-a" href="schedule.html"> <i class='bx bx-calendar-check' ></i> <span class="droplinks_name">Schedule</span></a>
          </div>
        </div>


        <table class="concerns"><br><br>
          <span class="main"><b>CONCERNS</b></span><br>
          <tr>
            <td>
              <ul class="nav-links">
              <li>
                <a href="/concerns">
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
       
        
    </div>
<!--#################################################################################-->
<div class="page-label-container">
  <h2>
    {{ $pageLabel ?? 'No content to display' }}
</h2>
</div>
    <div class="container">

  {{$slot}}
      
      
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