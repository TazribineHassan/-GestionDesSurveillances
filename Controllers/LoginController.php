<?php

session_start();
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
                $_SESSION['logged'] = true;
                header("Location:../Controllers/HomeControllers.php");
            }
            else{
                $_SESSION['logged'] = false;
                header("Location:../index.php");
            }
        }
    }

}

LoginController::VerifyLogin();
