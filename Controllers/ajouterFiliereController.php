<?php
require_once("../Models/connection.php");


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
    
    if($result)
        die("filiere inserted successfully");
    else
        die("filiere inserting the prof");
}

require_once("../Views/ajouter_filiere.php");
