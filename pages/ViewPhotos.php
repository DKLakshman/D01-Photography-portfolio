<?php require 'function.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- css link -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
<?php require 'adminHeader.php'?>
    <div class="container pt-4">
        <h1 class=" alg-bold text-center">Admin Dashboard</h1>
        <div class="alg-text-h2 text-center">GALLERY</div>
        <div class="w-100 d-flex justify-content-end pb-2">
            <a href="addPhotos.php"><button class="viewPhotos-add-button alg-shadow p-2 border-0 alg-bg-dark-green alg-text-light alg-bold rounded-1">Add photograph</button></a>
        </div>
        <table border="0" class="viewPhotos-table">
            <tr class="viewPhotos-table-headings alg-bg-light-green">
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">No</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Title</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Image</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Description</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Type</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Action</td>
            </tr>
            <?php
            $users = mysqli_query($conn, "SELECT * FROM photos");
            $i = 1;
            foreach ($users as $user) :
            ?>
                <tr class="alg-bg-lighter-green">
                    <td class="p-3"><?php echo $i++; ?></td>
                    <td class="p-3"><?php echo $user["title"]; ?></td>
                    <td class="p-3"><img src="../uploads/<?php echo $user["image"]; ?>" width="200"></td>
                    <td class="p-3"><?php echo $user["description"]; ?></td>
                    <td class="p-3"><?php echo $user["type"]; ?></td>
                    <td class="d-flex align-items-center h-100 p-3 gap-3">
                        <a href="editPhotos.php?id=<?php echo $user["id"]; ?>"><i class="fa-solid fa-pen-to-square fa-2xl" style="color: #2cdb29;"></i></a>
                        <form action="function.php" method="POST">
                            <button class="border-0" type="submit" name="submit" value="<?php echo $user['id']; ?>"><i class="fa-solid fa-trash fa-2xl" style="color: #eb1e0f;"></i></button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
    </div>
    <?php require 'footer.php' ?>
    <script src="https://kit.fontawesome.com/79961d807c.js" crossorigin="anonymous"></script>
</body>

</html>