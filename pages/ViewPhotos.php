<?php require 'function.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br><br>
    <table border="1" >
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Image</td>
            <td>Description</td>
            <td>Type</td>
            <td>Action</td>
        </tr>
        <?php 
            $users= mysqli_query($conn,"SELECT * FROM photos");
            $i = 1;
            foreach($users as $user):
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $user["title"];?></td>
            <td><img src="../uploads/<?php echo $user["image"];?>" width="200"></td>
            <td><?php echo $user["description"];?></td>
            <td><?php echo $user["type"];?></td>
            <td>
                <a href="editPhotos.php?id=<?php echo $user["id"];?>">Edit</a>
                <form action="function.php" method="POST">
                    <button type="submit" name="submit" value="<?php echo $user['id'];?>">Delete</button>
                </form>
            </td>
        </tr>
        <?php 
            endforeach;
        ?>
    </table>
</body>
</html>