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
    <link rel="stylesheet" href="../App/CSS/style.css">
    <title>ajouter filiere</title>
</head>
<body>
    
<div class="jumbotron jumbotron-fluid  text-white  p-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12 p-4"><img alt="images/logo.png" class="img" src="../Views/images/logo.png"></div>
                <div class="col-md-3 col-xs-12"></div>
                <div class="col-md-6 col-xs-12 style"><p class="lead" >Bienvenue administrateur dans votre espace</p></div>
            </div>
        </div>
</div>
    <div class="p-4"></div>
    <div class="container">
        <div class="card">
            <div class="card-header text-white text-center card-bg">
                Ajouter un module
            </div>
            <div class="card-body">
                <div class="container col-md-10 offset-1">
                    <form action="../Controllers/ajouterModuleController.php" method="post"> 
                        <div class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Filiere</legend>
                                <div class="col-sm-10 col-md-8">
                                    <select class="custom-select mr-sm-2" name="filiere" required>
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
                            <div class="col-sm-10 col-md-8">
                                <input type="text" class="form-control" required name = "nomModule" id="nomModule" placeholder="Nom Module">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="text" class="form-control" required name = "description" id="description" placeholder="Description">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Responsable</legend>
                                <div class="col-sm-10 col-md-8">
                                    <select class="custom-select mr-sm-2" required name="responsable">
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
                                <button type="reset" class="btn btn-style text-white  mr-5" name="delete">Effacer</button>
                                <button type="submit" class="btn btn-style text-white " name="add">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>