<?php require 'function.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Photos</title>

    <!-- css link -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
<?php require 'adminHeader.php'?>
<section>
    <div class=" container d-flex flex-column align-items-center w-100">
        <div class="pt-4">
            <h1 class=" alg-bold text-center">Admin Dashboard</h1>
            </div>
            <div class="alg-text-h2 text-center pb-4">ADD PHOTOGRAPH</div>
            <div class="addPhotos-form alg-bg-light-green rounded-2">
                <form class="" action="function.php" method="POST" enctype="multipart/form-data">
                    <div class="input-labels alg-text-h3 alg-bold pt-3 alg-text-light">Title</div>
                    <input class="input-field" type="text" name="title" required><br>
                    
                    <div class="input-labels alg-text-h3 alg-bold pt-3 alg-text-light">Image </div>
                    <input class="" style="margin-left: 100px;" type="file" name="file" required><br><br>
                    
                    <div class="input-labels alg-text-h3 alg-bold pt- alg-text-light">Description :</div>
                    <textarea class="input-textarea" name="description" id="" cols="30" rows="10"></textarea><br><br>
                    
                    <div class="input-labels alg-text-h3 alg-bold  alg-text-light">type</div>
                    <select class="input-field" name="type" id="" required>
                        <option value="Wild_Life">Wild Life</option>
                        <option value="Weddings">Weddings</option>
                        <option value="Pre_Shoots">Pre Shoots</option>
                        <option value="Events">Events</option>
                    </select>
                    <div class="d-flex justify-content-center pt-4">
                        <button class="addPhotos-btn alg-bg-dark-green alg-text-light alg-bold rounded-1 border-1 border-light" type="submit" name="submit" value="add">Add</button>
                    </div>
                </form>
            </div>
            
        </div>
    </section>
    
    <?php require 'footer.php'?>
</body>

</html>