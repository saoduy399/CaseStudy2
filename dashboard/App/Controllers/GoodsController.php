<?php


namespace App\Controller;

session_start();

use App\models\GoodsDataBase;

class GoodsController
{
    private $connect;

    public function __construct()
    {
        $goodDB = new GoodsDataBase();
        $this->connect = $goodDB->connect();
    }

    public function getAllGoods()
    {
        $sql = "SELECT * FROM goods";
        $query = $this->connect->query($sql);
        return $query->fetchAll();
    }

    public function addGoods($name, $price, $description, $img){
        $sql = "INSERT INTO goods VALUE(null,'$name','$price','$description','$img')";
        $query = $this->connect->query($sql);
        return $query->exec();
    }

    public function updateGoods($id,$name, $price, $description,$img){
        $sql = "UPDATE goods SET name='$name',price='$price',description='$description',img='$img' WHERE id='$id'";
        $query = $this->connect->query($sql);
        return $query->execute();
    }

    public function deleteGoods($id){
        $sql = "DELETE FROM goods WHERE id='$id'";
        $query = $this->connect->query($sql);
        return $query->execute();
    }

    public function getGoodsById($id){
        $sql = "SELECT * FROM goods WHERE id='$id'";
        $query = $this->connect->query($sql);
        return $query->fetch();
    }
}