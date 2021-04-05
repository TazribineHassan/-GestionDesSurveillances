<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../App/CSS/style.css">
    <title>ajouter</title>
</head>
<body>
   
<div class="jumbotron jumbotron-fluid  text-white  p-2">
        <div class="container ">
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
                Ajouter un professeur
            </div>
            <div class="card-body">
                <div class="container col-md-10 offset-1">
                    <form action="../Controllers/ajouterProfController.php" method="post">

                        <div class="form-group row">
                            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="text" class="form-control" required name = "nom" id="nom" placeholder="Nom">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="text" class="form-control" required name = "prenom" id="prenom" placeholder="Prenom">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mail" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="mail" class="form-control" required name = "mail" id="mail" placeholder="E-mail">
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="tele" class="col-sm-2 col-form-label">Tel:</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="text" class="form-control" required name = "tele" id="tele" placeholder="Tele">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-10 d-flex justify-content-end">
                                <button type="reset" class="btn btn-style text-white mr-5" name="delete">Effacer</button>
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