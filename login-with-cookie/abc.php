<?php

    $name = "alamin";
    $id = 12;
    $cgpa = 3.6;

    //$std  = array(1, "alamin", 3.5);
    $std  = [1, "alamin", 3.5];
    $std[1];

    $stds  = [
                [1, "alamin", 3.5],
                [1, "alamin", 3.5],
                [1, "alamin", 3.5]
            ];
    $stds[1][2];

    $student  = ['id'=>1, 'name'=>"alamin", 'cgpa'=>3.5, 'email'=>'alamin@aiub.edu'];
    $student['name'];

    $students  = [
                    's1'=>['id'=>1, 'name'=>"alamin", 'cgpa'=>3.5, 'email'=>'alamin@aiub.edu'],
                    's2'=>['id'=>1, 'name'=>"alamin", 'cgpa'=>3.5, 'email'=>'alamin@aiub.edu'],
                    's3'=>['id'=>1, 'name'=>"alamin", 'cgpa'=>3.5, 'email'=>'alamin@aiub.edu']
                ];
    $students['s3']['id'];
    //print_r($students);
    //print("Hello PHP");
    //echo "Hello PHP".$name;

    // function sum($a=0, $b=0){
    //     return $a+$b;      
    // }

    // echo sum(10);

    for($i=0; $i<10; $i++){
        echo "Alamin <br>";
    }
    // $i=0;
    // foreach($students as $s){
    //     $i++
    //     print_r($s['name']);
    //     echo $i;
    // }

    // if(1 == '1'){
    //     echo "true";
    // }else{
    //     echo "false";
    // }

    

?>