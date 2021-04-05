<?php
require_once("../Models/connection.php");


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
    
    if($result)
        die("prof inserted successfully");
    else
        die("erroe inserting the prof");
}
require_once("../Views/ajouter_prof.php");