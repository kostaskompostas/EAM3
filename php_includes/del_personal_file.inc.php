<?php
    session_start();
    $ref = $_SESSION['ref'];

    require 'config.php';

    $string = $_GET["str"]; 

    //tokenize string
    list($start,$end,$type)=explode('/',$string);

    $start = strtotime($start);$start = date('Y-m-d', $start); //now you can save in DB
    $end = strtotime($end);$end = date('Y-m-d', $end);
    $temp = $_SESSION['username'];

    //delete dilosi
    $query = "DELETE FROM forms WHERE username='$temp' AND start=$start AND end='$end' AND formType='$type'";
    $result = $conn->query($query);
    if ($result){
        echo "Deleted successfully";
    }else{
        echo "peepoo";
    }
         
    
    mysqli_close($conn);
?>