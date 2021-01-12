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
    $username = $rows['username'];
    $_SESSION['selectedEmployee']=$username;

    //select diloseis
    $query = "SELECT * FROM forms WHERE username='$username' ORDER BY end DESC";
    $rows= mysqli_query($conn, $query);
    if ($rows){
        foreach ($rows as $row) {
            $start = $row['start'];
            $start = date('m-d-Y', strtotime($start));

            $end = $row['end'];
            $end = date('m-d-Y', strtotime($end));

            $formType = $row['formType'];
            echo <<< row
                <tr>
                <td>$start</td>
                <td>$end</td>
                <td>$formType</td>
                <form id="personalFiles_delete" method="post" action="php_includes/del_personal_file.inc.php" onsubmit="return delete_this(event)">
                <td><i class="icofont-ui-remove text-danger"></i><input  name="delete_btn" type="submit" value="Αρση"></input></td>
                </form>
                </tr>
                row;
        }
    }else{
        echo "failure";
    }
         
    
    mysqli_close($conn);
?>