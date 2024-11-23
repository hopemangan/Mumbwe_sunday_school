<?php include_once("../layout/basic-layout.php") ?>
<title>Mumbwe Management System</title>
<style>
    body{
        overflow-y: hidden;
        background-image: url('../images/background1.jpg') ;
        background-size: cover;
        background-repeat: no-repeat;
    }
        .error{
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
      
/* Login Form Styles */
.login-container {
    background-color: hsl(0, 0%, 83%);
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 550px;
    margin: 60px auto;
    text-align: center;
    height: 100%;
}

.login-container h2 {
    margin-bottom: 20px;
}

.login-container input[type="text"],
.login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 4px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


.form-divider {
    border: none;
    border-top: 2px solid #ccc;
    width: 100%;
    margin: 20px 0; 
}
.here{
    height: 100%;
    background-image: url(images/background2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 0%;
    margin-top: 80px;
}
/* Forgot password link styling */
 .hope a {
    color: white;
    background-color: blue;
    text-decoration: none;
    border-radius: none;
    padding: 5px;
 
}

 a:hover {
   
    color: blue;
    text-decoration: none;
  
    
}

.horizontal-align {
    display: flex;
    align-items: center;
  }
  
  .separator {
    margin: 0 10px; 
    border-left: 1px solid #000; 
    height: 20px; 
  }
  #menu-window{
        display: none;
    }
    #logo-show{
        border-radius: 3em;
        width: 90px;
        height: 90px;
    }
    .brand-name{
        left: 10%;
    }
    .logo{
        left: 5%;
    }
   .login-icon{
        display: none
    }
    input[type="submit"] {
    width: 20%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: hsl(231, 88%, 39%);
    color: whitesmoke;
    cursor: pointer;
    transition: background-color 0.3s;
    align-items: center;
    margin: auto;
}
input[type="submit"]:hover {
    background-color:white;
    color: blue;
}
    </style>
</head>
<body>
<div class="main-contents">
    <!-- Login Container -->
    <section class="here">
        <br><br>
    <div class="login-container">
        <div class="heder">
            <img src="../images/logo.jpeg" id="logo-show" alt="logo">
        <h2>MUMBWE SUNDAY SCHOOL MANAGEMENT SYSTEM</h2>
        </div>
   
        <form id="loginForm" action="login.php" method="POST" onsubmit="return validateForm()">
            <input type="text" name="username" id="username" placeholder="Username" ><div class="error" id="usernameerror"></div>
            <input type="password" name="password" id="password" placeholder="Password"><div class="error" id="passworderror"></div>
            <input type="submit" value="SIGN IN">
        </form>
    
        <hr class="form-divider">
    
        <div class="horizontal-align">
            <div class="forgotten">
                <p>Don't have an account? <a href="Signup.html">Sign up</a></p>
            </div>
            <div class="separator"></div>
            <div class="forgottten">
                <a href="forgot password.html">Forgot password?</a>
            </div> 
        </div>
    <br><br>
      
    </div><br><br><br>
    </section>
</div>


    
    <script>
         document.getElementsByClassName("profile").innerHTML="Gallery"
        function validateForm() {
            isvalid=true;

            document.getElementById("usernameerror").innerText=("");
            document.getElementById("passworderror").innerText=("");

            const username = document.getElementById("username").value;
           const password = document.getElementById("password").value;

            if (username ==="") {
             document.getElementById("usernameerror").innerText=("usernsme is required");
               isvalid=false;
            }

            if (password === "") {
        document.getElementById("passworderror").innerText = "Password is required.";
        isvalid = false;
    } else if (password.length < 4) {
        document.getElementById("passworderror").innerText = "Password must contain at least 4 characters.";
        isvalid = false;
    }

            return isvalid;
        }

        function openMenu() {
            document.getElementById("menu-window").style.display = "flex";
        }

        function closeMenu() {
            document.getElementById("menu-window").style.display = "none";
        }
   
    </script>
</body>
</html>
