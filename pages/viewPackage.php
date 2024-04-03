<?php require 'packageFunction.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pacakges view</title>
</head>
<body><br><br><br>
    <table border="1" >
        <tr>
            <td>No</td>
            <td>Package Type</td>
            <td>Package Name</td>
            <td>Package Description</td>
            <td>price</td>
            <td>Action</td>
        </tr>
        <?php 
            $packages= mysqli_query($conn,"SELECT * FROM packages");
            $i = 1;
            foreach($packages as $package):
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $package["package_type"];?></td>
            <td><?php echo $package["package_name"];?></td>
            <td><?php echo $package["package_description"];?></td>
            <td><?php echo $package["price"];?></td>
            <td>
                <a href="editPackage.php?id=<?php echo $package["id"];?>">Edit</a>
                <form action="" method="POST">
                    <button type="submit" name="submit" value="<?php echo $package['id'];?>">Delete</button>
                </form>
            </td>
        </tr>
        <?php 
            endforeach;
        ?>
    </table>
</body>
</html>