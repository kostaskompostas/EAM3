<?php
    session_start();
    $ref=$_SESSION['ref'];

    require 'config.php';

    if (isset($_POST['submit_btn'])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        //select row
        $query = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
        $query_run = mysqli_query($conn,$query);
        
        if ($query_run){

            $_SESSION['username']= $username;
            header("Location: ../../.$ref.");
            die();
        }else {
            echo "query failed<br>";
        }   
    }
?>