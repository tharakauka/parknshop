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
<body class="inner">

<?php include "includes/header.php" ?>

<?php include "includes/categories.php" ?>

<div class="container mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Snacks</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chips <span>Showing 1-16 of 180 Products</span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
            <div class="side-bar">
                <div class="widget-area">
                    <h4 class="widget_title">Sort by</h4>
                    <div class="widget-body">
                        <div class="btn-group w-100" role="group" aria-label="Basic example">
                            <a href="" class="btn btn-link text-secondary sort-by-price">Price</a>
                            <a href="" class="btn btn-link">Special Offer</a>
                        </div>
                    </div>
                </div>
                <div class="widget-area">
                    <h4 class="widget_title">Filter by</h4>
                    <div class="widget-body"> 
                        <h5 class="widget_sub_title">Brand</h5>
                        <div class="form-group"><label><input type="checkbox" name="">Keebler</label></div>
                        <div class="form-group"><label><input type="checkbox" name="">Oreo</label></div>
                        <div class="form-group"><label><input type="checkbox" name="">Nabisco</label></div>
                        <div class="form-group"><label><input type="checkbox" name="">Lays</label></div>
                        <div class="form-group"><label><input type="checkbox" name="">Archway</label></div>
                        <hr>
                        <h5 class="widget_sub_title">Price</h5>
                        <div class="form-row">
                            <div class="form-group col-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-1">to</div>
                            <div class="form-group col-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-3">
                                <button class="btn btn-link border-0">Go</button>
                            </div>
                        </div>
                        <hr>
                        <div class="special-filter">
                            <div class="form-group"><label>Big Bonus<input type="checkbox" name=""></label></div>
                            <div class="form-group"><label>New Products<input type="checkbox" name=""></label></div>
                            <div class="form-group"><label>Online Offers<input type="checkbox" name=""></label></div>
                            <div class="form-group"><label>Special Offers<input type="checkbox" name=""></label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
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
            </ul>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <img src="img/dang.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <img src="img/frozen-pizza.png" class="img-fluid" alt="">
                </div>
            </div>
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
            </ul>
            <div class="padination-pager col">
                <div class="row">
                    <nav class="col">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-caret-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-caret-right"></i></a></li>
                        </ul>
                    </nav>
                    <div class="col d-none d-sm-none d-md-block d-lg-block d-xl-block text-right">
                        <div class="form-inline">
                            <div class="form-group">
                                Go to Page <input type="text" name="" value="7" class="form-control"><button class="btn btn-link">Go</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section_two mb-5">
    <div class="container">
        <img src="img/area4.jpg" class="img-fluid" alt="">
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

<script type="text/javascript">
$(function(){
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
    $('.brands').carouFredSel({
        responsive:true,
        width:"100%",
        // auto:false,
        prev:"#prev2",
        next:"#next2",
        items:{
            width:240,
            visible:{
                min:1,
                max:6
            }
        },
        swipe:{
            onTouch:1
        }
    })

    $('.testimonial').carouFredSel({
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
    })

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('.widget_title').click(function(){
            if($(this).hasClass('widget-open')){
                $(this).parent().children('.widget-body').slideUp().removeClass('showing-widget');
                $(this).removeClass('widget-open');
            }else{
                $(this).parent().children('.widget-body').slideDown().addClass('showing-widget');
                $(this).addClass('widget-open');
            }
        })
    }
})
</script>

</html>