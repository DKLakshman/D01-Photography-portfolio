<?php require 'function.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <!-- css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">

    <style>
        /* Override default border radius */
        .card img {
            border-radius: 0; /* Set border radius to 0 to make photo corners square */
        }
    </style>
</head>

<body>
    <?php require 'header.php'; ?>
    <br><br>

    <div class="container">
        <div class="row">
            <?php
            // show images and data using a foreach loop.
            $users = mysqli_query($conn, "SELECT * FROM photos");
            foreach ($users as $user) :
            ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img class="" src="../uploads/<?php echo $user["image"]; ?>" alt="photos Image" style="height:400px;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h5 class="card-title alg-text-h2"><?php echo $user["title"]; ?></h5>
                            <p class="card-text "><?php echo $user["description"]; ?></p>
                            <p class="card-text"><?php echo $user["type"]; ?></p>
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