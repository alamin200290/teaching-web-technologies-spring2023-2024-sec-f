<?php 

    $con = mysqli_connect('localhost', 'root', '', 'webtech');

    // if($con){
    //     echo "success";
    // }else{
    //     echo "Error";
    // }

    $sql1 = "insert into users values('', 'abc', 'abc@aiub.edu', '345')";
    if(mysqli_query($con, $sql1)){
        echo "user added";
    }else{
        echo "Inser error";
    }

    $sql = "select * from users";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }

?>