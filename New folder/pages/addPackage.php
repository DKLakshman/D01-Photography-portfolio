<?php require 'packageFunction.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Package</title>
</head>

<body>
    <?php require 'adminHeader.php' ?>
    <section class="pb-4">
        <div class=" container d-flex flex-column align-items-center w-100">
            <div class="pt-4">
                <h1 class=" alg-bold text-center">Admin Dashboard</h1>
            </div>
            <div class="alg-text-h2 text-center pb-4">ADD PACKAGE</div>
            <div class="addPackage-form alg-bg-light-green rounded-2">
                
                <form action="" method="POST" enctype="multipart/form-data">

                     <div class="input-labels alg-text-h3 alg-bold pt-3 alg-text-light">Image</div>
                     <input style="margin-left: 100px;" type="file" name="file" required><br><br>
                     
                     <div class="input-labels alg-text-h3 alg-bold alg-text-light">Package name </div>
                    <select class="input-field" name="name" id="">
                        <option value="Budget">Budget</option>
                        <option value="Medium">Medium</option>
                        <option value="Premium">Premium</option>
                    </select><br><br>
                    
                    <div class="input-labels alg-text-h3 alg-bold alg-text-light">Image Count</div>
                    <input class="input-field" type="text" name="imgCount" required><br>
                    
                    
                    <div class="input-labels alg-text-h3 alg-bold pt-4 alg-text-light">Hours</div>
                    <input class="input-field" type="text" name="hours" required><br>
                    
                    
                    
                    <div class="input-labels alg-text-h3 alg-bold pt-4 alg-text-light">Package Type</div>
                    <select class="input-field" name="type" id="" required>
                        <option value="Wild_Life">Wild Life</option>
                        <option value="Weddings">Weddings</option>
                        <option value="Pre_Shoots">Pre Shoots</option>
                        <option value="Events">Events</option>
                    </select>
                    
                    
                    <div class="input-labels alg-text-h3 alg-bold pt-4 alg-text-light">Package Price</div>
                    <input class="input-field" type="text" name="price" required><br>
                    
                    <div class="d-flex justify-content-center pt-4">
                        <button class="addPhotos-btn border-light alg-bg-dark-green alg-text-light alg-bold rounded-1" type="submit" name="submit" value="add">Add</button>
                    </div>
                    
                </form>
            </div>

        </div>
    </section>
    <?php require 'footer.php' ?>
</body>

</html>