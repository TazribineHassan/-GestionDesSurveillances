<?php

include "../Models/connection.php";

if(isset($_POST['edit'])){
    $id = $_POST['id'];
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
    
    $result = $con->UpdateRowInTable($table, $data, 'ID_PROF', $id);
    
    if($result)
        header("location:../index.php?log=updated successfully");
    else
    header("location:../index.php?log=updated unsuccessfully");
}