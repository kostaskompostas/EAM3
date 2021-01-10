<?php
session_start();
$ref = $_SESSION['ref'];

require 'config.php';

if (isset($_POST['submit_btn'])) {
    
    $name = $_POST['name']; echo "$name <br>";
    $surname = $_POST['lastName']; echo "$surname <br>";
    $password = $_POST['password']; echo "$password <br>";
    $email = $_POST['email'];   echo "$email <br>";
    $phone = $_POST['phone'];   echo "$phone<br>";
    $afm = $_POST['afm'];   echo "$afm <br>";
    $address = $_POST['adress'];    echo "$address <br>";
    $companyName = $_POST['companyName'];   echo "$companyName<br>";
    /*
    */

    //add a new row to the table
    /*
    $query = "INSERT INTO users (username, name, surname,password,email,phone,afm,typeOfUser,companyName,address,isParent)
    VALUES('$username','$name','$surname','$password','$email',$phone,$afm,$isOwner,'$companyName','$address',$isParent)";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['username'] = $username;
        header("Location: $ref");
    } else {
        echo "ERROR: $query. " . mysqli_error($conn);
        header("Location: ../error.php");
    }*/
    mysqli_close($conn);
}
