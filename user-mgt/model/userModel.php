<?php 
    require_once('db.php');

    function login($username, $password){
        $con = dbConnection();
        $sql = "select * from users where name='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function getAllUser(){
        $con = dbConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function getUserById($id){

    }

    function createUser($user){
        $con = dbConnection();
        $sql = "insert into users values('', '{$user['username']}', '{$user['email']}', '{$user['password']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deleteUser($id){

    }

    function updateUser($user){

    }

?>