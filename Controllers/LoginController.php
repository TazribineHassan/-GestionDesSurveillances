<?php

include '../Models/connection.php';

class LoginController {

    static public function VerifyLogin()
    {
        $username =$_POST['username'];
        $password = $_POST['password'];
        $db = new ConnectionClass();
        $data = $db->SelectWhereFromTable('admin', 'USERNAME', $username);
        foreach ($data as $row) {
            if(password_verify($password, $row['PASSWORD']))
                die('logged succesfuly');
            else
            die('username or password incorrect');
        }
        die('username or password incorrect');
    }

}

LoginController::VerifyLogin();
