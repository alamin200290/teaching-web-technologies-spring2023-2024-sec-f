<?php

    //sleep(3);
    //$user = $_REQUEST['user'];
    //$id = $_REQUEST['id'];
    //$data = json_decode($user);
    $user = ['id'=>1, 'username'=>'alamin', 'password'=>'123'];
    $data = json_encode($user);
    echo $data;

?>