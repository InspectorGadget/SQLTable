<?php

if(!empty($_POST['username'])) {
    $pw = $_POST['password'];
    $username = $_POST['username'];
    $db = $_POST['db'];
    $host = $_POST['host'];
    header('Location: http://localhost?username=$username&password=$pw&db=$db&host=$host');
}

?>

<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            SQL DataBase Configuration
        </title>
        <style>
            
            body {
                text-align: center;
                margin: 30px auto;
                padding: 40px;
                max-width: 700px;
                box-shadow: 0 0 45px black;
            }
            
            input[type=text], input[type=password], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            
            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            
            input[type=text]:focus {
                background-color: lightblue;
            }
            
            input[type=password]:focus {
                background-color: lightblue;
            }
            
        </style>
        <script>
            
            window.alert('Make sure that you fill up all information here!');
            
        </script>
    </head>
    <body>
        
        <h1>
            Page is under Development!
        </h1>
        
        <form method="POST">
            <h3> DB Host: </h3>
            <input type="text" name="host" placeholder="Enter your DataBase Hostname">
            <br>
            <h3> DB Username: </h3>
            <input type="password" name="username" placeholder="Enter your DataBase Username">
            <br>
            <h3> DB Password: </h3>
            <input type="text" name="password" placeholder="Enter your DataBase Password">
            <br>
            <h3> DB Name </h3>
            <input type="text" name="db" placeholder="Enter your DataBase Name">
            <br>
            <input type="submit" value="Submit">
        </form>
        
    </body>
</html>