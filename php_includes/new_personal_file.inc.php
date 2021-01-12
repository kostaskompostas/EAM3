<?php
    session_start();
    $ref = $_SESSION['ref'];

    require 'config.php';
    $string =$_GET['str'];
    list($start,$end,$formType)=explode('/',$string);
    //tokenize date strings
    $tok = strtok($start," ");
    $day =strtok(" ");
    $month = strtok(" ");
    $year = strtok(" ");
    $start = $year." ".$month." ".$day;
    $start = strtotime($start); $start =date('Y-m-d',$start);
     
    $tok = strtok($end," ");
    $day =strtok(" ");
    $month = strtok(" ");
    $year = strtok(" ");
    $end = $year." ".$month." ".$day;
    $end = strtotime($end); $end =date('Y-m-d',$end);

    

        
    //if its an employer , push the new dilosi to the selected employee
    $owner = $_SESSION['username'];
    if ($_SESSION['typeOfUser']==1){  
        $username = $_SESSION['selectedEmployee'];
    }else{
        $username = $_SESSION['username'];
    }

    //querry
    $query = "INSERT INTO forms(start,end,username,formType,creator_username)
    VALUES('$start', '$end', '$username', '$formType', '$owner')";
    if (!$conn->query($query)){
        echo ("Error description: ".$conn->error);
    }else{
        //refresh
        $query = "SELECT * FROM forms WHERE username='$username' ORDER BY end DESC";
        $rows = mysqli_query($conn, $query);

        foreach ($rows as $row) {
            $start = $row['start'];
            $start = date('Y-m-d', strtotime($start));

            $end = $row['end'];
            $end = date('Y-m-d', strtotime($end));
            $formType = $row['formType'];


            $canModify=false;
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
                echo "<td><h4><i class='center-text icofont-close text-danger' onclick='delete_this(event)'  onmouseover=''' style='cursor: pointer;'>Διαγραφή</i></h4></td>";
            else{
                echo "<td></td>";
            }
            echo "</tr>";
        }
        
    }
    mysqli_close($conn);
    
?>