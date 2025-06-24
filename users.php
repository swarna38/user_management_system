<?php 
    include 'header.php';
?>

<table class="table_list">
     <thead>
        <tr>
            <th>SI</th>
            <th>Id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>email</th>
            <th>phone</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        <?php 
        //get all information
            $sql = "select * from users";
            $rowInfo = $connection->query($sql);
            $dep =101;

            while($row = $rowInfo->fetch_assoc()){ 
        ?>

                <tr>
                    <td> <?php echo $dep++ ?></td>
                    <td> <?php echo $row['user_id'] ?></td>
                    <td> <?php echo $row['first_name'] ?></td>
                    <td> <?php echo $row['last_name'] ?></td>
                    <td> <?php echo $row['email'] ?></td>
                    <td> <?php echo $row['phone'] ?></td>
                    <td>
                        <a href="users_edit.php? u_id=<?php echo $row['user_id'] ?>">Edit</a>
                        <a class="delete_user" onclick="confirm('confirm to delete')" href="users_delete.php? u_id=<?php echo $row['user_id'] ?>">Delete</a>
                    </td>
                </tr>




        <?php } ?>
        
    </tbody>
</table>







<?php include 'footer.php'; ?>