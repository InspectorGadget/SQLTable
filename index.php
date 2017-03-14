<?php

// SQL

$username = $_GET['username'];
$password = $_GET['password'];
$db = $_GET['db'];
$host = $_GET['host'];

echo print_r($host);

if(empty($host)) {
    header('Location: http://localhost/hostname.php');
}
else {

    $con = new mysqli($host, $username, $password, $db);

        if($con->connect_error) {
            die("Connection Error!");
        }
        else {
            echo 'Connected to your DataBase!';
        }
    
}
        
?>