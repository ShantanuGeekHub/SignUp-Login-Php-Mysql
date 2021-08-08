<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Validation</title>
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
            echo "<h1>Haven't Registered Yet. Headup towards sign-up page.</h1><a href='index.php'><button>Sign-Up</button></a>";
        }
        else{
            if($result['password'] == $password){
                session_start();
                $_SESSION['username'] = $username;
                echo "<h1>You've been logged in Successfully...! Headup towards your account.</h1><a href='account.php'><button>My Account</button></a>";
            }
            else{
                echo "<h1>Password Doesn't Match, Please try again...!</h1><a href='login.php'><button>Logink</button></a>";
            }
        }

    }
    catch(PDOException $e){

        die("Error Connecting: ".$e->getMessage());

    }
?>