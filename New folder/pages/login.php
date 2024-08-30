<?php include 'loginRegisterFunction.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- css link -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require 'headerBefore.php' ?>

    <section class="pt-5 pb-5">
        <div class="d-flex justify-content-center gap">
            <div class="login-left alg-bg-green">
                <div class="text-center alg-text-light alg-text-h2 alg-bold pt-3">Login Here</div>
                <div class="d-flex flex-column align-items-center pt-4 ">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="alg-text-light">Email Address</div>
                        <input class="login-input border-1" type="email" name="email" required><br><br>

                        <div class="alg-text-light">Password</div>
                        <input class="login-input border-1" type="password" name="password" required><br><br>
                        <input class="" style="margin-left: 125px;" type="radio" name="type" value="customer" required> <label for="" class="alg-text-light">Customer</label>
                        <input class="" type="radio" name="type" value="admin" required><label for="" class="alg-text-light">Admin</label>
                        <div class="text-center pt-3 pb-3 alg-text-light alg-text-p">Forgot password ?</div>
                        <div class="d-flex justify-content-center">
                            <button class="login-btn" type="submit" name="submit" value="login">Login</button>
                        </div>
                        <div class="text-center pt-3 pb-3 alg-text-light alg-text-p">If you don’t have an account yet.
                            Join us and start your journey</div>
                        <div>
                            <a href="register.php" class="login-link nav-link alg-text-light alg-text-p text-center alg-bold">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
            <!--right image -->
            <div class="login-right">
                <img src="../resources/login/loginImg.png" alt="">
            </div>
        </div>
    </section>
    <?php require 'footer.php' ?>
</body>

</html>