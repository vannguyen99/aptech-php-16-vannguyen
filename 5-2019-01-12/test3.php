<?php
    $severName = "localhost";
    $userName = "root";
    $passWord = "";
    $dbName = "vannguyen";

    $conn = new mysqli($severName, $userName, $passWord, $dbName);
    if ($conn -> connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    // $sql = "create database nguyen123";
    // if ( $conn->query($sql) === TRUE){
    //     echo "Database created successfully";
    // }
    // else echo "Error creating database: " . $conn->error;



    // $sql = "create table myGuests(
    //     id int primary key auto_increment,
    //     firstname varchar(30),
    //     lastname varchar(30),
    //     email varchar(50)
    // )";
    
    // $sql = "insert into myGuests (firstname, lastname, email) values ('John', 'Doe', 'john@exmaple.com')";



    // if ($conn->query($sql)===TRUE){
    //     echo "Table myGuests created successfully";
    // }
    // else echo "Error creating table: " . $conn->error;
    // $conn->close();