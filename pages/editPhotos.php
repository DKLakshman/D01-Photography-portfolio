<?php
require 'function.php';
$id = $_GET["id"];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE id = $id"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        Title :
        <input type="text" name="title" value="<?php echo $user['title'];?>" required><br>
        Image :
        <input type="file" name="file" required><br>

        Description :
        <textarea name="description" id="" cols="30" rows="10"><?php echo $user['description'];?></textarea>

        type :
        <select name="type" id="">
            <?php if ($user['type']=='Wild_Life') {?>
                <option value="Wild_Life">Wild Life</option>
                <option value="Weddings">Weddings</option>
                <option value="Birthday_Parties">Birthday Parties</option>
                <?php } else if($user['type']=='Weddings') {?>
                    <option value="Weddings">Weddings</option>
                    <option value="Wild_Life">Wild Life</option>
                    <option value="Birthday_Parties">Birthday Parties</option>
                    <?php }else{?>
                        <option value="Birthday_Parties">Birthday Parties</option>
                        <option value="Wild_Life">Wild Life</option>
                        <option value="Weddings">Weddings</option>
            <?php }?>
        </select>

        <!-- type :
        <input type="text" name="name" value="<?php echo $user['type'];?>" required><br> -->


        <button type="submit" name="submit" value="edit">Edit</button>
    </form>
</body>

</html>