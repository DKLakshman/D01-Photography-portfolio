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
    <?php require 'adminHeader.php' ?>

    <section class="pb-4">
        <div class=" container d-flex flex-column align-items-center w-100">
            <div class="pt-4">
                <h1 class=" alg-bold text-center">Admin Dashboard</h1>
            </div>
            <div class="alg-text-h2 text-center pb-4">EDIT PACKAGE</div>
            <div class="addPackage-form alg-bg-light-green rounded-2">

                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="input-labels alg-text-h3 alg-bold pt-3 alg-text-light">Image</div>
                    <input style="margin-left: 100px;" type="file" name="file" required><br><br>


                    <div class="input-labels alg-text-h3 alg-bold alg-text-light">Package name </div>
                    <select class="input-field" name="name" id="">
                        <?php if ($package['package_name'] == 'Budget') { ?>
                            <option value="Budget">Budget</option>
                            <option value="Premium">Premium</option>
                            <option value="Medium">Medium</option>
                        <?php } else if ($package['package_name'] == 'Medium') { ?>
                            <option value="Medium">Medium</option>
                            <option value="Premium">Premium</option>
                            <option value="Budget">Budget</option>
                        <?php } else { ?>
                            <option value="Premium">Premium</option>
                            <option value="Budget">Budget</option>
                            <option value="Medium">Medium</option>
                        <?php } ?>
                    </select><br><br>

                    <div class="input-labels alg-text-h3 alg-bold alg-text-light">Image Count</div>
                    <input class="input-field" type="text" name="imgCount" value="<?php echo $package['img_count']; ?>" required><br>

                    <div class="input-labels alg-text-h3 alg-bold pt-4 alg-text-light">Hours</div>
                    <input class="input-field" type="text" name="hours" value="<?php echo $package['hours']; ?>" required><br>

                    <div class="input-labels alg-text-h3 alg-bold pt-4 alg-text-light">Package Type</div>
                    <select class="input-field" name="type" id="">
                        <?php if ($package['package_type'] == 'Wild_Life') { ?>
                            <option value="Wild_Life">Wild Life</option>
                            <option value="Weddings">Weddings</option>
                            <option value="Pre_Shoots">Pre Shoots</option>
                            <option value="Events">Events</option>
                        <?php } else if ($package['package_type'] == 'Weddings') { ?>
                            <option value="Weddings">Weddings</option>
                            <option value="Wild_Life">Wild Life</option>
                            <option value="Pre_Shoots">Pre Shoots</option>
                            <option value="Events">Events</option>
                        <?php } else if ($package['package_type'] == 'Pre_Shoots') { ?>
                            <option value="Pre_Shoots">Pre Shoots</option>
                            <option value="Wild_Life">Wild Life</option>
                            <option value="Weddings">Weddings</option>
                            <option value="Events">Events</option>
                        <?php } else { ?>
                            <option value="Events">Events</option>
                            <option value="Pre_Shoots">Pre Shoots</option>
                            <option value="Wild_Life">Wild Life</option>
                            <option value="Weddings">Weddings</option>
                        <?php } ?>
                    </select><br><br>

                    <div class="input-labels alg-text-h3 alg-bold pt-4 alg-text-light">Package Price</div>
                    <input class="input-field" type="text" name="price" value="<?php echo $package['price']; ?>" required><br>

                    <div class="d-flex justify-content-center pt-4">
                        <button class="addPhotos-btn alg-bg-dark-green alg-text-light alg-bold rounded-1 border-1 border-light" type="submit" name="submit" value="edit">edit</button>
                    </div>
                    <!-- <button type="submit" name="submit" value="edit">Edit</button> -->

                </form>
            </div>

        </div>
    </section>

    <?php require 'footer.php' ?>
</body>

</html>