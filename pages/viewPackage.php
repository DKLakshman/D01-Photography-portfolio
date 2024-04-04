<?php require 'packageFunction.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pacakges view</title>
</head>

<body>
    <?php require 'adminHeader.php' ?>
    <div class="container">
        <div class="container pt-4">
            <h1 class=" alg-bold text-center">Admin Dashboard</h1>
            <div class="alg-text-h2 text-center">PACKAGES</div>
            <div class="w-100 d-flex justify-content-end pb-2">
                <a href="addPackage.php"><button class="viewPhotos-add-button alg-shadow p-2 border-0 alg-bg-dark-green alg-text-light alg-bold rounded-1">Add Package</button></a>
            </div>
            <table border="0" class="viewPackages-table">
                <tr class="viewPackages-table-headings alg-bg-light-green">
                    <td class="p-3 alg-text-h3 alg-bold alg-text-light">No</td>
                    <td class="p-3 alg-text-h3 alg-bold alg-text-light">Image</td>
                    <td class="p-3 alg-text-h3 alg-bold alg-text-light">Package Name</td>
                    <td class="p-3 alg-text-h3 alg-bold alg-text-light">Image Count</td>
                    <td class="p-3 alg-text-h3 alg-bold alg-text-light">Hours</td>
                    <td class="p-3 alg-text-h3 alg-bold alg-text-light">Package Type</td>
                    <td class="p-3 alg-text-h3 alg-bold alg-text-light">price</td>
                    <td class="p-3 alg-text-h3 alg-bold alg-text-light">Action</td>
                </tr>
                <?php
                $packages = mysqli_query($conn, "SELECT * FROM packages");
                $i = 1;
                foreach ($packages as $package) :
                ?>
                    <tr class="viewPackages-table-headings alg-bg-lighter-green">
                        <td class="p-3"><?php echo $i++; ?></td>
                        <td class="p-3"><img src="../uploads/<?php echo $package["image"]; ?>" width="200"></td>
                        <td class="p-3"><?php echo $package["package_name"]; ?></td>
                        <td class="p-3"><?php echo $package["img_count"]; ?></td>
                        <td class="p-3"><?php echo $package["hours"]; ?></td>
                        <td class="p-3"><?php echo $package["package_type"]; ?></td>
                        <td class="p-3"><?php echo $package["price"]; ?></td>
                        <td class="d-flex align-items-center h-100 p-3 gap-3">
                            <a href="editPackage.php?id=<?php echo $package["id"]; ?>"><i class="fa-solid fa-pen-to-square fa-2xl" style="color: #2cdb29;"></i></a>
                            <form action="" method="POST">
                                <button class="border-0" type="submit" name="submit" value="<?php echo $package['id']; ?>"><i class="fa-solid fa-trash fa-2xl" style="color: #eb1e0f;"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </table>
        </div>
    </div>
    <?php require 'footer.php' ?>
    <script src="https://kit.fontawesome.com/79961d807c.js" crossorigin="anonymous"></script>
</body>

</html>