<?php
    session_start();
    $ref = $_SESSION['ref'];

    require 'config.php';
    require 'fetch_history.inc.php';

    
    $string =$_GET['str'];
    list($start,$end,$formType)=explode('/',$string);
    
    //tokenize date strings
    
    $start = strtotime($start); $start =date('Y-m-d',$start);
     
    $end = strtotime($end); $end =date('Y-m-d',$end);

    

        
    //if its an employer , push the new dilosi to the selected employee
    $owner = $_SESSION['username'];
    if ($_SESSION['typeOfUser']==1){  
        $username = $_SESSION['selectedEmployee'];
    }else{
        $username = $_SESSION['username'];
    }
    
    //querry
    $query = "INSERT INTO forms(start,end,username,formType,creator_username)
    VALUES('$start', '$end', '$username', '$formType', '$owner')";
    if (!$conn->query($query)){
        echo ("Error description: ".$conn->error);
    }else{
        
        //refresh
        $query = "SELECT * FROM forms WHERE username='$username' ORDER BY end DESC";
        $rows = mysqli_query($conn, $query); 
        fetchHistory($rows);
    }
    mysqli_close($conn);
