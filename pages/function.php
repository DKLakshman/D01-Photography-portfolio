<?php
// config connection with database
    $conn=new mysqli("localhost","root","","photography_portfolio");
    if($conn->connect_error){
        die("Connection error".$conn->connect_error);

    }else{
       if (isset($_POST["submit"])) {
            if ($_POST["submit"] == "add") {
                // if click button value is add then call add function
                add();
            }else if($_POST["submit"]=="edit"){
                // if click button value is edit then call edit function
                edit();
            }else if(isset($_POST["submit"]) && is_numeric($_POST["submit"])){
                // if click button value is submit then call delete function
                delete();
            }
       }
    }


    function add(){
        global $conn;
// get values to the variables
        $title = $_POST["title"];
        $filename = $_FILES["file"]["name"];
        $tmpName = $_FILES["file"]["tmp_name"];
        $description = $_POST["description"];
        $type = $_POST["type"];

        $newfilename = uniqid()."-".$filename;
// image upload to the upload folder
        move_uploaded_file($tmpName,'../uploads/'.$newfilename);
        // insert query to insert data
        $query ="INSERT INTO photos VALUES('','$title','$newfilename','$description','$type')";
        mysqli_query($conn,$query);
        
        echo "<script> alert('added successfully'); document.location.href = 'ViewPhotos.php'; </script>";
    }

    // this function is use to update data from db 
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
        // take the current id and delete that row
        $query = "DELETE FROM photos WHERE id = $id";
        mysqli_query($conn,$query);

        echo "
        <script>alert('delete successfully');document.location.href = 'ViewPhotos.php'; </script>
        ";
        
    }
?>