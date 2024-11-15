<?php

$conn = new mysqli("localhost","root", "","group4");

if($conn->connect_error){
    die("". $conn->connect_error);
}else{

    $sql = "SELECT * FROM curriculum";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        while($data = mysqli_fetch_assoc($result)){
            $courses[] = $data;
        
        }
    }
    header('Content-Type: application/json');
echo json_encode($courses);
}

?>