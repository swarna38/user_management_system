<?php 
include 'connection.php';

//select database which database we work
$connection->select_db('user_management_system');

$sql = "INSERT INTO users (first_name, last_name, email, phone, address) VALUES
('John', 'Doe', 'john.doe@example.com', '1234567890', '123 Elm Street'),
('Jane', 'Smith', 'jane.smith@example.com', '0987654321', '456 Oak Avenue'),
('Alice', 'Johnson', 'alice.j@example.com', '1122334455', '789 Pine Road'),
('Bob', 'Brown', 'bob.b@example.com', '2233445566', '321 Maple Lane'),
('Charlie', 'Williams', 'charlie.w@example.com', '3344556677', '654 Birch Way'),
('David', 'Jones', 'david.j@example.com', '4455667788', '987 Cherry Blvd'),
('Emily', 'Davis', 'emily.d@example.com', '5566778899', '246 Spruce Path'),
('Frank', 'Clark', 'frank.c@example.com', '6677889900', '369 Willow Drive'),
('Grace', 'Lewis', 'grace.l@example.com', '7788990011', '159 Poplar Lane'),
('Hannah', 'Hall', 'hannah.h@example.com', '8899001122', '753 Cedar Trail');
";

$connection->query($sql);


$sql = "INSERT INTO projects (project_name) VALUES 
('Website Development'),
('Mobile App Design'),
('graphics Design'),
('Data Analysis'),
('Marketing Campaign')";

$connection->query($sql);
echo "successfully data insert";
