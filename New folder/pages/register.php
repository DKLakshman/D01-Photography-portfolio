<?php include 'loginRegisterFunction.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <!-- css link -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php require 'headerBefore.php' ?>
<section class="pt-5 pb-5">
    <div class="container d-flex justify-content-center ">
        <!-- image div -->
        <div class="reg-left">
            <img class="reg-image" src="../resources/register/registerImg.png" alt="">
        </div>
        <div class="reg-right alg-bg-green">
            <div class="alg-text-h2 alg-text-light text-center alg-bold pt-3">Register Here</div>
            <div class="p-3 d-flex flex-column align-items-center">

                <form action="" method="POST" enctype="multipart/form-data">
                    
                    <div class="d-flex gap-2">
                            <div>
                                <div class="alg-text-light">Email Address</div>
                                <input class="reg-input" type="email" name="email" required>
                            </div>

                            <div>
                                <div class="alg-text-light">Full Name</div>
                                <input class="reg-input" type="text" name="name" required>
                            </div>
                        </div>
                        
                        <div class="alg-text-light pt-3">Address :</div>
                        <textarea style="color:white;" class="reg-input" name="address" id="" cols="48" rows="4"></textarea>
                        
                        <div class="alg-text-light pt-3">Phone number</div>
                        <input class="reg-input" type="number" name="number" required>
                        
                        <div class="d-flex justify-content-center gap-2 pb-3 pt-3">
                            <div>
                                <div class="alg-text-light">Password</div>
                                <input class="reg-input" type="password" name="password" required>
                            </div>
                            
                            
                            <div>
                                <div class="alg-text-light">Confirm Password</div>
                                <input class="reg-input" type="password" name="cnPassword" required>
                            </div>
                        </div>

                        <input type="radio" name="type" value="customer" required> <label class="alg-text-light">Customer</label>
                        <input type="radio" name="type" value="admin" required><label class="alg-text-light" for="">Admin </label>
                        <div class="d-flex justify-content-center pt-3">
                            <button class="login-btn" type="submit" name="submit" value="register">Register</button>
                        </div>
                        
                        <div class="text-center pt-3 pb-3 alg-text-light alg-text-p">If you already have an account,
                        </div>
                        <div>
                            <a href="login.php" class="login-link nav-link alg-text-light alg-text-p text-center alg-bold">Login here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php require 'footer.php' ?>
</body>

</html>