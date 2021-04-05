$(document).ready(function(){
    $("#professeur").click(function(){
        alert("slm");
        $("#content").load("../Controllers/afficherController.php");
    })
})