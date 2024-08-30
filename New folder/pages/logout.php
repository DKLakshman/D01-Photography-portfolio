<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php

    $_SESSION = array();

	//check whether a cookie has been created after starting the session
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time()-3600, '/');
    }
// if has a cookie then destroy it when call this function
    session_destroy();

    header("Location: index.php");

?>