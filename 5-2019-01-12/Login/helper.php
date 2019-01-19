<?php
    $severName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "manager";
    function checkConn($severName, $userName, $password){
        $conn = checkConn("localhost", "root", "");
        if ($conn->connect_error)
            echo "Connect fail: " .$conn->connect_error;
        return $conn;
    }