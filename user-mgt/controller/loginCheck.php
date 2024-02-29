<?php
    //session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null usernamepassword";
    }else if($username == $password){
        //$_SESSION['flag'] = "true";
        setcookie('flag', 'true', time()+3000, '/');
        header('location: ../view/home.php');
    }else{
        echo "invalid User!";
    }
?>