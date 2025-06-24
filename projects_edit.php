<?php 
    include 'header.php';
    $id = $_GET['project_id'];

    $sql = "update projects set project_name='E-commerce website' where id=$id";
    $connection->query($sql);
    echo "successfully edit";
?>


<?php 
        include 'footer.php';
?>