<?php 
    include 'header.php';
?>

<table class="table_list">
     <thead>
        <tr>
            <th>SI</th>
            <th>Id</th>
            <th>user_id</th>
            <th>project_name</th>
            <th>action</th>
        </tr>
    </thead>

    <tbody>

        <?php 
        //get all information
            $sql = "select * from projects";
            $rowInfo = $connection->query($sql);
            $dep =101;

            while($row = $rowInfo->fetch_assoc()){ 
        ?>

                <tr>
                    <td> <?php echo $dep++ ?></td>
                    <td> <?php echo $row['id'] ?></td>
                    <td> <?php echo $row['user_id'] ?></td>
                    <td> <?php echo $row['project_name'] ?></td>
                    <td>
                        <a href="projects_edit.php? project_id=<?php echo $row['id'] ?>">Edit</a>
                        <a class="delete_user" onclick="confirm('confirm to delete')" href="projects_delete.php? project_id=<?php echo $row['id'] ?>">Delete</a>
                    </td>
                </tr>




        <?php } ?>
    </tbody>
</table>







<?php include 'footer.php'; ?>