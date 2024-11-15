<?php include_once("../layout/basic-layout.php") ?>

<div class="main-content">
<!--section for displaying the Attendance fo each student on a day selected -->
<!--section for displaying the current number of students enrolled -->
<section class="numbers">
    <div class="stats">
              <div class="total-number">
            <h3>Number of Students</h3>
            <h2>200</h2>
            <p>Total number of students</p>
        </div>
        <div class="total-number">
            <h3>Today Attendance</h3>
            <h2 id="today"></h2>
            <p>Total Number of Attendance</p>
        </div>
        <div class="total-number">
            <h3>Attendance Average (%)</h3>
            <h2>30%</h2>
            <p>Average Class Attendance</p>
        </div>  
    </div>

    </section>


    <section id="stats">
    <h1>Attendance Overview</h1>
    <div class="container-stats">
        <canvas id="performanceChart"></canvas>
    </div>
</section>

<section>
    <h1>indivisual Attendance Reports</h1>

    <table>
        <tr>
            <th>S/N</th>
            <th>Full Name</th>
            <th>Number of Attendance</th>
            <th>Attendance rate</th>
            <th>Actions</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Augustine Kasolota</td>
            <td>20</td>
            <td>50%</td>
            <td>
                <button>View past Attendance</button>
            </td>
        </tr>
    </table>

</section>
</div>

<script>
draw_graph("line","Students Attendance (%)","../data/attendance_data.php","performanceChart")
    </script>

</body>
</html>