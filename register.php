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
    <form action="register.php" method="post">
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