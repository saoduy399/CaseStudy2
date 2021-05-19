<?php

include_once "../../../vendor/autoload.php";

$controller = new \App\Controller\GoodsController();

$goods = $controller->getAllGoods();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../../../public/css/style.css">
</head>

<body>
<!--    Navbar section start-->
<section class="navbar">
    <div class="container">
        <div class="logo">
            <img src="../../../public/photos/KFC-Logo.png" alt="Restaurant logo" class="img-responsive" >
        </div>
        <div class="menu text-right">
            <ul>
                <li>
                    <a href="../../../index.php">Home</a>
                </li>

                <li>
                    <a href="foods.php">Foods</a>
                </li>

                <li>
                    <a href="../category/categories.php">Categories</a>
                </li>

                <li>
                    <a href="../../../Resource/Views/pages/login.php">Log in</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!--    Navbar section end-->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
<h2 class="text-center">Food Menu</h2>
    <section class="food-menu">
        <div class="container">
            <?php foreach ($goods as $item) { ?>
                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <img class="img-responsive img-curve" src= "<?php echo '../../../public/photos/'.$item['img']?>"?>
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $item['name']?></h4>
                            <p class="food-price"><?php echo $item['price']?></p>
                            <p class="food-detail"> <?php echo $item['description'] ?> </p>
                            <br>
                            <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <?php } ?>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

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
        <img src="../../../public/photos/logo_bocongthuong.png" alt="">
    </div>

    <div class="clearfix"></div>
</section>
<!--    footer section end-->


</body>
</html>