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

    echo "<script> alert('Booking place Successfully'); document.location.href = '../index.php'; </script>";
}
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
        email :
        <input type="email" name="email" required><br>

        Name :
        <input type="name" name="name" required><br>

        Phone number :
        <input type="number" name="number" required><br>

        Package name :
        <select name="pname" id="">
            <option value="Brozne">Brozne</option>
            <option value="Gold">Gold</option>
            <option value="Premium">Premium</option>
        </select><br><br>


        Package Type :
        <select name="ptype" id="">
            <option value="Wild_Life">Wild Life</option>
            <option value="Weddings">Weddings</option>
            <option value="Birthday_Parties">Birthday Parties</option>
        </select><br><br>

        <label>Location :</label>
        <textarea name="location" id="" cols="30" rows="10" required></textarea><br><br>

        Date :
        <input type="date" name="date" required><br>

        <button type="submit" name="submit" value="addBookings">Book</button>
    </form>
</body>

</html>