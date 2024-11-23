<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beginners Class Attendance</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #e9f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }
    .container {
        width: 90%;
        max-width: 800px;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        margin-left: 30%;
    }
    h1 {
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }
    .tabs {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }
    .tab {
        padding: 10px 20px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s, color 0.3s;
    }
    .tab.active {
        background-color: #3b82f6;
        color: #fff;
        border-radius: 10px;
    }
    .progress-bar-container {
        width: 100%;
        background-color: #f0f0f0;
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 25px;
        height: 10px;
    }
    .progress-bar {
        height: 100%;
        background: linear-gradient(90deg, #34d399, #3b82f6);
        width: 0%;
        transition: width 0.4s ease;
    }
    .student-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f9f9f9;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }
    .student-info {
        flex: 2;
        font-size: 1.1em;
        color: #444;
        text-align: left;
    }
    .attendance-actions {
        display: flex;
        gap: 10px;
        align-items: center;
    }
    .status {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        margin-right: 8px;
    }
    .status.present { background-color: #34d399; }
    .status.absent { background-color: #f87171; }
    .mark-button, .archive-button, .unarchive-button {
        background-color: #3b82f6;
        color: white;
        padding: 8px 14px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 0.9em;
    }
    .done-button {
        background-color: #34d399;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1em;
        margin-top: 20px;
    }
    .hidden {
        display: none;
    }
    .main-contents{
        display: flex;
        flex-direction: column;
        width: 100%;
    }
</style>

</head>
<body>
<div class="main-contents">

<?php include_once("../navbar-users.php"); ?>

<div class="container">
    <h1>Beginners Class Attendance</h1>
    <div class="tabs">
        <div class="tab tab-attendance active" onclick="switchTab('attendance')">Attendance</div>
        <div class="tab tab-archived" onclick="switchTab('archived')">Archived</div>
    </div>

    <!-- Progress bar only visible in attendance tab -->
    <div class="progress-bar-container attendance-section">
        <div class="progress-bar"></div>
    </div>

    <!-- Attendance List -->
    <div class="student-list attendance-section">
        <div class="student-row">
            <div class="student-info">Student Name: John Doe | Student ID: #STDB001</div>
            <div class="attendance-actions">
                <div class="status absent"></div>
                <button class="mark-button" onclick="markAttendance(this, this.previousElementSibling)">Mark Present</button>
                <button class="archive-button" onclick="archiveStudent(this.parentElement.parentElement)">Archive</button>
            </div>
        </div>
        <div class="student-row">
            <div class="student-info">Student Name: Jane Smith | Student ID: #STDB002</div>
            <div class="attendance-actions">
                <div class="status absent"></div>
                <button class="mark-button" onclick="markAttendance(this, this.previousElementSibling)">Mark Present</button>
                <button class="archive-button" onclick="archiveStudent(this.parentElement.parentElement)">Archive</button>
            </div>
        </div>
        <div class="student-row">
            <div class="student-info">Student Name: Michael Brown | Student ID: #STDB003</div>
            <div class="attendance-actions">
                <div class="status absent"></div>
                <button class="mark-button" onclick="markAttendance(this, this.previousElementSibling)">Mark Present</button>
                <button class="archive-button" onclick="archiveStudent(this.parentElement.parentElement)">Archive</button>
            </div>
        </div>
        <div class="student-row">
            <div class="student-info">Student Name: Emily White | Student ID: #STDB004</div>
            <div class="attendance-actions">
                <div class="status absent"></div>
                <button class="mark-button" onclick="markAttendance(this, this.previousElementSibling)">Mark Present</button>
                <button class="archive-button" onclick="archiveStudent(this.parentElement.parentElement)">Archive</button>
            </div>
        </div>
    </div>

    <!-- Archived Students List -->
    <div class="archived-section hidden">
        <div class="archived-list">
            <!-- Archived students will appear here -->
        </div>
    </div>
</div>
</div>

<script>
    let presentCount = 0;
    const totalStudents = 4;

    function markAttendance(button, statusElement) {
        if (statusElement.classList.contains('present')) {
            statusElement.classList.remove('present');
            statusElement.classList.add('absent');
            button.textContent = 'Mark Present';
            presentCount--;
        } else {
            statusElement.classList.remove('absent');
            statusElement.classList.add('present');
            button.textContent = 'Mark Absent';
            presentCount++;
        }
        updateProgressBar();
    }

    function updateProgressBar() {
        const progress = (presentCount / totalStudents) * 100;
        document.querySelector('.progress-bar').style.width = `${progress}%`;
    }

    function archiveStudent(rowElement) {
        const archivedList = document.querySelector('.archived-list');
        rowElement.querySelector('.archive-button').remove();
        const unarchiveButton = document.createElement('button');
        unarchiveButton.textContent = 'Unarchive';
        unarchiveButton.className = 'unarchive-button';
        unarchiveButton.onclick = () => unarchiveStudent(rowElement);
        rowElement.querySelector('.attendance-actions').appendChild(unarchiveButton);
        archivedList.appendChild(rowElement);
        updateProgressBar();
    }

    function unarchiveStudent(rowElement) {
        const studentList = document.querySelector('.student-list');
        rowElement.querySelector('.unarchive-button').remove();
        const archiveButton = document.createElement('button');
        archiveButton.textContent = 'Archive';
        archiveButton.className = 'archive-button';
        archiveButton.onclick = () => archiveStudent(rowElement);
        rowElement.querySelector('.attendance-actions').appendChild(archiveButton);
        studentList.appendChild(rowElement);
        updateProgressBar();
    }

    function switchTab(tabName) {
        document.querySelector('.attendance-section').classList.add('hidden');
        document.querySelector('.archived-section').classList.add('hidden');
        document.querySelector(`.${tabName}-section`).classList.remove('hidden');
        document.querySelector('.tab.active').classList.remove('active');
        document.querySelector(`.tab-${tabName}`).classList.add('active');
    }
</script>
</body>
</html>
