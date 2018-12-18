<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- CSS -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:700|Roboto+Condensed:400,700|Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

<link rel="stylesheet" href="./css/styles.css">

<title>Park n' Shop</title>
</head>
<body class="home">

<?php include "includes/header.php" ?>

<section class="slider">
    <div class="main_slider">
        <ul id="mainSlider">
            <li>
                <div class="img"><img src="img/slider1.jpg"></div>
                <div class="text">
                    <div class="container text-center">
                        <p>Your Favorite Brands From<br>Around The World</p>
                        <span class="divider"></span>
                        <h2><span>YOU CLICK</span> <span>●</span> WE DELIVER</h2>
                        <h4>Straight to Your Home</h4>
                    </div>
                </div>
            </li>
        </ul>
        <div class="mainSliderNav">
            <a href="" id="prev1"><img src="img/prev_main_slider.png" class="img-fluid"></a>
            <a href="" id="next1"><img src="img/next_main_slider.png" class="img-fluid"></a>
        </div>
    </div>
</section>

<?php include "includes/categories.php" ?>


<section class="section_one">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="top_note_area tna_one">
                    <h2>GET READY TO COOK</h2>
                    <div class="divider"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                    <a href="" class="btn btn-danger btn-rounded-corner">Go to Section</a>
                    <img src="img/top-img-1.png" alt="">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="top_note_area tna_two">
                    <h2>HEALTHY RECIPES</h2>
                    <div class="divider"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                    <a href="" class="btn btn-danger btn-rounded-corner">Go to Section</a>
                    <img src="img/top-img-2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_two offer-section" style="background-image: url(img/offers-bg.jpg)">
    <div class="container">
        <div class="offer-content bg-primary-90 text-center">
            <h3 class="w300">SPECIAL OFFER</h3>
            <h2>50% OFF ON SWEETS</h2>
            <div class="divider"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore</p>
        </div>
    </div>
    <!-- <img src="img/area1.jpg" class="img-fluid" alt=""> -->
</section>

<section class="trending_products">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h3><img src="img/trending-title.png" alt="Trending Products"></h3>
            </div>
        </div>
        <div class="row product_loop_wrapper">
            <div class="col">
                <ul class="product_loop">
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section_four pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 has-button-ad">
                <img src="img/dang.png" class="img-fluid" alt="">
                <a href="" class="btn btn-rounded-corner btn-danger left">shop now</a>
                <!-- Change Class right to align button right -->
            </div>
            <div class="col-12 col-sm-12 col-md-6 has-button-ad">
                <img src="img/frozen-pizza.png" class="img-fluid" alt="">
                <a href="" class="btn btn-rounded-corner btn-danger left">shop now</a>
                <!-- Change Class right to align button right -->
            </div>
        </div>
    </div>
</section>

<!-- 2018-12-18 -->
<section class="section_two bg-white">
    <div class="row no-gutters advertisment-area-1">
        <div class="col-12 col-sm-12 col-md-6">
            <div class="content-area">
                <h2>Healthy organic food section</h2>
                <a href="">Check out <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="image-area">
                <img src="img/area2-img.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- <img src="img/area2.jpg" class="img-fluid" alt=""> -->
</section>
<!-- ./2018-12-18 -->

<section class="trending_products">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h3><img src="img/shopping-allies.png" alt="Shoping Allies"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="cate_loop">
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                    <li>
                        <div class="img">
                            <img src="img/cate1.png" class="img-fluid" alt="">
                        </div>
                        <a href="" class="name">FRUITS & VEGETABLES</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 2018-12-18 -->
<section class="section_two bg-white">
    <div class="row no-gutters advertisment-area-1">
        <div class="col-12 col-sm-12 col-md-6">
            <div class="content-area">
                <h2>Healthy organic food section</h2>
                <a href="">Check out <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="image-area">
                <img src="img/area2-img.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- <img src="img/area2.jpg" class="img-fluid" alt=""> -->
</section>
<!-- ./2018-12-18 -->

<section class="trending_products">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h3><img src="img/new-arrivals.png" alt="New Arrivals"></h3>
            </div>
        </div>
        <div class="row product_loop_wrapper">
            <div class="col">
                <ul class="product_loop">
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="pad-10">
                            <h4 class="p_name"><a href="">Instinct Raw150g</a></h4>
                            <div class="p_price">
                                <span class="old_price">AED 20.00</span>
                                <span class="new_price">AED 16.00</span>
                            </div>
                            <div class="p_img">
                               <img src="img/product_img.png" alt="">
                            </div>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </div>
                        <div class="btns btn-group">
                            <a href="" class="btn btn-success btn-add-to-cart"><img src="img/small_cart.png" alt=""> Add to Cart</a>
                            <a href="" class="btn btn-light btn-add-to-wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section_two">
    <div class="container has-button-ad">
        <img src="img/area3.jpg" class="img-fluid" alt="">
        <a href="" class="btn btn-danger btn-rounded-corner center">shop now</a>
    </div>
</section>

<!-- 2018-12-18 -->
<!-- Image ads with a button -->
<section class="section_two bg-white">
    <div class="row no-gutters advertisment-area-1">
        <div class="col-12 col-sm-12 col-md-6">
            <div class="content-area">
                <h2>Healthy organic food section</h2>
                <a href="">Check out <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="image-area">
                <img src="img/area2-img.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- <img src="img/area2.jpg" class="img-fluid" alt=""> -->
</section>
<!-- ./2018-12-18 -->

<section class="trending_products pb-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h3><img src="img/brand-title.png" alt="Brands"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="brands owl-carousel owl-theme">
                    <div class="item"><img src="img/brand1.png" alt=""></div>
                    <div class="item"><img src="img/brand2.png" alt=""></div>
                    <div class="item"><img src="img/brand3.png" alt=""></div>
                    <div class="item"><img src="img/brand1.png" alt=""></div>
                    <div class="item"><img src="img/brand2.png" alt=""></div>
                    <div class="item"><img src="img/brand3.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trending_products pb-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h3><img src="img/testimo-title.png" alt="Testimonials"></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-1 text-center"><span class="sixtysix"></span></div>
            <div class="col-10 text-center">
                <ul class="testimonial owl-carousel owl-theme">
                    <li class="item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat.</p>
                        <span>- Inthikhab Abdul</span>
                    </li>
                    <li class="item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat.</p>
                        <span>- Inthikhab Abdul</span>
                    </li>
                </ul>
            </div>
            <div class="col-1 text-center"><span class="nintinine"></span></div>
        </div>
    </div>
</section>

<section class="blog_section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="bg-white">
                    <img src="img/dang.png" class="img-fluid" alt="">
                    <div class="pb-3 pl-3 pr-3">
                        <h3><a href="">LOREM UPSUM DOLOR SIT AMET CONSECTETUR</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="" class="btn btn-danger btn-rounded-corner">Go to Section</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="bg-white">
                    <img src="img/dang.png" class="img-fluid" alt="">
                    <div class="pb-3 pl-3 pr-3">
                        <h3><a href="">LOREM UPSUM DOLOR SIT AMET CONSECTETUR</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="" class="btn btn-danger btn-rounded-corner">Go to Section</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="bg-white">
                    <img src="img/dang.png" class="img-fluid" alt="">
                    <div class="pb-3 pl-3 pr-3">
                        <h3><a href="">LOREM UPSUM DOLOR SIT AMET CONSECTETUR</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="" class="btn btn-danger btn-rounded-corner">Go to Section</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Should be able to chnage from back end not just a image -->
<section class="section_two mb-5">
    <div class="container">
        <div class="baking-ad" style="background-image: url(img/bakery.jpg);">
            <div class="row justify-content-end">
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="text-center">
                        <h3>PROUDLY BAKING SINCE 1980</h3>
                        <h5>Behind the scenes with Raggi Thomas</h5>
                        <div class="divider"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adiplit sed do eiusmod tempor incididunt ut labore</p>
                        <a href="" class="btn btn-danger btn-rounded-corner">shop now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <img src="img/area4.jpg" class="img-fluid" alt=""> -->
    </div>
</section>

<?php include "includes/footer.php" ?>

</body>
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.caroufredsel/6.2.1/jquery.carouFredSel.packed.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="js/custom.js"></script>

<script type="text/javascript">
$(function(){

    $('.brands').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:3
            },
            1024:{
                items:5
            }
        }
    })

    $('.testimonial').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:1
            },
            1024:{
                items:1
            }
        }
    })


    $('#mainSlider').carouFredSel({
        responsive:true,
        width:"100%",
        // auto:false,
        scroll:{
            fx:"crossfade",
            duration:1000,
        },
        pagination: {
            container: ".pag",
            anchorBuilder: false
        },
        prev:"#prev1",
        next:"#next1",
        items:{
            width:240,
            visible:{
                min:1,
                max:1
            }
        },
        swipe:{
            onTouch:1
        }
    })
    

    /*$('.testimonial').carouFredSel({
        responsive:true,
        width:"100%",
        // auto:false,
        pagination: {
            container: ".pag1",
            anchorBuilder: false
        },
        items:{
            width:240,
            visible:{
                min:1,
                max:1
            }
        },
        swipe:{
            onTouch:1
        }
    })*/
})
</script>

</html>