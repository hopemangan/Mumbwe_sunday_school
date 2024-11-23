<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Mumbwe Sunday School Management System</title>
    
          <style>
            body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
}
.container{
    width: 80%;
    margin-top: 100px;
    margin-left: 300px;
    box-shadow: 5px 3px 9px rgba(0,0,0,0.8);
    z-index: 300;
}


        /* Curriculum Grid Styling */
        .grid-container { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 20px; }
        .curriculum { background-color: rgb(71, 114, 255); color: rgba(255, 255, 255, 0.912); border: 2px solid black; padding: 15px; display: flex; justify-content: center; align-items: center; height: 200px; text-align: center; }

        /* Footer Styling */
  .footer {
    background-color: #333;
    color: white;
    padding: 40px 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    text-align: left;
}

.footer .footer-column {
    flex: 1;
    min-width: 200px;
    margin: 10px;
}

.footer .footer-column h3 {
    font-size: 20px;
    color: #f1c40f;
    margin-bottom: 15px;
}

.footer .footer-column ul {
    list-style-type: none;
    padding: 0;
}

.footer .footer-column ul li {
    margin-bottom: 10px;
}

.footer .footer-column ul li a {
    color: #ddd;
    text-decoration: none;
    font-size: 16px;
}

.footer .footer-column ul li a:hover {
    color: #f1c40f;
}

/* Social Media Links */
.footer .social-media {
    display: flex;
    gap: 15px;
    font-size: 24px;
}

.footer .social-media a {
    color: #ddd;
    text-decoration: none;
}

.footer .social-media a:hover {
    color: #f1c40f;
}

/* Newsletter Form */
.footer .newsletter input[type="email"] {
    padding: 10px;
    border: none;
    border-radius: 5px;
    width: 100%;
    max-width: 250px;
    margin-bottom: 10px;
}

.footer .newsletter button {
    padding: 10px 20px;
    border: none;
    background-color: #f1c40f;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.footer .newsletter button:hover {
    background-color: #d4a50d;
}

        /* Responsive Curriculum */
        @media (max-width: 768px) { .grid-container { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
<?php include_once("navbar-users.php"); ?>

<div class="container">
   
<h1 style="text-align:center;">Mumbwe Sunday School Curriculum</h1>

<div class="grid-container">
    <a href="lessons.html" class="curriculum"><h2>Lessons</h2></a>
    <a href="activities.html" class="curriculum"><h2>Activities</h2></a>
    <a href="biblestories.html" class="curriculum"><h2>Bible Stories</h2></a>
    <a href="games.html" class="curriculum"><h2>Games</h2></a>
</div>
</div>


    <script>
        function openMenu() {
            document.getElementById("menu-window").style.display = "block";
        }

        function closeMenu() {
            document.getElementById("menu-window").style.display = "none";
        }
    </script>


</body>
</html>
