<?php include_once("../layout/basic-layout.php") ?>

    <title>Admin Dashboard - Mumbwe Sunday School</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset */

        .main-content{
        width: 70%;
        margin-top: 100px;
        margin-left: 350px;
        height: 60%;
        padding: 15px;
        cursor: pointer;
        z-index: 300;
    }
h2{
    text-align: center;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Class Attendance Section */
        .container {

        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .grid-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s;
            cursor: pointer;
            height: 200px;
            display: flex;
            flex-direction: column;
            outline: none;

        }

        .grid-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .grid-item:focus {
            outline: 2px solid #4CAF50;
        }

        .icon {
            font-size: 36px;
            margin-bottom: 15px;
        }

        h3 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 10px;
            color: #888;
            font-size: 0.9em;
            margin-top: 20px;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
        }

        @media (max-width: 480px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .grid-container {
                grid-template-columns: 1fr;
            }

            .grid-item {
                height: auto;
            }
        }
    </style>

        <!-- Track Attendance Section -->
        <div class=" main-content">
            <h2>Click on a Class to manage Attendance.</h2>

            <div class="grid-container">
                <div class="grid-item" tabindex="0" onclick="viewAttendance('Beginners')">
                    <div class="icon">📖</div>
                    <h3>Beginners</h3>
                    <p>Basic introduction to the faith</p>
                </div>
                <div class="grid-item" tabindex="0" onclick="viewAttendance('Bible Class 1')">
                    <div class="icon">📜</div>
                    <h3>Bible Class 1</h3>
                    <p>Foundational Bible study</p>
                </div>
                <div class="grid-item" tabindex="0" onclick="viewAttendance('Bible Class 2')">
                    <div class="icon">📘</div>
                    <h3>Bible Class 2</h3>
                    <p>Deepening understanding of scriptures</p>
                </div>
                <div class="grid-item" tabindex="0" onclick="viewAttendance('Hearers')">
                    <div class="icon">👂</div>
                    <h3>Hearers</h3>
                    <p>Learning to listen and understand God's word</p>
                </div>
                <div class="grid-item" tabindex="0" onclick="viewAttendance('Catechumen')">
                    <div class="icon">🙏</div>
                    <h3>Catechumen</h3>
                    <p>Preparation for full church membership</p>
                </div>
                <div class="grid-item" tabindex="0" onclick="viewAttendance('Youth')">
                    <div class="icon">👥</div>
                    <h3>Youth</h3>
                    <p>Faith and life guidance for teens</p>
                </div>
            </div>
        </div>


    </div>    
    <script>
        function viewAttendance(className) {
            const page = className.replace(/\s+/g, '-').toLowerCase();
            window.location.href = `${page}.html`;
        }
    </script>
</body>
</html>
