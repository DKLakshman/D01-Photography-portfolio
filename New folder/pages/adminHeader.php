<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin header</title>

    <!-- css link -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg  alg-bg-green">
        <div class="container">
            <a class="navbar-brand alg-bolder alg-text-light" href="#">forcus frame</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav gap-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link header-list  alg-bold alg-text-light" aria-current="page" href="ViewPhotos.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-list alg-bold alg-text-light" href="viewPackage.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-list alg-bold alg-text-light" href="viewBooking.php">Bookings</a>
                    </li>     
                </ul>

            </div>
            <a class="nav-link" href="logout.php">

                <button class="nav-logout-button alg-bg-green alg-rounded-mid border-1 border-light alg-text-light alg-bold">Logout</button>
            </a>
        </div>
    </nav>





    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>