<?php

$conn = new mysqli("localhost","root", "","testing-project");

if($conn->connect_error){
    die("". $conn->connect_error);
}else{

    $sql = "SELECT * FROM curriculum";

    $result = mysqli_query($conn,$sql);
    $overral;
    if(mysqli_num_rows($result)>0){
        while($data = mysqli_fetch_assoc($result)){
            $total[] = $data;
        }
    }
    header('Content-Type: application/json');
    echo json_encode($total);
}

?>