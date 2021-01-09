<?php
session_start();
$ref = $_SESSION['ref'];

require 'config.php';

if (isset($_POST['submit_btn'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['lastName'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $afm = $_POST['afm'];
    $type = $_POST['typeOfUser'];
    $address = $_POST['adress'];
    $companyName = $_POST['companyName'];

    $isOwner = 0;
    $isParent = 0;


    if ($type == "Εργαζόμενος") {
        if (isset($_POST['parentCheck'])){
            $isParent = 1;
        }
    }else{
        $isOwner = 1;
    }

    //add a new row to the table
    $query = "INSERT INTO users (username, name, surname,password,email,phone,afm,typeOfUser,companyName,address,isParent)
    VALUES('$username','$name','$surname','$password','$email',$phone,$afm,$isOwner,'$companyName','$address',$isParent)";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['username'] = $username;
        $_SESSION['type'] = $type;
        header("Location: ../../.$ref.");
    } else {
        echo "ERROR: $query. " . mysqli_error($conn);
        header("Location: ../error.php");
    }
    mysqli_close($conn);
}
