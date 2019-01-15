<?php
    $severName = "localhost";
    $userName = "root";
    $passWordDB = "";
    function checkConn($severName, $userName, $passWordDB){
        $conn = myDB();
        if ($conn->connect_error){
            die ("Connect error: " . $conn->connect_error);
        }
        else {
            echo "Connect successfully".'<br>';
            return $conn;
        }
    }
    function creatDB(){
        $conn = checkConn();
        $sql = "create database manager";
        if ($conn->query($sql)){
            echo "Database is create";
        }
        else echo "Error creating database: " .$conn->error;
    } 
    $dbName = "manager";
    function createTable($severName, $userName, $passWordDB, $dbName){
        $conn = checkConn();
        $sql1 = "create table users(
            id int primary key auto_increment,
            email varchar(50) unique,
            password varchar(50)
        )";
        if ($conn->query($sql1)){
            echo "Create table successfully";
        }
        else echo "Error creating table: " .$conn->error;
    }
    function insertTable($severName, $userName, $passWordDB, $dbName){
        $conn = checkConn();
        $sql2 = "insert into users(email,password) values('danangst319@gmail.com', 'nguyen123')";
        if ($conn->query($sql2)){
            echo "Record is successfully";
        }else echo "Error record: " .$conn->error;
    }
?>