<?php
require 'packageFunction.php';
$id = $_GET["id"];
$package = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM packages WHERE id = $id"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">

        Package Type :
        <select name="type" id="">
            <?php if ($package['package_type'] == 'Wild_Life') { ?>
                <option value="Wild_Life">Wild Life</option>
                <option value="Weddings">Weddings</option>
                <option value="Birthday_Parties">Birthday Parties</option>
            <?php } else if ($package['package_type'] == 'Weddings') { ?>
                <option value="Weddings">Weddings</option>
                <option value="Wild_Life">Wild Life</option>
                <option value="Birthday_Parties">Birthday Parties</option>
            <?php } else { ?>
                <option value="Birthday_Parties">Birthday Parties</option>
                <option value="Wild_Life">Wild Life</option>
                <option value="Weddings">Weddings</option>
            <?php } ?>
        </select><br><br>

        Package Name :
        <select name="name" id="">
            <?php if ($package['package_name'] == 'Brozne') { ?>
                <option value="Brozne">Brozne</option>
                <option value="Premium">Premium</option>
                <option value="Gold">Gold</option>
            <?php } else if ($package['package_name'] == 'Gold') { ?>
                <option value="Gold">Gold</option>
                <option value="Premium">Premium</option>
                <option value="Brozne">Brozne</option>
            <?php } else { ?>
                <option value="Premium">Premium</option>
                <option value="Brozne">Brozne</option>
                <option value="Gold">Gold</option>
            <?php } ?>
        </select><br><br>

        Package Description :
        <textarea name="package_description" id="" cols="30" rows="10"><?php echo $package['package_description']; ?></textarea> <br><br>

        price :
        <input type="text" name="price" value="<?php echo $package['price']; ?>" required><br>

        <button type="submit" name="submit" value="edit">Edit</button>
    </form>
</body>

</html>