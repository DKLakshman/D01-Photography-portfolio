<?php include 'loginRegisterFunction.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">

        Email Address :
        <input type="email" name="email" required><br><br>

        Password :
        <input type="password" name="password" required><br><br>

        <input type="radio" name="type" value="customer" required>Customer
        <input type="radio" name="type" value="admin" required>Admin <br><br>

        <button type="submit" name="submit" value="login">Login</button>
    </form>
</body>

</html>