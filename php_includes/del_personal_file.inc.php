<?php
    session_start();
    $ref = $_SESSION['ref'];

    require 'config.php';
    require 'fetch_history.inc.php';

    $string = $_GET["str"]; 

    list($start,$end,$type)=explode('/',$string);
    //tokenize date strings
    $start = strtotime($start); $start =date('Y-m-d',$start);
    $end = strtotime($end); $end =date('Y-m-d',$end);
    

    //choose correct username 
    if ($_SESSION['typeOfUser']==0)
        $username = $_SESSION['username'];
    else
        $username = $_SESSION['selectedEmployee'];    

    //delete query
    $query = "DELETE FROM forms WHERE username='$username' AND formType='$type' AND start='$start' AND end='$end'";
    if (!$conn->query($query)){
        echo ("Error description: ".$conn->error);
    }else{
        
        $query = "SELECT * FROM forms WHERE username='$username' ORDER BY end DESC";
        $rows = mysqli_query($conn, $query);
        //refresh
        fetchHistory($rows);
    }
         
    
    mysqli_close($conn);
?>