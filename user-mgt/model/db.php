<?php 

    $host = "localhost";
    $dbname = "webtech";
    $dbuser = "root";
    $dbpass = "";

    function dbConnection(){
        global $host;
        global $dbuser;

        $con = mysqli_connect($host, $dbuser, $GLOBALS['dbpass'], $GLOBALS['dbname']);
        return $con;
    }

?>