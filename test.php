<?php
    //session_start();
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <label><b>Username</b></label><br>
        <input name="username" type="text" placeholder="type your username" required/><br>
        <label><b>name</b></label><br>
        <input name="name" type="text" placeholder="type your name" required/><br>
        <label><b>surname</b></label><br>
        <input name="surname" type="text" placeholder="type your surname" required/><br>
        <label><b>Phone</b></label><br>
        <input name="phone" type="number" placeholder="type your phone" required/><br>
        
        <label><b>password</b></label><br>
        <input name="password" type="password" placeholder="type your password" required/>
        <input name="conf_password" type="password" placeholder="confirm your password"required/>
        <input name="submit_btn" type="submit" value="sign up"/>
    </form>

</body>
</html>


<!--
things to put back in the page
<?php
        if (isset($_POST['submit_btn'])){
            $username = $_POST['username'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $password = $_POST['password'];
            $conf_password = $_POST['conf_password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $afm = $_POST['afm'];
            $type = 0;
            $id=9;
            $companyName = $_POST['companyName'];


            if($password == $conf_password){
                //add a new row to the table
                $query = "INSERT INTO users VALUES('$username','$name','$surname','$password','$email','$phone','$afm','$type','$id','$companyName')";
                $query_run = mysqli_query($conn,$query);

                if ($query_run){
                    echo "query executed successfuly!";
                }else {
                    echo "query failed";
                }

            }else{
                echo "password confirmation is not the same as password";
            }
        }else{
            echo "empty<br>";
        }
    ?>
-->