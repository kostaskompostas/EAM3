<?php
    session_start();
    $ref = $_SESSION['ref'];

    require 'config.php';

    $string = $_GET["str"]; 

    //tokenize string
    list($name,$surname,$afm)=explode('/',$string);
    //get employee username 
    $query = "SELECT * FROM users WHERE name='$name' and surname='$surname' and afm='$afm' ";
    $query_run= mysqli_query($conn, $query);
    $rows=mysqli_fetch_assoc($query_run);
    $employee_username = $rows['username'];
    $_SESSION['selectedEmployee']=$employee_username;
    $_SESSION['selectedEmployee_gender'] = $rows['gender'];

    $gender = $rows['gender'];
    echo "$gender\t";
    
    //select diloseis
    $query = "SELECT * FROM forms WHERE username='$employee_username' ORDER BY end DESC";
    $rows= mysqli_query($conn, $query);
    if ($rows){
        $owner = $_SESSION['username'];        

        foreach ($rows as $row) {
            $start = $row['start'];
            $start = date('Y-m-d', strtotime($start));

            $end = $row['end'];
            $end = date('Y-m-d', strtotime($end));


            
            $formType = $row['formType'];
            $canModify = false;
            if ($_SESSION['username']===$row['creator_username'])
            $canModify = true;
            else 
            $canModify = false;            
            echo	"
            <tr>
            <td>$start</td>
            <td>$end</td>
            <td>$formType</td>";
            if ($canModify)	
                echo "<td><h4><i class='center-text icofont-close text-danger' onclick='delete_this(event)'>Διαγραφή</i></h4></td>";
            else{
                echo "<td></td>";
            }
            echo "</tr>";
        }
    }else{
        echo "failure";
    }
         
    
    mysqli_close($conn);
?>