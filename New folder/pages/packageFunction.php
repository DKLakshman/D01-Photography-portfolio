<?php
// config connection with database
    $conn=new mysqli("localhost","root","","photography_portfolio");
    if($conn->connect_error){
        die("Connection error".$conn->connect_error);

    }else{
       if (isset($_POST["submit"])) {
            if ($_POST["submit"] == "add") {
                add();
            }else if($_POST["submit"]=="edit"){
                edit();
            }else if(isset($_POST["submit"]) && is_numeric($_POST["submit"])){
                delete();
            }
       }
    }


    function add(){
        global $conn;

        $filename = $_FILES["file"]["name"];
        $tmpName = $_FILES["file"]["tmp_name"];

        $name = $_POST["name"];
        $imgCount = $_POST["imgCount"];
        $hours = $_POST["hours"];
        $type = $_POST["type"];
        $price = $_POST["price"];

        $newfilename = uniqid()."-".$filename;

        move_uploaded_file($tmpName,'../uploads/'.$newfilename);

        $query ="INSERT INTO packages VALUES('','$newfilename','$name','$imgCount','$hours','$type','$price')";
        mysqli_query($conn,$query);
        
        echo "<script> alert('added successfully'); document.location.href = 'viewPackage.php'; </script>";
    }
    function edit(){
        global $conn;
        
        $id = $_GET["id"];
        
        if ($_FILES["file"]["error"] != 4) {
            $filename = $_FILES["file"]["name"];
            $tmpName = $_FILES["file"]["tmp_name"];
            
            $newfilename = uniqid()."-".$filename;
            
            move_uploaded_file($tmpName,'../uploads/'.$newfilename);
            $query = "UPDATE packages SET image = '$newfilename' WHERE id = $id";
            mysqli_query($conn,$query);
            
        }
        
        $name = $_POST["name"];
        $imgCount = $_POST["imgCount"];
        $hours = $_POST["hours"];
        $type = $_POST["type"];
        $price = $_POST["price"];
        
        $query = "UPDATE packages SET package_name = '$name', img_count = '$imgCount',`hours` = '$hours', package_type = '$type',price='$price' WHERE id = $id";
        mysqli_query($conn,$query);
        
        echo "
        <script>alert('bookig updated successfully');document.location.href = 'viewPackage.php'; </script>
        ";
        
    }

    
    function delete(){
        global $conn;
        
        $id = $_POST["submit"];
        
        $query = "DELETE FROM packages WHERE id = $id";
        mysqli_query($conn,$query);

        echo "
        <script>alert('delete successfully');document.location.href = 'viewPackage.php'; </script>
        ";
        
    }
?>