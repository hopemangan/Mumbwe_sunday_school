<?php include_once("../layout/basic-layout.php") ?>
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
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
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .form-group {
            display: flex; 
            align-items: center; 
            margin-bottom: 15px; 
        }

        .form-group label {
            margin-right: 10px; 
            width: 100px;
        }

        .form-group input, .form-group select {
            flex: 1; 
            padding: 5px; 
        }
    </style>
</head>
<body>



<section class="here">
    <br><br>
  <div class="wabwera">
      <h2>Sign Up Here</h2>
    <form action="conn.php" method="POST" id="registrationForm" onsubmit="return validateForm()">
        <label for="name">Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter full name" >
        <span class="error" id="nameerror"></span>
        <br>

        <label for="sex">Sex</label>
        <select id="sex" name="sex" >
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <span class="error" id="sexerror"></span>
        <br>

        <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" pattern="\d{10}" title="Please enter a valid 10-digit phone number (without any spaces or dashes)">
            <span class="error" id="phoneerror"></span>
            <br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" >
            <span class="error" id="emailerror"></span>
            <br>
        </div>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" >
        <span class="error" id="usernameerror"></span>
        <br>

        <div class="form-group">
            <label for="password">Enter Password</label>
            <input type="password" id="password" name="password" >
            <span class="error" id="passworderror"></span>
            <br>

            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" >
            <span class="error" id="confirmPassworderror"></span>
            <br>
        </div>

        <label>
            <input type="checkbox" name="terms" required>
            I agree to the Terms and Conditions
        </label>
        <br>
        <label>
            <input type="checkbox" name="privacy" required>
            I agree to the Privacy Policy
        </label>
        <br>
        
        <input type="submit" value="Register">
    </form>
  </div>
  <br><br><br>
</section>

  
<script>
  

  function validateForm() {
    var isvalid = true;

    // Clear previous error messages
    document.getElementById("nameerror").innerText = "";
    document.getElementById("phoneerror").innerText = "";
    document.getElementById("emailerror").innerText = "";
    document.getElementById("passworderror").innerText = "";
    document.getElementById("confirmPassworderror").innerText = "";
    document.getElementById("usernameerror").innerText = "";

    const name = document.getElementById("fullname").value.trim();
    const username = document.getElementById("username").value.trim();
    const phoneNumber = document.getElementById("phoneNumber").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    // Validate full name (should contain at least two words)
    if (name.split(' ').length < 2) {
        document.getElementById("nameerror").innerText = "Full name should contain at least first and last name";
        isvalid = false;
    }

    // Validate email format
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        document.getElementById("emailerror").innerText = "Please enter a valid email address";
        isvalid = false;
    }

    // Validate phone number (10 digits)
    const phonePattern = /^\d{10}$/;
    if (!phonePattern.test(phoneNumber)) {
        document.getElementById("phoneerror").innerText = "Please enter a valid 10-digit phone number (without spaces or dashes)";
        isvalid = false;
    }

    // Validate password presence and length
    if (password === "") {
        document.getElementById("passworderror").innerText = "Password is required.";
        isvalid = false;
    } else if (password.length < 4) {
        document.getElementById("passworderror").innerText = "Password must contain at least 4 characters.";
        isvalid = false;
    }

    // Confirm password presence
    if (confirmPassword === "") {
        document.getElementById("confirmPassworderror").innerText = "Please confirm your password";
        isvalid = false;
    }

    // Check if passwords match
    if (password !== confirmPassword) {
        document.getElementById("confirmPassworderror").innerText = "Passwords do not match.";
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
