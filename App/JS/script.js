$(document).ready(function(){
    $("#professeur").click(function(){
        $("#content").load("../Controllers/afficherController.php",{table:'prof'});
    })
    $("#filiere").click(function(){
        $("#content").load("../Controllers/afficherController.php",{table:'filiere'});
    })
    $("#model").click(function(){
        $("#content").load("../Controllers/afficherController.php",{table:'module'});
    })
})