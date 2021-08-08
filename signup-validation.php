<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup-Validation</title>
</head>
<body align="center">
    
</body>
</html>

<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    try{
        
        $dsn = "mysql:dbname=login102;host=localhost";
        $un = 'root';
        $pswd = '';
        $conn = new PDO($dsn,$un,$pswd);
        
        //check wheather the username exists in database.
        $conn->query("use login102");
        $q1 = "SELECT * FROM users WHERE username='".$username."'";
        $stmt = $conn->query($q1);
        $result = $stmt->fetch();
        
        if(empty($result)){
            $q2 = "INSERT INTO users(username,password) VALUES('".$username."','".$password."')";
            $conn->query($q2);
            echo "<h1>Account Registered Successfully...! Headup towards login page.</h1><a href='login.php'><button>Login</button></a>";
        }
        else{
            echo "<h1>Username Already Exists...! Try Creating Account With Another Username.</h1><a href='index.php'><button>Sign-Up</button></a>";
        }


    }
    catch(PDOException $e){

        die("Error Connecting: ".$e->getMessage());

    }
?>




<!-- Server: 127.0.0.1

Database: 

Table: users -->