<?php
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

        $title = $_POST["title"];
        $filename = $_FILES["file"]["name"];
        $tmpName = $_FILES["file"]["tmp_name"];
        $description = $_POST["description"];
        $type = $_POST["type"];

        $newfilename = uniqid()."-".$filename;

        move_uploaded_file($tmpName,'../uploads/'.$newfilename);
        $query ="INSERT INTO photos VALUES('','$title','$newfilename','$description','$type')";
        mysqli_query($conn,$query);
        
        echo "<script> alert('added successfully'); document.location.href = 'ViewPhotos.php'; </script>";
    }
    function edit(){
        global $conn;
        
        $id = $_GET["id"];
        $title = $_POST["title"];
        
        if ($_FILES["file"]["error"] != 4) {
            $filename = $_FILES["file"]["name"];
            $tmpName = $_FILES["file"]["tmp_name"];
            
            $newfilename = uniqid()."-".$filename;
            
            move_uploaded_file($tmpName,'../uploads/'.$newfilename);
            $query = "UPDATE photos SET image = '$newfilename' WHERE id = $id";
            mysqli_query($conn,$query);
            
        }

        $description = $_POST["description"];
        $type = $_POST["type"];
        
        $query = "UPDATE photos SET `title` = '$title', description = '$description', type = '$type' WHERE id = $id";
        mysqli_query($conn,$query);
        
        echo "
        <script>alert('user edit successfully');document.location.href = 'ViewPhotos.php'; </script>
        ";
        
    }

    
    function delete(){
        global $conn;
        
        $id = $_POST["submit"];
        
        $query = "DELETE FROM photos WHERE id = $id";
        mysqli_query($conn,$query);

        echo "
        <script>alert('delete successfully');document.location.href = 'ViewPhotos.php'; </script>
        ";
        
    }
?>