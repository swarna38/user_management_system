<?php session_start();
    include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        .table_list{
            width: 90%;
            border : 1px solid black;
            border-collapse: collapse;
            margin: 0 auto;
        }
        .table_list tr th, .table_list tbody tr td{
            padding: 5px;
            border : 1px solid black;
            text-align: center;
        }
        .table_list tbody tr td a{
            margin : 0px 10px;
        }
        tr th{
            font-size: 20px;
            font-weight: bold;
            text-transform: capitalize;
        }

        td a{
            text-decoration: none;
            padding :3px 12px;
            background-color: chocolate;
            border-radius: 10px;
            color: white;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 400;
        }
        .delete_user{
            background-color: red;
        }
        h2{
            text-align: center;
        }
         
    </style>
</head>
<body>
    
 