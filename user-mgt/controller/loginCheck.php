<?php
    //session_start();
    //include('../model/db.php');
    //include_once('../model/db.php');
    //require('../model/db.php');
    
    require_once('../model/userModel.php');

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null usernamepassword";
    }else {

        $status = login($username, $password);

        if($status){
            setcookie('flag', 'true', time()+3000, '/');
            header('location: ../view/home.php');
        }else{
            echo "invalid User!";
        }    
    }
?>