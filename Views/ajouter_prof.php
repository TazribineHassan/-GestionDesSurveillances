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

<form action="../Controllers/ajouterController.php" method="post">

    <div class="form-group row">
        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name = "nom" id="nom" placeholder="Nom">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name = "prenom" id="prenom" placeholder="Prenom">
        </div>
    </div>

    <div class="form-group row">
        <label for="mail" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
            <input type="mail" class="form-control" name = "mail" id="mail" placeholder="E-mail">
        </div>
    </div>

    
    <div class="form-group row">
        <label for="tele" class="col-sm-2 col-form-label">Tel:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name = "tele" id="tele" placeholder="Tele">
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