<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Mumbwe Sunday School</title>
    <script src="index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            height: 100%;
        }

        .sidebar h2 {
            font-size: 1.8em;
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
            width: 100%;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #f4f4f9;
            text-decoration: none;
            font-size: 1.1em;
            display: flex;
            align-items: center;
            padding: 10px 20px;
            transition: background 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #4CAF50;
            border-radius: 8px;
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        /* Main Content Area */
        .main-content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2em;
            color: #333;
        }

        .header .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header .user-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .header .user-info p {
            font-size: 1.1em;
            margin-right: 20px;
        }

        .logout-button {
            padding: 10px 20px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background-color: #c0392b;
        }

        /* Dashboard Sections */
        .dashboard-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard-section h2 {
            font-size: 1.5em;
            margin-bottom: 15px;
            color: #4CAF50;
        }

        .dashboard-section table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .dashboard-section table th,
        .dashboard-section table td {
            padding: 12px;
            border-bottom: 1px solid #ccc;
            text-align: left;
        }

        .dashboard-section table th {
            background-color: #f4f4f9;
        }

        .dashboard-section .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons button {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .action-buttons button:hover {
            background-color: #388E3C;
        }

        .action-buttons .danger {
            background-color: #e74c3c;
        }

        .action-buttons .danger:hover {
            background-color: #c0392b;
        }

        .footer {
            text-align: center;
            padding: 10px;
            color: #888;
            font-size: 0.9em;
            margin-top: 20px;
        }
        .menu-btn{
            display: none;
        }
        .close-btn{
            display: none;
        }
        @media (max-width: 600px){
            .sidebar{
                display: none;
                position: absolute;
                z-index: 2;
            }
            .menu-btn{
                display: block;
            }
            .close-btn{
                display: block;
            }
            .logout-button{
                display: none;
            }
            .curr-overview{
                width: 100%;
            }
            .course-data{
                width: 40%;
                flex-direction: row;
            }
            .heading{
                width: 100%;
            }
            .breakdown-stats{
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar Navigation -->
    <div class="sidebar" id="menu-window">
    <button class="close-btn" onclick="closeMenu()">X</button>
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="#registrations"><i class="fas fa-user-plus"></i> Manage Students</a></li>
            <li><a href="#attendance"><i class="fas fa-calendar-check"></i> Track Attendance</a></li>
            <li><a href="#curriculum"><i class="fas fa-book"></i> Update Curriculum</a></li>
            <li><a href="#reports"><i class="fas fa-chart-line"></i> View Reports</a></li>
            <li><a href="#communication"><i class="fas fa-envelope"></i> Communication</a></li>
            <li><a href="#settings"><i class="fas fa-cog"></i> Settings</a></li>
        </ul>
    </div>
    </div>

    
        <!-- Main Content Area -->
        <div class="main-content">
        <!-- Header -->
        <div class="header">
        <button class="menu-btn"  onclick="openMenu()">☰</button>
     
                 <h1 id="title">Students Reports</h1>
           
            <div class="user-info">
                <img src="../images/hope.jpeg" alt="Admin Avatar">
                <p>Mangan</p>
                <button class="logout-button">Log Out</button>
            </div>
        </div>
</body>
</html>
