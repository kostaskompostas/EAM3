<?php
    session_start();
    $ref = $_SESSION['ref'];

    require 'config.php';

    $string = $_GET["str"]; 

    list($start,$end,$type)=explode('/',$string);
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
    

    //choose correct username 
    if ($_SESSION['typeOfUser']==0)
        $temp = $_SESSION['username'];
    else
        $temp = $_SESSION['selectedEmployee'];    

    //delete query
    $query = "DELETE FROM forms WHERE username='$temp' AND formType='$type' AND start='$start' AND end='$end'";
    if (!$conn->query($query)){
        echo ("Error description: ".$conn->error);
    }else{
        //refresh
        $query = "SELECT * FROM forms WHERE username='$temp' ORDER BY end DESC";
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
                echo "<td><button  name='delete_btn' onclick='delete_this(event)' ><i class='icofont-ui-remove text-danger'>Αρση</i></button></td>";
            else{
                echo "<td></td>";
            }
            echo "</tr>";
        }
        
    }
         
    
    mysqli_close($conn);
?>