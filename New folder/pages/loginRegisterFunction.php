<?php
    session_start();
    // config connection with database
    $conn=new mysqli("localhost","root","","photography_portfolio");
    if($conn->connect_error){
        die("Connection error".$conn->connect_error);

    }else{
       if (isset($_POST["submit"])) {
         // if click button value is register then call register function
         if ($_POST["submit"] == "register") {
             register();
            }else if($_POST["submit"]=="login"){
                // if click button value is login then call login function
                login();
            }else if(isset($_POST["submit"]) && is_numeric($_POST["submit"])){
                
            }
       }
    }


    function register(){
        global $conn;

        $email = $_POST["email"];
        $name = $_POST["name"];
        $address = $_POST["address"];
        $number = $_POST["number"];
        $password = $_POST["password"];
        $confirm_password = $_POST["cnPassword"];
        $type = $_POST["type"];
        
        if ($password == $confirm_password) {        
            // insert user entered data to the database
            $query ="INSERT INTO profiles VALUES('','$email','$name','$address','$number','$password','$type')";
            mysqli_query($conn,$query);
            
            echo "<script> alert('Registered Successfully'); document.location.href = 'login.php'; </script>";
        }else{
            echo "
            <script> alert('Password miss match'); </script>
            ";
        }
        
        
    }
    
    function login(){
        global $conn;
        
        $email = $_POST["email"];
        $password = $_POST["password"];
        $type = $_POST["type"];
// validate user entered email, password and type with database.if all these have in one raw then user can logn to the system
        $query = "SELECT * FROM profiles WHERE email = '$email' AND password = '$password' AND type = '$type'";
        $result = mysqli_query($conn, $query);
    
        if ($result && mysqli_num_rows($result) > 0) {
            // Login successful
            // email and type set to the session variable
            $_SESSION['email'] = $email;
            $_SESSION['type'] = $type;

            //redirect to the relvent pages according to user type.
            if ($type=='admin') {
            
                echo "<script> alert('Login successful'); document.location.href = 'ViewPhotos.php'; </script>";
            }else{
                echo "<script> alert('Login successful'); document.location.href = 'index.php'; </script>";

            }
        } else {
            // Invalid login
            echo "<script> alert('Invalid login'); </script>";
        }
        
    }
  
?>