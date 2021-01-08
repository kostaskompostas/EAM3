<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name ="ypakp";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    mysqli_select_db($conn,$db_name);
    
    
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br>";


    /*
    $sql = "SELECT * FROM users WHERE name='takhs'";
    $result = $conn->query($sql);

    if ($result->num_rows>0){
        while ($row = $result->fetch_assoc()){
            echo "username " .$row['username']."-id: " .$row["id"]."-Name " .$row["name"]."-Surname " .$row["surname"]."-Phone " .$row["phone"]."<br>";
        }
    }else{
        echo "0 results";
    }
    */
    
 ?>