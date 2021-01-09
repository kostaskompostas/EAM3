<?php
session_start();
$ref = $_SESSION['ref'];

require 'config.php';

if (isset($_POST['submit_btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //select row
    $query = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
    $query_run = mysqli_query($conn, $query);


    if (mysqli_query($conn, $query)) {
        if (mysqli_num_rows($query_run) != 0) {
            $_SESSION['username'] = $username;
            header("Location: ../../.$ref.");
        } else {
            echo "invalid info<br>";
        }
    } else {
        echo "ERROR: $query. " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
