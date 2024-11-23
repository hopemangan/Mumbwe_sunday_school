<?php
$conn = new mysqli("localhost", "root", "", "group4");

if($conn->connect_error){
    echo 'failed to connect';
}else{
        $sql = "SELECT _date as name , total_attend as avg FROM attendance";

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