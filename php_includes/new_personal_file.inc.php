<?php
    session_start();
    $ref = $_SESSION['ref'];

    require 'config.php';

    if (isset($_POST['submit_btn'])) {

        

        //if its an employer , push the new dilosi to the selected employee
        $owner = $_SESSION['username'];
        if ($_SESSION['typeOfUser']==1){  
            $username = $_SESSION['selectedEmployee'];
        }else{
            $username = $_SESSION['username'];
        }
        
        //translate string to date
        $start = strtotime($_POST['date_start']);
        $start = date('Y-m-d', $start); //now you can save in DB

        $end = strtotime($_POST['date_end']);
        $end = date('Y-m-d', $end); //now you can save in DB

        $formType = $_POST['typeOfForm'];


        //querry
        $query = "INSERT INTO forms(start,end,username,formType,creator_username)
        VALUES('$start', '$end', '$username', '$formType', '$owner')";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $_SESSION['form_success']=true;
            header("Location: ../personal_files.php");
        } else {
            echo "ERROR: $query. " . mysqli_error($conn);
            header("Location: ../error.php");
        }
        mysqli_close($conn);
    }
?>