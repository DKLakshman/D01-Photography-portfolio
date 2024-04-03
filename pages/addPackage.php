<?php require 'packageFunction.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Package</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        
        Package name :
        <select name="name" id="">
            <option value="Brozne">Brozne</option>
            <option value="Gold">Gold</option>
            <option value="Premium">Premium</option>
        </select><br><br>
        
        
        Package Type :
        <select name="type" id="">
            <option value="Wild_Life">Wild Life</option>
            <option value="Weddings">Weddings</option>
            <option value="Birthday_Parties">Birthday Parties</option>
        </select><br><br>
        
        <label>Description :</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea><br><br>

        Package Price :
        <input type="text" name="price" required><br>
        
        <button type="submit" name="submit" value="add">Add</button>
    </form>
    <br>
</body>
</html>