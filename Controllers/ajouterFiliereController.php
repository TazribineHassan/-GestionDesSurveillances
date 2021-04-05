<?php
require_once("../Models/connection.php");

session_start();
if(!$_SESSION['logged']){
    header("location:../");
}

if(isset($_POST['add'])){
    $nomFiliere = $_POST['nomFiliere'];
    $chef = $_POST['chef'];
    $niveau = $_POST['niveau'];
    
    $con = new ConnectionClass();
    
    $table = 'filiere';
    $data = ['NOM_FILIERE' => $nomFiliere,
             'CHEF' => $chef,
             'NIVEAU' => $niveau
            ];
    
    $result = $con->InsertRowIntoTable($table, $data);
    
    if($result){

        $class = "success";
        $msg = "La filiere a ete ajoute avec succe";
    }
    else{
        
        $class = "danger";
        $msg = "Nous avons rencontre un probleme, veuillez ressayez plus tard";
    }
}

require_once("../Views/ajouter_filiere.php");
