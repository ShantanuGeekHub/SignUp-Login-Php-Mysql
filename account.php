<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
</head>
<body align='center'>
    
</body>
</html>

<?php

    session_start();

    if(empty($_SESSION['username'])){
        echo "<h1>You need to be logged in, in order to access this page.</h1><a href='login.php'><button>Login</button></a>";
    }
    else{
        $username = $_SESSION['username'];

        echo "<h1>My Account</h1>
        <h2>Welcome <span style='color:deepskyblue'>$username</span>, Have a nice day...!</h2>
        <a href='logout.php'><button>Logout</button></a>";
    }
    
?>
