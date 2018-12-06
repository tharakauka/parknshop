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
<body class="cart">

<?php include "includes/header.php" ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-8 col-lg-9">
            <div class="bg-white rounded pl-4 pr-4 pt-4 pb-4">
                <h2>Shopping Cart</h2>
                <p class="">Lay's Potato Chips Cream 50G was added to your shopping cart</p>
                <hr>
                <table class="table cart-table">
                    <thead>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th class="text-center">Qty</th>
                        <th class="text-right">Sub Total<br><small>Incl.VAT</small></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-cart-image"><a href=""><img src="img/mini-cart-img.png" class="img-fluid"></a></td>
                            <td class="product-name">
                                <div class="name">
                                    <a href="" class="text-dark d-block d-sm-block d-md-block d-lg-none"><i class="far fa-trash-alt"></i></a>
                                    <h2><a href="">Lay's Potato Chips Cream 50G</a></h2>
                                </div>
                            </td>
                            <td class="cart-price"><span class="price">AED2.00</span></td>
                            <td class="cart-qty">
                                <button class="btn btn-link text-dark">-</button>
                                <input type="text" class="form-control" name="">
                                <button class="btn btn-link text-dark">+</button>
                            </td>
                            <td class="text-right cart-price product-cart-total"><span class="price">AED2.00</span></td>
                            <td class="text-center cart-remove-product"><a href="" class="text-dark"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td class="product-cart-image"><a href=""><img src="img/mini-cart-img.png" class="img-fluid"></a></td>
                            <td class="product-name">
                                <div class="name">
                                    <a href="" class="text-dark d-block d-sm-block d-md-block d-lg-none"><i class="far fa-trash-alt"></i></a>
                                    <h2><a href="">Lay's Potato Chips Cream 50G</a></h2>
                                </div>
                            </td>
                            <td class="cart-price"><span class="price">AED2.00</span></td>
                            <td class="cart-qty">
                                <button class="btn btn-link text-dark">-</button>
                                <input type="text" class="form-control" name="">
                                <button class="btn btn-link text-dark">+</button>
                            </td>
                            <td class="text-right cart-price product-cart-total"><span class="price">AED2.00</span></td>
                            <td class="text-center cart-remove-product"><a href="" class="text-dark"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="1">
                                <a href="" class="btn btn-danger btn-rounded-corner">Empty Cart</a>
                            </td>
                            <td colspan="4" class="text-right">
                                <a href="" class="btn btn-light btn-rounded-corner">Update Cart</a>
                                <span> OR </span>
                                <a href="" class="btn btn-primary btn-rounded-corner">Continue Shopping</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-3 cart-sidebar">
            <div class="bg-white rounded pl-3 pr-3 pt-4 pb-1">
                <h5>Discount Code</h5>
                <form>
                    <div class="form-group">
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-light btn-rounded-corner">Apply</button>
                    </div>
                </form>
                <table class="table">
                    <tr class="border-bottom">
                        <td>Subtotal</td>
                        <td class="text-right">AED10.00</td>
                    </tr>
                    <tr>
                        <td><h4>Grand Total<br>(Incl. VAT)</h4></td>
                        <td class="text-right"><h4>AED12.30</h4></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-right"><button class="btn btn-primary btn-rounded-corner">Checkout</button></td>
                    </tr>
                </table>
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
})
</script>

</html>