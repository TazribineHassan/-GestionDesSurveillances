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

<form action="../Controllers/ajouterFiliereController.php" method="post">

    <div class="form-group row">
        <label for="nomFiliere" class="col-sm-2 col-form-label">Nom Filiere</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name = "nomFiliere" id="nomFiliere" placeholder="Nom Filiere">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="chef" class="col-sm-2 col-form-label">Chef de Filiere</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name = "chef" id="chef" placeholder="Chef de Filiere">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="niveau" class="col-sm-2 col-form-label">Niveau</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name = "niveau" id="niveau" placeholder="Niveau">
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