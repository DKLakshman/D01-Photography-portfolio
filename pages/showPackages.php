<?php require 'packageFunction.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>packages view</title>

    <!-- css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <br><br><br>
    <?include 'header.php'?>

    <div class="container">
        <div class="row">
            <?php
            $packages = mysqli_query($conn, "SELECT * FROM packages");
            foreach ($packages as $package) :
            ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="../uploads/<?php echo $package["image"]; ?>" style="" alt="Package Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $package["package_name"]; ?></h5>
                            <p class="card-text">Image Count: <?php echo $package["img_count"]; ?></p>
                            <p class="card-text">Hours: <?php echo $package["hours"]; ?></p>
                            <p class="card-text">Package Type: <?php echo $package["package_type"]; ?></p>
                            <p class="card-text">Price: <?php echo $package["price"]; ?></p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</body>

</html>
