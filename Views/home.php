<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../App/CSS/style.css">
    <title>Home</title>
  </head>
  <body>

    <div class="jumbotron jumbotron-fluid  text-white  p-2">
        <div class="container col-md-12 ">
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
            <div class="card-header card-bg">
                <div class="row p-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-2 col-xs-8"><button class="btn btn-style text-white" id="professeur">Professeurs</button></div>
                    <div class="col-md-2 col-xs-8"><button class="btn btn-style text-white" id="filiere">Filières</button></div>
                    <div class="col-md-2 col-xs-8"><button class="btn btn-style text-white" id="model">Modules</button></div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            <div class="card-body col-md-12 col-sm-12" id="content"></div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="../App/JS/jQuery.min.js"></script>
    <script src="../App/JS/script.js"></script>
  </body>
</html>