<?php include_once("../layout/basic-layout.php") ?>

<style>
    .main-content{
        width: 70%;
        margin-top: 100px;
        margin-left: 350px;
        height: auto;
    }
</style>
<div class="main-content">

<section class="numbers">
    <div class="stats">
              <div class="total-number">
            <h3>Number of Courses</h3>
            <h2>200</h2>
            <p>Total number of courses on Curriculum</p>
        </div>
        <div class="total-number">
            <h3>Coverage in %</h3>
            <h2>10%</h2>
            <p>total Coverage in percetages</p>
        </div>
        <div class="total-number">
            <h3>Enrolled</h3>
            <h2>30</h2>
            <p>Total Number of Enrolled students</p>
        </div>  
    </div>

    </section>

<section id="stats">
    <h1>Curriculum Reports</h1>
    <div class="container-stats">
        <canvas id="CurriculumChart"></canvas>
    </div>
</section>

<section id="cards">
    <h1>Courses Breakdown </h1>
<div class="cards-curri">

</div>
</section>
</div>

<script>

draw_graph("pie","Curriculum Progress (%)","../data/curriculum-data.php","CurriculumChart", "CourseName", "CourseProgress")
createCards()
    </script>
</body>
</html>