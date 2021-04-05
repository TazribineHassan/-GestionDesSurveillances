<?php

include '../Models/connection.php';

class LoginController {

    static public function VerifyLogin()
    {
        $username =$_POST['username'];
        $password = $_POST['password'];
        $db = new ConnectionClass();
        $data = $db->SelectWhereFromTable('admin', 'USERNAME', $username);
        echo "$password $username<br>";
        foreach ($data as $row) {
            echo"dkhol";
            if(password_verify($password,$row['PASSWORD'])){
                header("Location:../Controllers/HomeControllers.php");
            }
            else{
            die('username or password incorrect1');
            }
        }
        die('username or password incorrect');
    }

}

LoginController::VerifyLogin();
