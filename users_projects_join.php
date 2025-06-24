<?php 
    include 'header.php';

?>

<table class="table_list">
    <thead>
        <tr>
            <th>SI</th>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Project Name</th>
        </tr>
    </thead>

    <tbody>

        <h2>Inner Join Users with Projects</h2>
        <?php

            $sql = "
            select users.user_id, users.first_name, users.last_name, projects.project_name
            from users join projects
            on users.user_id=projects.user_id;
            
            ";

            $rowinfo = $connection->query($sql);

            $dep = 101;
            while($row = $rowinfo->fetch_assoc()){
        ?>

        <tr>
            <td><?php echo $dep++ ?></td>
            <td><?php echo $row['user_id'] ?></td>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['last_name'] ?></td>
            <td><?php echo $row['project_name'] ?></td>
        </tr>

        <?php } ?>
    </tbody>
</table>

<?php 
    include 'footer.php';
?>    