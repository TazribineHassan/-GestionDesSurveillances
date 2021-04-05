<?php 

session_start();
if(!$_SESSION['logged']){
    header("location:../");
}

    require("../Views/home.php");
?>
