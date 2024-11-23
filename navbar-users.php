<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
    <style>
:root{
    --primary-color: rgb(71, 114, 255);
    --navbar-primary-color: rgb(71, 114, 255);
    --secondary-color: rgba(244, 236, 236, 0.953);
    --navbar-color: rgba(74, 74, 210, 0.931);
    --navbar-secondary: wheat;
    --box-shadow: rgba(0, 0, 0, 0.3);
    --primary-font-familty: sans-serif;
}

*{
    font-family: var(--primary-font-familty);
}
body {
    margin: 0;
    margin-bottom: 4%;
    padding: 0;
    overflow-x: hidden;
    display: flex;
    flex-direction: column;
    background-color: var(--secondary-color);
}
.cards-curri{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
.course-data{
    padding: 10px;
    width: 26%;
    margin: 10px 0px 10px 20px;
    box-shadow: 3px 3px 2px rgba(0,0,0,0.1);
    padding: 15px;
    position: relative;
    border-radius: 0.2em;
    transition: 0.4s ease-in-out ;
}
.navigation{
    position: sticky;
    top: 0;
    
}
/*navbar style */
.navbar {
    background-color: var(--primary-color);
    color: white;
    padding: 15px;
    display: flex;
    position: fixed;
    top: 0px;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    color: white;
    padding: 15px 20px;
    z-index: 400;
}

.brand-name {
    font-size: 24px;
    font-weight: bold;
    position: absolute;
    left: 23%;
}

.menu-btn {
    background-color: #333;
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px 20px;

}

.menu-window {
    position: fixed;
    top: 0;
    left: 0;
    width: 15%;
    height: 100%;
    display: block;
    z-index: 300;
}

.menu-content {
    transition: 0.3s ease-in-out;
    background-color: var(--navbar-primary-color);
    height: 100%;
    padding: 20px 10px;
    font-size: large;
}

.menu-content ul {
    list-style-type: none;
    padding: 10px;
}
.menu-content a{
    transition: 0.4s ease-in-out;
}
.menu-content li {
    margin: 0px 0;
    margin-top: 60px;
    width: 100%;
    font-size: 20px;
    transition: 0.4s ease-in-out;
}
.menu-content a:hover {
    background-color: rgba(102, 102, 233, 0.929); 
    width: 90%;
    padding: 15px;
    border-radius: 0.3em;
}

.menu-content a {
    text-decoration: none;
    color: white;
    gap: 10px;
}

.menu-content .close-btn {
    background: none;
    border: none;
    text-align: right;
    font-size: 20px;
    cursor: pointer;
}
.logo {
    height: 50px;
    width: 50px;
    position: absolute;
    left: 18%;
  }
  .icon{
     border-radius: 4em;
     width: 120px;
     height:120px;
     margin-left: 50px;
  }

  .login-icon {
    width: 3em;
    position: absolute;
    right: 20vh;
    height: 50px;
    cursor: pointer;
    top: 10%;
    border-radius: 2em;
  }
 
.navigation-button{
    margin: auto;
    width: 50%;
    margin-top: 20px;
}
.navigation-button button{
    border: none;
    border-radius: 0.2em;
    padding: 8px;
    width: 30%;
    cursor: pointer;
    font-size: 20px;
}
.navigation-button button:hover{
    opacity: 0.9;
}
.navigation-button button:nth-child(1){
    background-color: green;
    margin-right: 20px;
    text-align: center;
}
.navigation-button button:nth-child(2){
    background-color: red;
}
.main-content{
    width: 70%;
    margin: auto;
    padding-bottom: 5%;
    border-radius: 0.3em;
}


.profile {
    padding: 10px 20px;
    background-color: #e74c3c;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    margin-right: 5vh;
    cursor: pointer;
    transition: background-color 0.3s;
    text-decoration: none;
        }

        .profile:hover {
            background-color: #c0392b;
        }
   i{
    margin-right: 10px;
   }
@media (max-width: 700px) {
    .quick-access{
        display: none;
    }
    .numbers{
        width: 100%;
    }
    .numbers .stats{
        flex-direction: column;
    }
    .stats div{
        width: 100%;
        margin-top: 10px;
    }

    .navbar .menu-btn{
        margin: 0;
        width: 10%;
        padding: 2px;
        font-size: 25px;
    }
    .navbar a{
        display: none;
    }
    .navigation-button{
        width: 90%;
    }
    .container-stats{
        width: 100%;
    }
    .menu-window{
        display: none;
    }
}

    </style>
</head>
<body>
    <div class="navigation">
        <!-- Navbar -->
   <nav class="navbar">
   <h3></h3>
       <span class="brand-name">Mumbwe Sunday School</span>
       <img src="../images/logo.jpeg" alt="Mumbwe Sunday School Logo" class="logo">
   
     <a href="login.html" id="login">
       <img src="../images/hope.jpeg" alt="Login Icon" class="login-icon">
   </a>
     
     <button class="profile">
        Profile
     </button>
   </nav>

   <!-- Hidden menu window -->
   <div id="menu-window" class="menu-window">

       <div class="menu-content">
           <ul>
               <li><a href="index.php"><i class="fa-solid fa-house"></i> Dashboard</a></li>
              <li> <a href="registrations.php"><i class="fa-solid fa-address-card"></i>Student Registration</a></li>
              <li> <a href="attendance/admin_dashboard.php"><i class="fa-solid fa-clipboard-user"></i>Student Attendance</a>
              <li><a href="../curriculumm.php"><i class="fas fa-book"></i>School Curriculum</a></li>
              <li><a href="teacher/reports-user.php"><i class="fas fa-chart-line"></i>Reports Generation</a></li>
              <li id="logout"><a href="#"><i class="fas fa-tachometer-alt"></i>Log Out</a></li>
           </ul>

       </div>

   </div>

</div>



<script>
    // Open menu
function openMenu() {
    document.getElementById('menu-window').style.display = 'block';
}

document.addEventListener("DOMContentLoaded", () => {
  document.querySelector("#class-modal").addEventListener('click', () =>{
    document.querySelector(".change-class").style.display = "unset"
  })

})


// Close menu
function closeMenu() {
    document.getElementById('menu-window').style.display = 'none';
    document.querySelector(".change-class").style.display = "none"
 
}

</script>
</body>
</html>