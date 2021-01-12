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
    $gender = $_POST['gender'];

    $isOwner = 0;
    $isParent = 0;


    if ($type == "Εργαζόμενος") {
        if (isset($_POST['parentCheck'])) {
            $isParent = 1;
        }
    } else {
        $isOwner = 1;
    }

    //add a new row to the table
    $query = "INSERT INTO users (username, name, surname,password,email,phone,afm,typeOfUser,companyName,address,isParent,gender)
    VALUES('$username','$name','$surname','$password','$email',$phone,$afm,$isOwner,'$companyName','$address',$isParent,'$gender')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['username'] = $username;
        $_SESSION['typeOfUser'] = $isOwner;
        $_SESSION['isParent'] = $isParent;
        $_SESSION['companyName']=$companyName;




        //if user was trying to get to personal files , send him there
        if (isset($_SESSION['from_covid'])) {
            if ($_SESSION['from_covid'] == true) {
                $_SESSION['from_covid'] = false;
                header("Location: ../personal_files.php");
            } else {
                header("Location: $ref");
            }
        } else {
            header("Location: $ref");
        }
    } else {
        echo "ERROR: $query. " . mysqli_error($conn);
        header("Location: ../error.php");
    }
    mysqli_close($conn);
}
