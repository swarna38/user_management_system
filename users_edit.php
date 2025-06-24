<?php 
    include 'header.php';

    //receive id from departments
    $id = $_GET['u_id'];

    $sql = "update users set first_name='jony' where user_id=$id";
    $connection->query($sql);
    echo "successfully edit";
?>


<?php
    include 'footer.php';
?>
