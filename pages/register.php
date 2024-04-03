<?php include 'loginRegisterFunction.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">

        Email Address :
        <input type="email" name="email" required><br><br>

        Full Name :
        <input type="text" name="name" required><br><br>

        <label>Address :</label>
        <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>

        Phone number :
        <input type="number" name="number" required><br><br>

        Password :
        <input type="password" name="password" required><br><br>
        Confirm Password :
        <input type="password" name="cnPassword" required><br><br>

        <input type="radio" name="type" value="customer" required>Customer
        <input type="radio" name="type" value="admin" required>Admin <br><br>

        <button type="submit" name="submit" value="register">Register</button>
    </form>
</body>

</html>