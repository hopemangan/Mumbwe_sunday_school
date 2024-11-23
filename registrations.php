
 <title>Registration</title>
  <style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

        .registration-container {
            background-color: rgba(255, 255, 255, 0.9);
            width: 90%;
            max-width: 700px;
            margin-left: 300px;
            margin: auto auto auto 33%;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
        }

        .registration-container h2 {
            text-align: center;
            color: #4a90e2;
            font-size: 30px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .registration-container p {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }

        /* Section Titles */
        .section-title {
            font-size: 20px;
            color: #4a90e2;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
            border-bottom: 2px solid #4a90e2;
            padding-bottom: 5px;
        }
        /* Form Fields */
        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: row;
            justify-content:space-between;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
            font-size: 20px;
        }

        .form-group input,
        .form-group select {
            width: 60%;
            padding: 12px 15px;
            font-size: 18px;
            border: 1px solid #000;
            border-radius: 5px;
            outline: none;
            transition: border 0.3s ease;
        }
        .form-group input{
            width:;
        }
        .form-group input:focus,
        .form-group select:focus {
            border-color: #4a90e2;
        }

        /* Validation Error */
        .error {
            color:red;
            font-size: 18px;
            margin-top: 5px;
            display: none;
     
        }


        /* Navigation Button */
        .nav-btn {
            background-color: #4a90e2;
            color: #fff;
            width: 100%;
            padding: 14px 0;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 20px;
        }

        .nav-btn:hover {
            background-color: #3a7cc2;
        }
  </style>
</head>
<body>  
<?php include_once("navbar-users.php"); ?>
<br><br>
<br>

<br><br>
<div class="registration-container">
    <h2>Sunday School Registration</h2>
    <p>Enroll your child in our Sunday School program!</p>

      <!-- Step 1: Student Information -->
      <form id="studentForm" action="guardian_form.php" method="post">

        <div id="studentInfo">
            <div class="section-title">Student Information</div>
            <div class="form-group">
                <label for="studentName">Student's Full Name</label>
                <input type="text" id="studentName" name="student_name" placeholder="Enter student's full name">
                <p class="error" id="studentNameError">Please enter the student's full name.</p>
            </div>
            <div class="form-group">
                <label for="sex">Sex</label>
                <select id="sex" name="sex">
                    <option value="" disabled selected>Select sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <p class="error" id="sexError">Please select the student's sex.</p>
            </div>
            <div class="form-group">
                <label for="ageGroup">Age Group</label>
                <select id="ageGroup" name="age_group">
                    <option value="" disabled selected>Select age group</option>
                    <option value="3-5">3-5 years</option>
                    <option value="6-8">6-8 years</option>
                    <option value="9-11">9-11 years</option>
                    <option value="12-15">12-15 years</option>
                </select>
                <p class="error" id="ageGroupError">Please select the age group.</p>
            </div>
            <div class="form-group">
                <label for="levelOfStudy">Level of Study</label>
                <select id="levelOfStudy" name="level_of_study">
                    <option value="" disabled selected>Select level of study</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">bible class 1</option>
                    <option value="Advanced">bible class 2</option>
                    <option value="Intermediate">Hearers</option>
                    <option value="Advanced">Catechumen</option>
                </select>
                <p class="error" id="levelOfStudyError">Please select the level of study.</p>
            </div>
            <button type="button" class="nav-btn" onclick="validateStudentForm()">Next</button>
        </div>

        <div id="guardianInfo">
            <div class="section-title">Guardian Information</div>
            <div class="form-group">
                <label for="guardianName">Guardian's Full Name</label>
                <input type="text" id="guardianName" name="guardian_name" placeholder="Enter guardian's full name">
                <p class="error" id="guardianNameError">Please enter the guardian's full name.</p>
            </div>
            <div class="form-group">
                <label for="contactNumber">Contact Number</label>
                <input type="tel" id="contactNumber" name="contact_number" placeholder="Enter contact number">
                <p class="error" id="contactNumberError">Please enter the contact number.</p>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter email address">
                <p class="error" id="emailError">Please enter a valid email address.</p>
            </div>
            <input type="submit" name="send" class="nav-btn" onclick="validateGuardianForm()" value="Submit Registration">
        </div>
    </form>
</div>


    
<script>
          document.getElementById('guardianInfo').style.display = 'none';
       function openMenu() {
            document.getElementById("menu-window").style.display = "flex";
        }

        function closeMenu() {
            document.getElementById("menu-window").style.display = "none";
        }    

        function goToGuardianInfo() {
            document.getElementById('studentInfo').style.display = 'none';
            document.getElementById('guardianInfo').style.display = 'block';
        }
          // Validate student information form
          function validateStudentForm() {
            let valid = true;

            const studentName = document.getElementById('studentName');
            const studentNameError = document.getElementById('studentNameError');
            if (studentName.value.trim() === '') {
                studentNameError.style.display = 'block';
                valid = false;
            } else {
                studentNameError.style.display = 'none';
            }

            const sex = document.getElementById('sex');
            const sexError = document.getElementById('sexError');
            if (sex.value === '') {
                sexError.style.display = 'block';
                valid = false;
            } else {
                sexError.style.display = 'none';
            }

            const ageGroup = document.getElementById('ageGroup');
            const ageGroupError = document.getElementById('ageGroupError');
            if (ageGroup.value === '') {
                ageGroupError.style.display = 'block';
                valid = false;
            } else {
                ageGroupError.style.display = 'none';
            }

            const levelOfStudy = document.getElementById('levelOfStudy');
            const levelOfStudyError = document.getElementById('levelOfStudyError');
            if (levelOfStudy.value === '') {
                levelOfStudyError.style.display = 'block';
                valid = false;
            } else {
                levelOfStudyError.style.display = 'none';
            }

            if (valid) {
                document.getElementById('studentInfo').style.display = 'none';
                document.getElementById('guardianInfo').style.display = 'block';
            }

         
        }

        // Validate guardian information form
        function validateGuardianForm() {
            let valid = true;

            const guardianName = document.getElementById('guardianName');
            const guardianNameError = document.getElementById('guardianNameError');
            if (guardianName.value.trim() === '') {
                guardianNameError.style.display = 'block';
                valid = false;
            } else {
                guardianNameError.style.display = 'none';
            }

            const contactNumber = document.getElementById('contactNumber');
            const contactNumberError = document.getElementById('contactNumberError');
            if (contactNumber.value.trim() === '') {
                contactNumberError.style.display = 'block';
                valid = false;
            } else {
                contactNumberError.style.display = 'none';
            }

            const email = document.getElementById('email');
            const emailError = document.getElementById('emailError');
            if (email.value.trim() === '' || !email.checkValidity()) {
                emailError.style.display = 'block';
                valid = false;
            } else {  emailError.style.display = 'none';
            }

            if (valid) {
                document.getElementById('guardianForm').submit();
            }
        }
</script>
</body>
</html>
