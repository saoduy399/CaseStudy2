<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="price" placeholder="price">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="img" placeholder="img">
        <button type="submit">OK</button>
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $name = $_REQUEST["name"];
    $price = $_REQUEST["price"];
    $description = $_REQUEST["description"];
    $img = $_REQUEST["img"];

    $controller->addGoods($name, $price, $description, $img);

    header("location: ../pages/dash-board.php");
}
