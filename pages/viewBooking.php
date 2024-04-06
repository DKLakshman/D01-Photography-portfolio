<?php
// config connection with database
$conn = new mysqli("localhost", "root", "", "photography_portfolio");
if ($conn->connect_error) {
    die("Connection error" . $conn->connect_error);
} else {
    if (isset($_POST["submit"])) {
        delete();
    }
}

// this is the delete function for delete bookings
function delete()
{
    global $conn;
    $id = $_POST["submit"];

    $query = "DELETE FROM bookings WHERE id = $id";
    mysqli_query($conn, $query);

    echo "
        <script>alert('delete successfully');document.location.href = 'viewBooking.php'; </script>
        ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pacakges view</title>

    <!-- css link -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require 'adminHeader.php' ?>
    <div class="container pt-3 pb-5">
        <h1 class=" alg-bold text-center">Admin Dashboard</h1>
        <div class="alg-text-h2 text-center pb-4">BOOKINGS</div>
        <table border="0" class="viewPhotos-table-headings alg-bg-light-green">
            <tr class="viewPhotos-table-headings alg-bg-light-green">
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">No</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Email</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Name</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Phone Number</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Package Name</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Package Type</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Location</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">Date</td>
                <td class="p-3 alg-text-h3 alg-bold alg-text-light">status</td>
            </tr>
            <?php
            $bookings = mysqli_query($conn, "SELECT * FROM bookings");
            $i = 1;
            foreach ($bookings as $booking) :
            ?>
                <tr class="alg-bg-lighter-green">
                    <td class="p-3"><?php echo $i++; ?></td>
                    <td class="p-3"><?php echo $booking["email"]; ?></td>
                    <td class="p-3"><?php echo $booking["name"]; ?></td>
                    <td class="p-3"><?php echo $booking["p_number"]; ?></td>
                    <td class="p-3"><?php echo $booking["package_name"]; ?></td>
                    <td class="p-3"><?php echo $booking["package_type"]; ?></td>
                    <td class="p-3"><?php echo $booking["location"]; ?></td>
                    <td class="p-3"><?php echo $booking["date"]; ?></td>
                    <td class="p-3">
                        <form action="" method="POST">
                            <button class="border-0" type="submit" name="submit" value="<?php echo $booking['id']; ?>"><i class="fa-solid fa-trash fa-2xl" style="color: #eb1e0f;"></i></button>
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