<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body align="center">
    <h1>Logged out Successfully...! Thanks for visiting Our Website.</h1>
    <a href="index.php"><button style="margin:5px">Sign Up</button></a>
    <a href="login.php"><button style="margin:5px">Login</button></a>
</body>
</html>

<?php

    session_start();
    session_destroy();

?>