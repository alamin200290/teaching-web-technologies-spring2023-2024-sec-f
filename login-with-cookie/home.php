<?php

    //session_start();

    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>Welcome Home!</h1>
        <a href="logout.php" > Logout </a>

        
</body>
</html>