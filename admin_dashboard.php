<?php
// Database connection
$host = 'localhost';
$dbname = 'group4';
$username = 'root'; 
$password = '';     

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Handle delete action for students and teachers
if (isset($_POST['delete_student'])) {
    $stmt = $pdo->prepare("DELETE FROM students WHERE id = :id");
    $stmt->execute(['id' => $_POST['student_id']]);
}

if (isset($_POST['delete_teacher'])) {
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
    $stmt->execute(['id' => $_POST['teacher_id']]);
}

// Fetch data for different sections
$students = $pdo->query("SELECT * FROM students")->fetchAll(PDO::FETCH_ASSOC);
$teachers = $pdo->query("SELECT * FROM users WHERE role = 'teacher'")->fetchAll(PDO::FETCH_ASSOC);
$attendance = $pdo->query("SELECT COUNT(*) AS present, (SELECT COUNT(*) FROM students) - COUNT(*) AS absent FROM attendance WHERE status = 'Present'")->fetch(PDO::FETCH_ASSOC);
$communications = $pdo->query("SELECT * FROM communications")->fetchAll(PDO::FETCH_ASSOC);
$reports = [
    'students_count' => $pdo->query("SELECT COUNT(*) FROM students")->fetchColumn(),
    'teachers_count' => $pdo->query("SELECT COUNT(*) FROM users WHERE role = 'teacher'")->fetchColumn(),
    // Add more report data as needed
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            text-decoration: none;
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
        /* Responsive Design */

/* Adjust layout for tablets and smaller screens */
@media (max-width: 1024px) {
    .sidebar {
        width: 200px;
        padding: 15px;
    }

    .sidebar h2 {
        font-size: 1.5em;
    }

    .sidebar ul li a {
        font-size: 1em;
        padding: 8px 15px;
    }

    .main-content {
        padding: 15px;
    }

    .header h1 {
        font-size: 1.8em;
    }

    .header .user-info p {
        font-size: 1em;
    }

    .logout-button {
        padding: 8px 16px;
        font-size: 0.9em;
    }

    .dashboard-section h2 {
        font-size: 1.3em;
    }
}

/* Adjust layout for mobile screens */
@media (max-width: 768px) {
    body {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        height: auto;
        flex-direction: row;
        justify-content: space-around;
    }

    .main-content {
        padding: 10px;
    }

    .header {
        flex-direction: column;
        align-items: flex-start;
    }

    .header h1 {
        font-size: 1.5em;
    }

    .header .user-info img {
        width: 40px;
        height: 40px;
    }

    .dashboard-section {
        padding: 15px;
    }

    .dashboard-section table {
        font-size: 0.9em;
    }
}

/* For very small screens */
@media (max-width: 480px) {
    .sidebar ul li {
        margin: 10px 0;
    }

    .sidebar ul li a {
        font-size: 0.9em;
    }

    .header h1 {
        font-size: 1.2em;
    }

    .logout-button {
        padding: 6px 12px;
        font-size: 0.8em;
    }

    .dashboard-section h2 {
        font-size: 1.2em;
    }

    .dashboard-section table th,
    .dashboard-section table td {
        padding: 8px;
    }

    .footer {
        font-size: 0.8em;
    }
}

    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#manage-students">Manage Students</a></li>
            <li><a href="#manage-teachers">Manage Teachers</a></li>
            <li><a href="#track-attendance">Track Attendance</a></li>
            <li><a href="#update-curriculum">Update Curriculum</a></li>
            <li><a href="#view-reports">View Reports</a></li>
            <li><a href="#communication">Communication</a></li>
            <li><a href="#settings">Settings</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Welcome, Admin</h1>
        </div>

        <!-- Manage Students -->
        <section id="manage-students" class="dashboard-section">
            <h2>Manage Students</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Class</th>
                        <th>Parent Contact</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?= htmlspecialchars($student['name']) ?></td>
                            <td><?= htmlspecialchars($student['age']) ?></td>
                            <td><?= htmlspecialchars($student['class']) ?></td>
                            <td><?= htmlspecialchars($student['parent_contact']) ?></td>
                            <td>
                                <button>Edit</button>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="student_id" value="<?= $student['id'] ?>">
                                    <button type="submit" name="delete_student">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <!-- Manage Teachers -->
        <section id="manage-teachers" class="dashboard-section">
            <h2>Manage Teachers</h2>
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Class</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($teachers as $teacher): ?>
                        <tr>
                            <td><?= htmlspecialchars($teacher['full_name']) ?></td>
                            <td><?= htmlspecialchars($teacher['email']) ?></td>
                            <td><?= htmlspecialchars($teacher['contact']) ?></td>
                            <td><?= htmlspecialchars($teacher['class']) ?></td>
                            <td>
                                <button>Edit</button>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="teacher_id" value="<?= $teacher['id'] ?>">
                                    <button type="submit" name="delete_teacher">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <!-- Track Attendance -->
        <section id="track-attendance" class="dashboard-section">
            <h2>Track Attendance</h2>
            <p>Present: <?= $attendance['present'] ?>, Absent: <?= $attendance['absent'] ?></p>
        </section>

        <!-- Update Curriculum -->
        <section id="update-curriculum" class="dashboard-section">
            <h2>Update Curriculum</h2>
            <form method="post">
                <textarea name="curriculum" rows="5" cols="50">Enter new curriculum details...</textarea>
                <button type="submit">Update</button>
            </form>
        </section>

        <!-- View Reports -->
        <section id="view-reports" class="dashboard-section">
            <h2>View Reports</h2>
            <p>Total Students: <?= $reports['students_count'] ?></p>
            <p>Total Teachers: <?= $reports['teachers_count'] ?></p>
            <!-- Add more detailed reports -->
        </section>

        <!-- Communication -->
        <section id="communication" class="dashboard-section">
            <h2>Communication</h2>
            <table>
                <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Message</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($communications as $comm): ?>
                        <tr>
                            <td><?= htmlspecialchars($comm['sender']) ?></td>
                            <td><?= htmlspecialchars($comm['receiver']) ?></td>
                            <td><?= htmlspecialchars($comm['message']) ?></td>
                            <td><?= htmlspecialchars($comm['timestamp']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <!-- Settings -->
        <section id="settings" class="dashboard-section">
            <h2>Settings</h2>
            <p>Here, you can update admin credentials, configure notification settings, and manage system logs.</p>
        </section>
    </div>
</body>
</html>
