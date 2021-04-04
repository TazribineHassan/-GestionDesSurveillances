<?php 
<<<<<<< HEAD

require_once("./Views/includes/header.php");
require("Controllers/HomeControllers.php");
$pages = ["index"];

$home = new HomeController();

if(isset($_GET["page"])){
    $page = $_GET["page"];
    if(in_array($page, $pages)){
        $home->index($page);
    }else{
        echo "page not";
    }
}else{
    $home->index("index");
}
=======
session_start();
header("Location: Controllers/indexControllers.php");
?>
>>>>>>> 3ec5f31b4199e84a762fef397ace878b8b63c144
