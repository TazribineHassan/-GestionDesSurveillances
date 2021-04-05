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
    <div class="p-2"></div>
    
        <?php if(isset($msg)){ ?>
                    
            <div id="alert" class="col-md-6 offset-3 alert alert-<?php echo $class; ?>"><?php echo $msg ?></div>
            <script>setTimeout(function(){
                           $('#alert').remove();
                            }, 5000);
                </script>
        <?php }  ?>
    
    <div class="p-2"></div>
    <div class="container">
        <div class="card">
            <div class="card-header text-white text-center card-bg">
                Ajouter une filière
            </div>
            <div class="card-body">
                <div class="container col-md-10 offset-1">
                    <form action="../Controllers/ajouterFiliereController.php" method="post">

                    <div class="form-group row">
                        <label for="nomFiliere" class="col-sm-2 col-form-label">Nom Filiere</label>
                        <div class="col-sm-10 col-md-8">
                            <input type="text" class="form-control" required name = "nomFiliere" id="nomFiliere" placeholder="Nom Filiere">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="chef" class="col-sm-2 col-form-label">Chef de Filiere</label>
                        <div class="col-sm-10 col-md-8">
                            <input type="text" class="form-control" required name = "chef" id="chef" placeholder="Chef de Filiere">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="niveau" class="col-sm-2 col-form-label">Niveau</label>
                        <div class="col-sm-10 col-md-8">
                            <input type="number" class="form-control" required name = "niveau" id="niveau" placeholder="Niveau">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10 d-flex justify-content-end">
                            <button type="reset" class="btn btn-style text-white mr-5" name="delete">Effacer</button>
                            <button type="submit" class="btn btn-style text-white ml-5" name="add">Ajouter</button>
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../App/JS/jQuery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>