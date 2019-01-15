<?php
    function myDB ($severName = "localhost", $usersName = "root", $passWord = "", $dbName = "aptech_php_16_vannguyen") {
        $conn = myDB();
        if ($conn-> connect_error()){
            die ("Connect error: " .$conn-> connect_error());
        }
        else echo $conn;
    }