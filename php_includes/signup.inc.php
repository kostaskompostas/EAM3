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

    $isOwner = false;
    if ($type == "Εργοδότης") {
        $isOwner = true;
        $companyName = $_POST['companyName'];
    } else {
        $companyName = "none";
    }

    //add a new row to the table
    $query = "INSERT INTO users VALUES('$username','$name','$surname','$password','$email','$phone','$afm','$isOwner','$companyName',$address)";
    $query_run = mysqli_query($conn, $query);

    mysqli_close($conn);

    if ($query_run) {
        $_SESSION['username'] = $username;
        $_SESSION['type'] = $type;
        header("Location: ../../.$ref.");
        die();
    } else {
        echo "query failed<br>";
    }
}
