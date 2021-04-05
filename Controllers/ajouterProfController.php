<?php
require_once("../Models/connection.php");

session_start();
if(!$_SESSION['logged']){
    header("location:../");
}


if(isset($_POST['add'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['mail'];
    $tele = $_POST['tele'];
    
    $con = new ConnectionClass();
    
    $table = 'prof';
    $data = ['NOM' => $nom,
             'PRENOM' => $prenom,
             'EMAIL' => $email,
             'TEL' => $tele];
    
    $result = $con->InsertRowIntoTable($table, $data);
    
    
    if($result){

        $class = "success";
        $msg = "Le module a ete ajoute avec succe";
    }
    else{
        
        $class = "danger";
        $msg = "Nous avons rencontre un probleme, veuillez ressayez plus tard";
    }
}
require_once("../Views/ajouter_prof.php");