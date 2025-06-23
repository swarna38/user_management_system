<?php 
//connect file
include 'connection.php';

//db create

//if database already exists then this database drop
$sql = "drop database if exists user_management_system";
$connection->query($sql);

//if no database then create database 
$sql = "create database if not exists user_management_system";
$connection->query($sql);
echo "database create \n";

// select database which database we work
$connection->select_db('user_management_system');

$sql = "CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(15) NOT NULL,
    address VARCHAR(100) NOT NULL)";

$connection->query($sql);
echo "table is create ";    


 



