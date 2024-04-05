<?php
$conn = new mysqli("localhost", "root", "", "photography_portfolio");
if ($conn->connect_error) {
    die("Connection error" . $conn->connect_error);
} else {
    if (isset($_POST["submit"])) {
        addbooking();
    }
}

function addbooking()
{
    global $conn;

    $email = $_POST["email"];
    $name = $_POST["name"];
    $number = $_POST["number"];
    $package_name = $_POST["pname"];
    $package_type = $_POST["ptype"];
    $location = $_POST["location"];
    $date = $_POST["date"];

    $query = "INSERT INTO bookings VALUES('','$email','$name','$number','$package_name','$package_type','$location','$date')";
    mysqli_query($conn, $query);

    echo "<script> alert('Booking place Successfully'); document.location.href = 'index.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us page</title>

    <!-- css link -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require 'header.php' ?>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="alg-text-dark alg-text-medium text-center alg-bold pb-5">Ready to capture your special moments?</div>
            <div class="d-flex justify-content-center">
                <!-- left section -->
                <div class="con-sec1-left d-flex flex-column gap-3">
                    <!-- image section -->
                    <div>
                        <img class="con-sec1-image" src="../resources/contactUs/con1.png" alt="">
                    </div>
                    <div class="p-3  alg-text-dark">Book your event now and let's turn your visions into timeless memories. Don't let those fleeting moments slip away - secure your date and let's create something unforgettable together!</div>
                </div>
                <!-- right section -->
                <div class="con-sec1-right d-flex justify-content-center alg-shadow">
                    <form class="p-3" method="POST" enctype="multipart/form-data">
                        <div class=" alg-text-dark alg-bold">Email</div>
                        <input class="con-input border-1" type="email" name="email" required>

                        <div class=" alg-text-dark alg-bold pt-3">Name</div>
                        <input class="con-input border-1" type="name" name="name" required>

                        <div class=" alg-text-dark alg-bold pt-3">Phone number</div>
                        <input class="con-input border-1" type="number" name="number" required>

                        <div class=" alg-text-dark alg-bold pt-3">Package name</div>
                        <select class="con-input border-1" name="pname" id="">
                            <option value="Brozne">Budget</option>
                            <option value="Gold">Medium</option>
                            <option value="Premium">Premium</option>
                        </select><br><br>


                        <div class=" alg-text-dark alg-bold pt-3">Package Type</div>
                        <select class="con-input border-1" name="ptype" id="">
                            <option value="Wild_Life">Wild Life</option>
                            <option value="Weddings">Weddings</option>
                            <option value="Pre_Shoots">Pre Shoots</option>
                            <option value="Events">Events</option>
                        </select>

                        <div class=" alg-text-dark alg-bold pt-3">Location :</div>
                        <textarea name="location" id="" cols="34" rows="4" required></textarea>

                        <div class="d-flex gap-4 pt-3">
                            <div>
                                <div class=" alg-text-dark alg-bold">Date</div>
                                <input style="width: 150px;height: 30px;" class=" alg-shadow border-1" type="date" name="date" required>
                            </div>
                            <div class="h-100 d-flex align-items-center">
                                <button class="con-btn" type="submit" name="submit" value="addBookings">Book</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php' ?>
</body>

</html>