<?php

namespace App\models;

class Auth
{
    private $connect;

    public function __construct()
    {
        $db = new Database();
        $this->connect = $db->connect();
    }

    public function checkUser($email, $password)
    {
        $sql = "SELECT id FROM customers WHERE email = ? AND password = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function addAccount($firstname,$lastname,$email,$password){
        $sql = "INSERT INTO customers VALUE(null,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $firstname);
        $stmt->bindParam(2, $lastname);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $password);
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        return $stmt->execute();
    }

    public function getAllAccount(){
        $sql = "SELECT * FROM customers";
        $stmt = $this->connect->prepare($sql);
        $result = $stmt->fetchAll();
        $accounts=[];
        foreach ($result as $item){
            $account = new Account($item['firstname'], $item['lastname'], $item['email'], $item['password']);
            $account->id = $item['id'];

            $accounts = $account;
        }
        return $accounts;
    }

//    public function checkRegister($firstname,$lastname,$email,$password){
//        $account = $this->getAllAccount();
//        foreach ($account as $item){
//            if($email == $item->email){
//                echo "This email has been registered" ;
//                return;
//            } else {
//                $ad = $this->addAccount($firstname,$lastname,$email,$password);
//                echo "register successfully";
//            }
//        }
//    }



    public function checkRegister($email){
        $sql = "SELECT email FROM customers WHERE email= ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}