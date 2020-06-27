<?php
//logout.php
session_start();
    session_destroy();
    setcookie(session_id(),time()-1);
header("location:login.php");

?>