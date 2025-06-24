<?php 
    include 'header.php';
    $id = $_GET['project_id'];

    $sql = "delete from projects where id=$id";
    $connection->query($sql);
    echo "successfully delete";
?>


<?php 
        include 'footer.php';
?>