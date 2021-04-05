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
    <style>
                
        #country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute;}
        #country-list li{padding: 10px; background: #eee;color:black}
        #country-list li:hover{background:#aaa;cursor: pointer;color:black}
    </style>
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
                                    <div class="frmSearch">
                                        <input style="width:100%;" class = "form-control" type="text" name="responsable" id="search-box" required placeholder="Responsable de Module" />
                                        <div id="suggesstion-box"></div>
                                    </div>
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
    <script src="../App/JS/jQuery.min.js"></script>
    <script >

        $(document).ready(function(e){
        $("#search-box").keyup(function(){
                $.ajax({
                type: "POST",
                url: "readRespoModule.php",
                data:'keyword='+$(this).val(),
                beforeSend: function(){
                },
                success: function(data){
                    $("#suggesstion-box").show();
                    $("#suggesstion-box").html(data);
                }
                });
            });
        })  

        function selectCountry(val) {
        $("#search-box").val(val);
        $("#suggesstion-box").hide();
        }


    </script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>