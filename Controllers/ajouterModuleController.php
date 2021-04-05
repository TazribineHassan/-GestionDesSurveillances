<?php
require_once("../Models/connection.php");


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
    
    if($result)
        die("filiere inserted successfully");
    else
        die("filiere inserting the prof");
}
