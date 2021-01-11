<?php
session_start();
$ref = $_SESSION['ref'];

require 'config.php';
//get actual values from database
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$username'";
$query_run = mysqli_query($conn, $query);

if ($query_run) {
    $row = mysqli_fetch_assoc($query_run); //actual user data

    if (isset($_POST['submit_btn'])) {   //if data was submitted

        // if input is not null , copy new data to variable ,else just put the old data (from db)
        ($_POST['password']) ? $password=$_POST['password'] : $password=$row['password'];
        ($_POST['email']) ? $email=$_POST['email'] : $email=$row['email'];
        ($_POST['name']) ? $name=$_POST['name'] : $name=$row['name'];
        ($_POST['lastName']) ? $lastName=$_POST['lastName'] : $lastName=$row['surname'];
        ($_POST['phone']) ? $phone=$_POST['phone'] : $phone=$row['phone'];
        ($_POST['adress']) ? $address=$_POST['adress'] : $address=$row['address'];
        ($_POST['afm']) ? $afm=$_POST['afm'] : $afm=$row['afm'];
        ($_POST['companyName']) ? $companyName=$_POST['companyName'] : $companyName=$row['companyName'];
        (isset($_POST['parentCheck'])) ? $isParent=1: $isParent=0;


        $_SESSION['isParent']=$isParent;
        //update table
        $query = "UPDATE users SET name='$name', surname='$lastName',password='$password',email='$email',phone='$phone',afm='$afm',companyName='$companyName',address='$address',isParent='$isParent' 
        WHERE username='$username'";
    
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $_SESSION['form_success']=true;
            header("Location: ../profile_options.php");
        } else {
            echo "ERROR: $query. " . mysqli_error($conn);
            header("Location: ../error.php");
        }
    }
} else {
    echo "ERROR: $query. " . mysqli_error($conn);
	header("Location: ../error.php");
}
mysqli_close($conn);

