<?php

    function fetchHistory($rows){
        $today = date("Y-m-d");
        foreach ($rows as $row) {
            $start = $row['start'];
            $start = date('d-m-Y', strtotime($start));

            $end = $row['end'];
            $isOld=false;
            if ($end<=$today){
                $isOld=true;
            }
            $end = date('d-m-Y', strtotime($end));
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
            if ($canModify && !$isOld)	
                echo "<td><h4><i class='center-text icofont-close text-danger' onclick='delete_this(event)'  onmouseover=''' style='cursor: pointer;'>Διαγραφή</i></h4></td>";
            else{
                echo "<td></td>";
            }
            echo "</tr>";
        }

    }
?>