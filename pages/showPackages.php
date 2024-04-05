<?php include 'packageFunction.php' ?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- this header becaus require not working -->
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    ?>

    <?php

    if (isset($_SESSION['email'])) { ?>
        <nav class="navbar navbar-expand-lg  alg-bg-green">
            <div class="container">
                <a class="navbar-brand alg-bolder alg-text-light" href="#">Malcolm Lismore Photography</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav gap-5 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link header-list  alg-bold alg-text-light" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-list alg-bold alg-text-light" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-list alg-bold alg-text-light" href="showPackages.php">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-list alg-bold alg-text-light" href="addBooking.php">Contact US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-list alg-bold alg-text-light" href="aboutUs.php">About US</a>
                        </li>
                    </ul>

                </div>
                <a class="nav-link" href="logout.php">
                    <button class="nav-logout-button alg-bg-green alg-rounded-mid border-1 border-light alg-text-light alg-bold">Logout</button>
                </a>
            </div>
        </nav>






    <?php } else {
        require 'headerBefore.php';
    }
    ?>





    <section class="pack-sec1 d-flex flex-column align-items-center pt-5">
        <div class="text-center alg-text-medium alg-bold alg-text-dark pb-5">See the World in a Different Frame</div>
        <div class="pack-sec1-img"></div>
        <div class="pack-sec1-para pt-5 pb-4">
            <div class="text-center alg-text-dark">Malcolm Lismore Photography offers a diverse range of captivating imagery, including wildlife, weddings, pre-shoots, and events. Each photograph expertly captures the essence of its subject, whether it's the beauty of nature, the romance of weddings, the anticipation of pre-shoots, or the energy of events.</div>
        </div>

    </section>

    <section class="pack-sec2 pb-5 pt-4">
        <div class="container d-flex justify-content-center gap-4">
            <div class="pack-se2-card1 d-flex justify-content-center">
                <div><button class="pack-se2-btn">wild Life</button></div>
            </div>
            <div class="pack-se2-card2 d-flex justify-content-center">
                <div><button class="pack-se2-btn">Weddings</button></div>
            </div>
            <div class="pack-se2-card3 d-flex justify-content-center">
                <div><button class="pack-se2-btn">Pre Shoots</button></div>
            </div>
            <div class="pack-se2-card4 d-flex justify-content-center">
                <div><button class="pack-se2-btn">Events</button></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="text-center alg-text-medium alg-text-dark alg-bold pb-4">PRICES</div>
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
    </section>
    <section class="footer alg-bg-green d-flex justify-content-between align-items-center">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="alg-text-p alg-text-light">
                <h5>Conatct Us</h5>
                <div class="">0094 72 8571 968</div>
                <div>focusframe@sltnet.lk</div>
            </div>
            <div class="alg-text-p alg-text-light">
                <div>Copyright © 2024 · Focus Frame</div>
            </div>
            <div class="d-flex alg-text-light">
                <div style="width: 40px; font-size:25px;"><i class="bi bi-facebook"></i></div>
                <div style="width: 40px; font-size:25px;"><i class="bi bi-instagram"></i></div>
                <div style="width: 40px; font-size:25px;"><i class="bi bi-whatsapp"></i></div>
                <div style="width: 40px; font-size:25px;"><i class="bi bi-twitter"></i></div>
            </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/79961d807c.js" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>