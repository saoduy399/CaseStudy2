<?php

namespace App\Controller;

session_start();

use App\models\Auth;

class LoginController
{

    private $authModel;

    public function __construct()
    {
        $db = new Auth();
        $this->authModel = $db;

    }

    public function login($request)
    {
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $result = $this->authModel->checkUser($email, $password);

        if (!$result) {
            header("location: ../../Resource/Views/pages/login.php");
        } else {
            $_SESSION["userLogin"] = $result;
            header("location: dash-board.php");
        }
    }

    public function register($account)
    {
            $firstname = $_REQUEST['firstname'];
            $lastname = $_REQUEST['lastname'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $result = $this->authModel->checkRegister($email);
            if(!$result){
                $this->authModel->addAccount($firstname, $lastname, $email, $password);
                $_SESSION['firstname'] = $firstname;
                $_SESSION['lastname'] = $lastname;
                header("location: login.php");
            } else {
                echo "This account has been registered!";
                die();
            }
        }
}