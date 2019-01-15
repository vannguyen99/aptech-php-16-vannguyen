<?php
    $conn =  new mysqli($severName="localhost", $userName="root", $passWord="",$dbName="vannguyen");

    if ($conn->connect_error){
        die("Connect error: " .$conn->connect_error);
    }
    else echo "Connected successfully";      
    // //create database
    // $sql = "create database vannguyen";
    // if ($conn->query($sql)===TRUE){
    //     echo "Database is successfully";
    // }
    // else echo "Error create database: " .$conn->error;
    //create table
    // $sql1 = "create table vannguyen.roles(
    //     id int primary key auto_increment,
    //     name varchar(50)
    // )";
    // if ($conn->query($sql1)===TRUE){
    //     echo "create table is successfully";
    // }
    // else echo "Error creating table: " .$conn->error;
    // $sql2 = "insert into vannguyen.roles (name) values ('Director'), ('Teacher'), ('Student')";
    //     if ($conn->query($sql2)===TRUE){
    //         echo "New record created successfully!!";
    //     }
    // $sql3 = "create table vannguyen.users(
    //     id int primary key auto_increment,
    //     name varchar(50),
    //     email varchar(50) unique,
    //     role int,
    //     foreign key (role) references roles(id)
    // )";
    // if ($conn->query($sql3)===TRUE){
    //     echo "create table is successfully";
    // }
    // else echo "Error creating table: " .$conn->error;
    // $sql4 = "insert into vannguyen.users (name,email,role) values 
    //     ('nguyen', 'danangst319@gmail.com', 1), 
    //     ('hieu', 'hieutk5@gmail.com', 2), 
    //     ('kien', 'nnkien1999@gmail.com', 3)";
    //     if ($conn->query($sql4)===TRUE){
    //         echo "New record created successfully!!";
    //     }
    $sql5 = "select * from users left join roles on users.role = roles.id";
    $result = $conn->query($sql5);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<br>";
            echo "id: " .$row['id']. " - Name: " .<?php ?>. " -Email: ".$row['email']." - Role: ".$row['role'].'<br>';
        }
    }
    $conn->close();
