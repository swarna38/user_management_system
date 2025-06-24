<?php 
    include 'header.php';

    $sql = "insert into users (first_name, last_name, email, phone, address) VALUES
    ('swarna', 'sd', 'swarnasd@example.com', '1437563890', '123 Elm Street')";

    $connection->query($sql);
    echo "successfully created";
?>

<?php 
        include 'footer.php';
?>