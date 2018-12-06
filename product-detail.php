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
<link rel="stylesheet" href="./css/styles.css">

<title>Park n' Shop</title>
</head>
<body class="product-single">

<?php include "includes/header.php" ?>
<?php include "includes/categories.php" ?>


<div class="container contact-us mt-5">
    <div class="row align-items-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-5 rounded bg-white box-shadow">
            <div class="pl-4 pr-4 pt-4 pb-4">
                <div class="product-image-slider">
                    <ul id="productImageSlider">
                        <li><img src="img/big-product-item.png" class="img-fluid"></li>
                        <li><img src="img/big-product-item.png" class="img-fluid"></li>
                        <li><img src="img/big-product-item.png" class="img-fluid"></li>
                    </ul>
                    <div class="pag5"></div>
                    <div class="navi5">
                        <a href="" id="next5"><i class="fas fa-angle-right"></i></a>
                        <a href="" id="prev5"><i class="fas fa-angle-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 box-shadow rounded bg-white product-details">
            <div class="pl-4 pr-4 pt-4 pb-4">
                <h1>Lay's Potato Chips Cream & Onion Flavour</h1>
                <hr width="75%" align="left">
                <table class="table">
                    <tr>
                        <th>Price</th>
                        <td class="unit-price"><span class="price">AED 20.00</span> <span class="weight">(52grams)</span></td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td>
                            <div class="p_amount">
                                <a href="">-</a><input type="text" value="01"><a href="">+</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                            <a href="">Read More</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Total Price:</th>
                        <td class="total-price">AED 60.00</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="" class="btn btn-primary btn-rounded-corner">Add to Cart</a>
                            <a href="" class="btn btn-link btn-rounded-corner add-to-wish-list"><i class="far fa-heart"></i> Add to Wish List</a>
                            <!-- <a href="" class="btn btn-link btn-rounded-corner add-to-wish-list"><i class="fas fa-heart text-secondary"></i> Remove from the wish list</a> -->
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <div class="product-main-description">
                <h4 class="main-title">Product Details</h4>
                <div class="details bg-white">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <h4>Item Specifications</h4>
                            <table class="table">
                                <tr>
                                    <th>Item Weight</th>
                                    <td>59g</td>
                                </tr>
                                <tr>
                                    <th>Units</th>
                                    <td>Grams</td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>TooYumm!</td>
                                </tr>
                                <tr>
                                    <th>Specialty</th>
                                    <td>Suitable for Vegetarians</td>
                                </tr>
                                <tr>
                                    <th>Manufacturer</th>
                                    <td>Guiltfree Industries Limited</td>
                                </tr>
                                <tr>
                                    <th>Ingredient Type</th>
                                    <td>Vegetarian</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <h4>Nutrients</h4>
                            <img src="img/nutrition.jpg" class="img-fluid">
                            <table class="table">
                                <tr>
                                    <th>Certification</th>
                                    <td>NABL laboratory notified by FSSAI</td>
                                </tr>
                                <tr>
                                    <th>From</th>
                                    <td>India</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>Ingredients</h4>
                            <p>Aqua , Potassium Sunflowerate , Potassium Cocoate , Glycerin , Potassium Chloride , Potassium Citrate , Aqua , Potassium Sunflowerate , Potassium Cocoate , Glycerin , Potassium Chloride</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>Product Description</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare libero quis metus tempor, finibus semper arcu blandit. Phasellus sed ultrices purus. Aenean lobortis, sapien vitae elementum ultrices, ex nunc feugiat nisl, ac maximus dolor lorem vel elit. Sed condimentum posuere leo rhoncus porta. Proin et felis quam.Lorem ipsum dolor sit amet, consecaximus dolor lorem vel elit. Sed condimentum posuere leo rhoncus porta. Proin et felis quam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="w700">Pair it with</h3>
            <ul class="product_loop" id="productLoop">
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
            <div class="productLoopNaviIcons navi6">
                <a href="" id="next6"><i class="fas fa-angle-right"></i></a>
                <a href="" id="prev6"><i class="fas fa-angle-left"></i></a>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="w700">Alternate Products</h3>
            <ul class="product_loop" id="productLoopAlter">
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
            <div class="productLoopNaviIcons navi7">
                <a href="" id="next7"><i class="fas fa-angle-right"></i></a>
                <a href="" id="prev7"><i class="fas fa-angle-left"></i></a>
            </div>
        </div>
    </div>

</div>


<?php include "includes/footer.php" ?>

</body>
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.caroufredsel/6.2.1/jquery.carouFredSel.packed.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">
$(function(){
    $('#productImageSlider').carouFredSel({
        responsive:true,
        width:"100%",
        // auto:false,
        pagination: {
            container: ".pag5",
        },
        prev:"#prev5",
        next:"#next5",
        items:{
            width:300,
            visible:{
                min:1,
                max:1
            }
        },
        swipe:{
            onTouch:1
        }
    })

    $('#productLoop').carouFredSel({
        responsive:true,
        width:"100%",
        // auto:false,
        prev:"#prev6",
        next:"#next6",
        items:{
            width:350,
            visible:{
                min:1,
                max:6
            }
        },
        swipe:{
            onTouch:1
        }
    })

    $('#productLoopAlter').carouFredSel({
        responsive:true,
        width:"100%",
        // auto:false,
        prev:"#prev7",
        next:"#next7",
        items:{
            width:350,
            visible:{
                min:1,
                max:6
            }
        },
        swipe:{
            onTouch:1
        }
    })
})
</script>

</html>