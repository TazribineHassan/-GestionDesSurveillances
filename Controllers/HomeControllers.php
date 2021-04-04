<?php 

class HomeController{
    public function index($page)
    {
        
        require_once("./Views/$page.php");
    }
}