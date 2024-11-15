   <?php include_once("../layout/basic-layout.php") ?>
   <title>Reports</title>




<div class="main-content">
<!--section for displaying the current number of students enrolled -->
    <section class="numbers">
    <div class="stats">
        <div class="total-number">
            <h3>Number of Students</h3>
            <h2>200</h2>
            <p>Total number of students</p>
        </div>
        <div class="total-number">
            <h3>Number of Courses</h3>
            <h2>10</h2>
            <p>Total Number of students</p>
        </div>
        <div class="total-number">
            <h3>Class Students</h3>
            <h2>30</h2>
            <p>Current Class students</p>
        </div>  
    </div>

    </section>

<!--section for displaying the Attendance fo each student on a day selected -->
<section class="indivisual-students">
    <h2>Student Attendance</h2>
    <div class="data-perfomance">
        <canvas id="attendanceChart"></canvas>
        </div>
    
    </section>

<!--section for displaying the perfomance of a class and of an indivisual-students -->
    <section class="perfomance">
    <h2>Student Performance</h2>
        <div class="container-stats">
        <canvas id="performanceChart"></canvas>
        </div>
    

    </section>


</div>



    <script>
draw_graph("bar","Students Performance","../data/perfomance_data.php","performanceChart")

const names = ['january', 'feb', 'march', 'april', 'may', 'june', 'july', 'august', 'sept', 'oct', 'November', 'December']

draw_graph("bar","Students Attendance Rate","../data/attendance_data.php","attendanceChart")
    </script>
</body>
</html>