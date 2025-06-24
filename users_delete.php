<?php 
    include 'header.php';

    $id = $_GET['u_id'];

    $sql = "delete from users where user_id=$id";
    $connection->query($sql);
    echo "successfully delete";
    ?>

    <?php 
        include 'footer.php';
    ?>
