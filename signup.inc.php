<?php

    require 'config.php';

    if (isset($_POST['submit_btn'])){
        $username = $_POST['username'];
        $name = $_POST['name'];
        $surname = $_POST['lastName'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $afm = $_POST['afm'];
        $type = false;
        $id=9;
        $companyName = $_POST['companyName'];
        
        
        
        //add a new row to the table

        $query = "INSERT INTO users VALUES('$username','$name','$surname','$password','$email','$phone','$afm','$type','$id','$companyName')";
        $query_run = mysqli_query($conn,$query);
        
        if ($query_run){
            header("Location: index.html");
        }else {
            echo "query failed<br>";
        }   
    }
?>