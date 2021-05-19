<?php


require_once "vendor/autoload.php";

$controller = new \App\Controller\GoodsController();

$page = null;
if (isset($_GET['page'])){
    $page = $_GET['page'];
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant</title>
    <link rel="stylesheet" href="public/css/style12.css">
</head>
<body>

<!--    Navbar section start-->
<section class="navbar">
    <div class="container">
        <div class="logo">
            <img src="public/photos/KFC-Logo.png" alt="Restaurant logo" class="img-responsive" >
        </div>
        <div class="menu text-right">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="Resource/Views/food/foods.php">Foods</a>
                </li>

                <li>
                    <a href="Resource/Views/category/categories.php">Categories</a>
                </li>

                <li>
                    <a href="Resource/Views/pages/login.php">Log in</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!--    Navbar section end-->

<!--    food-search section start-->
<section class="food-search text-center">
    <div class="container">
        <form action="">
            <input type="search" name="search" placeholder="Search for some food..">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
</section>
<!--    food-search section end-->

<!--    category section start-->
<section class="category">
    <div class="container">
        <h2 class="text-center">Category</h2>

        <div class="boxes-3 float-container">
            <img src="public/photos/Coca.jpg" alt="Drink" class="img-responsive img-curve" id="category">

            <h3 class="float-text text-white">Drink</h3>
        </div>

        <div class="boxes-3 float-container">
            <img src="public/photos/101097797-vector-colorful-seamless-pattern-of-a-fast-food-and-drink-isolated-from-red-background-wallpaper-des.jpg" alt="FastFood" class="img-responsive img-curve" id="category">

            <h3 class="float-text text-white">Fast Food</h3>
        </div>

        <div class="boxes-3 float-container">
            <img src="public/photos/115821999_1399452033579229_1715495046892226585_n.jpg" alt="Ice-cream" class="img-responsive img-curve" id="category">

            <h3 class="float-text text-white">Ice cream</h3>
        </div>

        <div class="clearfix"></div>
    </div>
</section>
<!--    category section end-->

<!--    menu section start-->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Explore</h2>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="public/photos/crunchy_whp-min_1.jpg" alt="Burger" class="img-responsive img-curve">
            </div>

            <div class="food-menu-description">
                <h4>food title</h4>
                <p>$2</p>
                <p>
made with pork, cheese, salad, bread.
                </p>
                <br>

                <a href="Resource/Views/oder/order.html" class="btn btn-primary">ORDER NOW</a>
            </div>

            <div class="clearfix"></div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="public/photos/crunchy_whp-min_1.jpg" alt="Burger" class="img-responsive img-curve">
            </div>

            <div class="food-menu-description">
                <h4>food title</h4>
                <p>$2</p>
                <p>
made with pork, cheese, salad, bread.
                </p>
                <br>

                <a href="Resource/Views/oder/order.html" class="btn btn-primary">ORDER NOW</a>
            </div>

            <div class="clearfix"></div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="public/photos/crunchy_whp-min_1.jpg" alt="Burger" class="img-responsive img-curve">
            </div>

            <div class="food-menu-description">
                <h4>food title</h4>
                <p>$2</p>
                <p>
made with pork, cheese, salad, bread.
                </p>
                <br>

                <a href="Resource/Views/oder/order.html" class="btn btn-primary">ORDER NOW</a>
            </div>

            <div class="clearfix"></div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="public/photos/crunchy_whp-min_1.jpg" alt="Burger" class="img-responsive img-curve">
            </div>

            <div class="food-menu-description">
                <h4>food title</h4>
                <p>$2</p>
                <p>
made with pork, cheese, salad, bread.
                </p>
                <br>

                <a href="Resource/Views/oder/order.html" class="btn btn-primary">ORDER NOW</a>
            </div>

            <div class="clearfix"></div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="public/photos/crunchy_whp-min_1.jpg" alt="Burger" class="img-responsive img-curve">
            </div>

            <div class="food-menu-description">
                <h4>food title</h4>
                <p>$2</p>
                <p>
made with pork, cheese, salad, bread.
                </p>
                <br>

                <a href="Resource/Views/oder/order.html" class="btn btn-primary">ORDER NOW</a>
            </div>

            <div class="clearfix"></div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="public/photos/crunchy_whp-min_1.jpg" alt="Burger" class="img-responsive img-curve">
            </div>

            <div class="food-menu-description">
                <h4>food title</h4>
                <p>$2</p>
                <p>
made with pork, cheese, salad, bread.
                </p>
                <br>

                <a href="Resource/Views/oder/order.html" class="btn btn-primary">ORDER NOW</a>
            </div>

            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>

    </div>
    <h2 class="text-center"><a href="Resource/Views/food/foods.php">Show all foods</a></h2>
</section>
<!--    menu section end-->

<!--    social section start-->
<section class="social">
    <div class="container text-center">
        <ul>
            <li>
                <a href="https://www.facebook.com/profile.php?id=100006558405885"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/></a>
            </li>
            <li>
                <a href="https://www.instagram.com/tddnp/"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
            </li>
            <li>
                <a href="https://twitter.com/home"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
            </li>
        </ul>
    </div>
</section>
<!--    social section end-->

<!--    footer section start-->
<section class="footer">
    <div class="container text-center btc">
        <p>CÔNG TY LIÊN DOANH TNHH KFC VIỆT TRI
<br>
            Số 292 Bà Triệu, P. Lê Đại Hành, Q. Hai Bà Trưng, TP. Hà Nội.
            <br>
Điện thoại: 0947530565
<br>
            Email: tddnp565@gmail.com
<br>
            Mã số thuế: 0100773885
<br>
            Ngày cấp: 29/10/1998 - Nơi cấp: Cục Thuế Thành Phố Hà Nội
<br>
            Copyright © 2021<a href="#">DuyTran</a></p>
    </div>

    <div class="logo-bct">
        <img src="public/photos/logo_bocongthuong.png" alt="">
    </div>

    <div class="clearfix"></div>
</section>
<!--    footer section end-->

</body>

</html>