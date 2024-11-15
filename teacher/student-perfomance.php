<?php include_once("../layout/basic-layout.php") ?>

<title>Students Perfomance</title>

<div class="main-content">
   <section id="stats">
    <h1>Student Perfomance</h1>
    <div class="container-stats">
        <canvas id="performanceChart"></canvas>
    </div>
    
</section>
 
</div>


<script>
draw_graph("bar","Students Attendance (%)","../data/perfomance_data.php","performanceChart")
    </script>
</body>
</html>