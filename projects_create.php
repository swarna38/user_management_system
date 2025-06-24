<?php
    include 'connection.php';

    $sql= "insert into projects (user_id, project_name) VALUES 
    (2, 'E-commerce Development')";
    $connection->query($sql);

    echo "successfully created";
?>

<?php session_start();
    include 'footer.php';
?>