<?php require 'function.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
</head>
<body>
    <form action="function.php" method="POST" enctype="multipart/form-data">
        Title :
        <input type="text" name="title" required><br>

        Image :
        <input type="file" name="file" required><br><br>

        <label>Description :</label>
       <textarea name="description" id="" cols="30" rows="10"></textarea><br><br>

        type :
        <select name="type" id="">
            <option value="Wild_Life">Wild Life</option>
            <option value="Weddings">Weddings</option>
            <option value="Birthday_Parties">Birthday Parties</option>
        </select>
        
        <button type="submit" name="submit" value="add">Add</button>
    </form>
    <br>
    <a href="ViewPhotos.php">Admin Photography Gallery</a>
</body>
</html>