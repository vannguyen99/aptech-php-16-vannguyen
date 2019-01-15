<?php
    function connDB($severName = "localhost", $userName = "root", $passWord = ""){
        $conn =  new mysqli($severName, $userName, $passWord);

        if (!$conn){
            die("Connect error: " . mysqli_connect_error());
        }
        else echo "Connected successfully";
    }
    