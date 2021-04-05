<?php 

include("../Models/connection.php");
$conn = new ConnectionClass();
$profs = $conn->SelectAllFromTable("prof");

?>

<table class="table">
    <tr>
        <th></th>
    </tr>
</table>