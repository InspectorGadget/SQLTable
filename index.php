<?php

// SQL

$host = '';
$username = 'root';
$password = '';
$db = 'TestPanel';

if($host === '') {
    echo 'Please set your HOSTNAME!';
    return true;
}

$con = new mysqli($host, $username, $password, $db);

    if($con->connect_error) {
        die("Connection Error!");
    }
    else {
        echo 'Worked!';
    }
        
?>