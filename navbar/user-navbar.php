<script src="../layout/index.js"></script>
<link rel="stylesheet" href="../layout/reports-user.css">

<div class="navigation">
       <!-- Navbar -->
    <nav class="navbar">
        <img src="images/logo.jpeg" alt="Mumbwe Sunday School Logo" class="logo">
      <span class="brand-name">Mumbwe Sunday School</span>
      <a href="login.html">
        <img src="images/log in.jpg" alt="Login Icon" class="login-icon">
      </a>
        <button class="menu-btn" onclick="openMenu()">☰ Menu</button>
    </nav>

    <!-- Hidden menu window -->
    <div id="menu-window" class="menu-window">
        <div class="menu-content">
            
            <button class="close-btn" onclick="closeMenu()">X</button>
            <ul>
                <li><a href="index.html"><i class="fa-solid fa-house"></i> &nbsp;Home</a></li>
               <li> <a href="registration.html"><i class="fa-solid fa-address-card"></i>&nbsp; Registration</a></li>
               <li> <a href="#attendance"><i class="fa-solid fa-clipboard-user"></i> &nbsp;Attendance</a>
               <li><a href="#curriculum"><i class="fas fa-book"></i> &nbsp;Curriculum</a></li>
                <li><a href="communication.php"><i class="fas fa-envelope"></i> &nbsp;Communication</a></li>
                <li><a href="reports-user.php"><i class="fas fa-chart-line"></i> &nbsp;Reports</a></li>
                <li><a href="admin_dashboard.php"><i class="fas fa-tachometer-alt"></i> &nbsp;Admin Dashboard</a></li>
                
            </ul>
            
            <!-- nav Social Media -->
             
  <div class="nav_footer-column">
    <h3>Follow Us</h3>
    <div class="nav_social-media">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>
</div>

<!--nav  Newsletter Subscription -->
<div class="nav_newsletter">
    <h3>Subscribe to Our Newsletter</h3>
    <form action="subscribe.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
    </form>
</div>
        </div>

    </div>
<div class="change-class">
  <div class="box">
  <button class="close-btn" onclick="closeMenu()">X</button>
    <h1>change class.</h1> 
 
    <select name="level" id="">
      <option value="Beginners">Beginners</option>
      <option value="Bible class 1"> Bibles class 1</option>
      <option value="Bible class 2">Bible class 2 </option>
      <option value="Bible class 3">Bible class 3 </option>
      <option value="Hearers">Hearers</option>
      <option value="Catechumen">Catechumen</option>
    </select>
  </div>
 




</div>

<h2 style="color: blue;font-size: 20px; text-align:center;">Current Class: Beginners</h2>
   
   <div class="body-content">

   <!--quick access quick bar for displaying quick links -->
   <section class="quick-access">
    <h2 style="color: blue;font-size: 20px; text-align:center;">Quick Access</h2>
    <ul>
        <li>
            <a href="reports-user.php">View Reports</a>
        </li>

        <li>
            <a href="curriculum-progress.php" >View Curriculum Progress</a>
        </li>
        <li>
            <a href="student-attendance.php">Student Attendance</a>
        </li>
        <li>
            <a href="student-perfomance.php">Student Perfomance</a>
        </li>
        <li  id="class-modal">
            <a href="#">Change Class</a>
        </li>

        
    </ul>
</section>

