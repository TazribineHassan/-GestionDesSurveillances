<?php

require_once("../Models/connection.php");

$con = new ConnectionClass();
$filieres = $con->SelectAllFromTable('filiere');
$profs = $con->SelectAllFromTable('prof');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ajouter filiere</title>
</head>
<body>
    
<div class="container p-5">

<form action="../Controllers/ajouterModuleController.php" method="post">

    
    <div class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Filiere</legend>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" name="filiere">
                    <option selected>Filiere</option>
                    <?php foreach ($filieres as $filiere) {?>
                    <option value="<?php echo $filiere['ID_FILIERE']; ?>"> <?php echo $filiere['NOM_FILIERE']; ?> </option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="nomModule" class="col-sm-2 col-form-label">Nom Module</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name = "nomModule" id="nomModule" placeholder="Nom Module">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name = "description" id="description" placeholder="Description">
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Responsable</legend>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" name="responsable">
                    <option selected>Responsable</option>
                    <?php foreach ($profs as $prof) {?>
                    <option value="<?php echo $prof['NOM'].' '.$prof['PRENOM']; ?>"> <?php echo $prof['NOM'].' '.$prof['PRENOM']; ?> </option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mr-5" name="delete">Effacer</button>
            <button type="submit" class="btn btn-primary ml-5" name="add">Ajouter</button>
        </div>
    </div>
</form>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>