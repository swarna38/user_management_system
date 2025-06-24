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

$sql = "CREATE TABLE users (user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(15) NOT NULL,
    address VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

$connection->query($sql);
echo "user table is create\n";   



$sql = "CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    project_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users (user_id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
    
)";
$connection->query($sql);
echo "projects table create \n";


 
    



 



