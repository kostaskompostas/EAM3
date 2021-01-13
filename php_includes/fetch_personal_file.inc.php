<?php
    session_start();
    $ref = $_SESSION['ref'];

    require 'config.php';
    require 'fetch_history.inc.php';

    $string = $_GET["str"]; 

    //tokenize string
    list($name,$surname,$afm)=explode('/',$string);
    //get employee username 
    $query = "SELECT * FROM users WHERE name='$name' and surname='$surname' and afm='$afm' ";
    $query_run= mysqli_query($conn, $query);
    $rows=mysqli_fetch_assoc($query_run);
    $employee_username = $rows['username'];
    $_SESSION['selectedEmployee']=$employee_username;
    $_SESSION['selectedEmployee_gender'] = $rows['gender'];

    $gender = $rows['gender'];
    echo "$gender\t";
    
    //select diloseis
    $query = "SELECT * FROM forms WHERE username='$employee_username' ORDER BY end DESC";
    $rows= mysqli_query($conn, $query);
    
    
    if ($rows){
        $owner = $_SESSION['username'];        
        $today = date("Y-m-d");
        //load
        fetchHistory(($rows));
    }else{
        echo "failure";
    }
         
    
    mysqli_close($conn);
?>