<?php 

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
    $home->index($page);
}


require_once("./Views/includes/footer.php");