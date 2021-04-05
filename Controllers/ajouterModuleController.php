<?php
require_once("../Models/connection.php");

session_start();
if(!$_SESSION['logged']){
    header("location:../");
}


if(isset($_POST['add'])){
    $id_filiere = $_POST['filiere'];
    $nomModule = $_POST['nomModule'];
    $description = $_POST['description'];
    $id_responsable = $_POST['responsable'];
    
    $con = new ConnectionClass();
    
    $table = 'module';
    $data = ['ID_FILIERE' => $id_filiere,
             'NOM_MODULE' => $nomModule,
             'DESCRIPTION' => $description,
             "RESPO_MODULE" => $id_responsable
            ];
    
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
require_once("../Views/ajouter_module.php");
