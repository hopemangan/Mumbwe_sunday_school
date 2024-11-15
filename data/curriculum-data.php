<?php
$conn = new mysqli("localhost", "root", "", "group4");

if($conn->connect_error){
    echo 'failed to connect';
}else{
        $sql = "SELECT CourseName as name, CourseProgress as avg FROM curriculum WHERE CourseYear = 1";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while($data_perf = mysqli_fetch_assoc($result)){
                
                $students[] = $data_perf;
                
                //echo $data_perf["avg_grade"];
            }
        }

        header('Content-Type: application/json');
        echo json_encode($students);
    }


?>