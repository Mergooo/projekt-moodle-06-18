<?php 
if($level == 1){
      
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
    }
    
    
    
    $result = $number1 + $number2;

    if(isset($_POST['points'])){
        $points = $_POST['points'];
    }
        
    if(isset($_POST['inputField'])){
        $input = $_POST['inputField'];
        $result2 = $_POST['result'];
        if($result2 == $input){
            $points++;
        }else{
            include "result.php";
        }
    }
if(isset($_POST['level'])){
    $level = $_POST['level'];
}

if($points >= 5  && $points < 10){
    $level = 2;
}

if($level == 2){
      
    $number1 = rand(1, 100);
    $number2 = rand(1, 100);
    
 
}

$result = $number1 + $number2;

if(isset($_POST['points'])){
    $points = $_POST['points'];
}
    
if(isset($_POST['inputField'])){
    $input = $_POST['inputField'];
    $result2 = $_POST['result'];
    if($result2 == $input){
        $points++;
    }else{
        include "result.php";
    }
}
if(isset($_POST['level'])){
$level = $_POST['level'];
}

if($points >= 10  ){
    $level = 3;
}


if($level == 3){
      
    $number1 = rand(1, 1000);
    $number2 = rand(1, 1000);
    
 
}

$result = $number1 + $number2;

if(isset($_POST['points'])){
    $points = $_POST['points'];
}
    
if(isset($_POST['inputField'])){
    $input = $_POST['inputField'];
    $result2 = $_POST['result'];
    if($result2 == $input){
        $points++;
    }else{
        include "result.php";
    }
}
if(isset($_POST['level'])){
$level = $_POST['level'];
}




?>