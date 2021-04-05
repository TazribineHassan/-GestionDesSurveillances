<?php

require_once("../Models/connection.php");
if(isset($_GET['id_prof'])){
    $id = $_GET['id_prof'];
    $con = new ConnectionClass();
    $prof = $con->SelectWhereFromTable('prof', 'ID_PROF', $id)[0];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ajouter</title>
</head>
<body>
    
<div class="container p-5">

<form action="../Controllers/EditProfController.php" method="post">
    
    <input type="hidden" name="id" value ="<?php echo $prof['ID_PROF'] ; ?>" />

    <div class="form-group row">
        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value = "<?php echo $prof['NOM'] ; ?>" name = "nom" id="nom" placeholder="Nom">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value = "<?php echo $prof['PRENOM'] ; ?>" name = "prenom" id="prenom" placeholder="Prenom">
        </div>
    </div>

    <div class="form-group row">
        <label for="mail" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
            <input type="mail" class="form-control"  value = "<?php echo $prof['EMAIL'] ; ?>" name = "mail" id="mail" placeholder="E-mail">
        </div>
    </div>

    
    <div class="form-group row">
        <label for="tele" class="col-sm-2 col-form-label">Tel:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  value = "<?php echo $prof['TEL'] ; ?>" name = "tele" id="tele" placeholder="Tele">
        </div>
    </div>


    <div class="form-group row">
        <div class="col-sm-10 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary ml-5" name="edit">Editer</button>
        </div>
    </div>
</form>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>