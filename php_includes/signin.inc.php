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
    
    
    if ($query_run) {
        if (mysqli_num_rows($query_run) != 0) {
            $row = mysqli_fetch_assoc($query_run);

            $_SESSION['username'] = $username;
            $_SESSION['typeOfUser']=$row['typeOfUser'];
            $_SESSION['isParent']=$row['isParent'];
            
            //if user was trying to get to personal files , send him there
            if (isset($_SESSION['from_covid'])){
                if ($_SESSION['from_covid'] == true){
                    $_SESSION['from_covid']=false;
                    header("Location: ../personal_files.php");
                }else{
                    header("Location: $ref");
                }
            }else{
                header("Location: $ref");
            }
        } else {
            echo "invalid info<br>";
            header("Location: ../error.php");
        }
    } else {
        echo "ERROR: $query. " . mysqli_error($conn);
        header("Location: ../error.php");
    }
    mysqli_close($conn);
}
