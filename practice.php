
<?php

    $name = "shibli";
    $cgpa = 2.5;
    $id = 1;
    $email = "shibli@aiub.edu";

    $std = [1, "shibli", 3.5];         //index array. 1D
    $std[1];
    //$std = array(1, 'shibli', 3.5);  index array
    $stds = [
        [1, "shibli", 3.5],
        [2, "shibli", 2.7],
        [3, "shibli", 2.5]           //2D
    ];
    $stds[2][2];

    $std = ['id'=>1, 'name'=>'shibli', 'cgpa'=>4.00];            //associative array. 1D
    //key value pair

    $std['cgpa'];  //index number as consider as name

    $stds = [                                             
        's1'=>['id'=>1, 'name'=>'shibli', 'cgpa'=>3.00],
        's2'=>['id'=>2, 'name'=>'shibli', 'cgpa'=>3.50],
        's3'=>['id'=>3, 'name'=>'shibli', 'cgpa'=>3.90],
    ];
    //associative array 2D
    //ekhane total 4 ti array.

    //$stds[2]['cgpa'];    //2 no index, cgpa


    $stds['s3']['cgpa'];  //4 no student er name


    function abc($a, $b){
        return $a+$b;
    }

    abc(10,20);


    for($i=0; $i<10; $i++){
        echo "<h1>".$name."</h1>";           //preprocessing
        //dynamically korlm
        // niche likhle 10 bar likhte hoto 10 bar show korar jnno.
    }

    // if(){

    // }else{

    // }

    // print('test');

    //echo "test {$name} abc"; //more faster than print, print e return type jnno slow
    //variable print korar jnno {$name}


    //echo "test {$name} abc";   . diye concatanation

    //$obj->
    //property access korar jnno
?>

<h2 style="color: red" onclick="alert('test')"> <?php if($name !==""){echo $name;}else{echo "null";} ?> </h2>