<?php require 'packageFunction.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pacakges view</title>
</head>
<body><br><br><br>
    <table border="1" >
        <tr>
            <td>No</td>
            <td>Email</td>
            <td>Name</td>
            <td>Phone Number</td>
            <td>Package Name</td>
            <td>Package Type</td>
            <td>Location</td>
            <td>Date</td>
        </tr>
        <?php 
            $bookings= mysqli_query($conn,"SELECT * FROM bookings");
            $i = 1;
            foreach($bookings as $booking):
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $booking["email"];?></td>
            <td><?php echo $booking["name"];?></td>
            <td><?php echo $booking["package_name"];?></td>
            <td><?php echo $booking["package_type"];?></td>
            <td><?php echo $booking["location"];?></td>
            <td><?php echo $booking["date"];?></td>
        </tr>
        <?php 
            endforeach;
        ?>
    </table>
</body>
</html>
