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
<body class="checkout">

<?php include "includes/header.php" ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2 bg-white rounded mb-4 pt-3 pb-3 pr-4 pl-4">
            <h2>Checkout</h2>
            <p>Our official office hours is 9:00 AM to 6:00 PM Beijing Time, Monday to Friday. But our Customer Service Team is always ready to help 24/7 with your orders, and answer all your inquiries via live chat or email.</p>
            <hr>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <h5 class="w700">Not a member yet?</h5>
                    <p>Create your account now!</p>
                    <a href="" class="btn btn-primary btn-rounded-corner">Continue</a>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <h5 class="w700">Login</h5>
                    <p>Already registered?</p>
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-rounded-corner">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <form class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2 pl-0 pr-0">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        01. Shipping Address
                        </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <h4 class="w700">Choose your address</h4>
                            <p class="text-dark w700 mb-4">Where would you like us to deliver your shopping</p>
                            <p class="text-dark"><strong>Mr. Dhanushka Srinath</strong><br>
                            No 45 Thamar Ne,<br>
                            Apt 45 g floor<br>
                            United Arab Emirates</p>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label class="w700">
                                            <input type="checkbox" name=""> Ship to this address
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 text-right">
                                    <a href="" class="btn btn-light btn-rounded-corner">Edit</a>
                                </div>
                            </div>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-2 col-md-2">
                                    <label>Title</label>
                                    <select class="form-control">
                                        <option>Mr.</option>
                                        <option>Mrs.</option>
                                        <option>Miss.</option>
                                        <option>Dr.</option>
                                        <option>Hon.</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-sm-10 col-md-10">
                                    <label>Your Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address1" class="form-control mb-2">
                                <input type="text" name="address2" class="form-control">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-12 col-md-6">
                                    <label>Area</label>
                                    <input type="text" name="area" class="form-control">
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-6">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-12 col-md-6">
                                    <label>Home Number</label>
                                    <input type="tel" name="hphone" class="form-control">
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-6">
                                    <label>Mobile Number</label>
                                    <input type="tel" name="mphone" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Instructions</label>
                                <textarea type="text" name="instructions" class="form-control"></textarea>
                                <p>Tell us anything we should know when delivering your order.</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label class="w700">
                                            <input type="checkbox" name=""> Ship to this address
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 text-right">
                                    <a href="" class="btn btn-light btn-rounded-corner">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        02. Delivery Time Slot
                        </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-12 col-md-6">
                                    <label>Select a day</label>
                                    <select name="" class="form-control">
                                        <option>Today, Oct 08</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-6">
                                    <label>Select a time slot</label>
                                    <select name="" class="form-control">
                                        <option>11:00 - 13:30</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mt-5">
                                <div class="form-group col-12 col-sm-12 col-md-8">
                                    <p>Our Terms of Service and Privacy Policy have been updated. By continuing to use Park n Shop, you agree to the updated Terms and Privacy Policy</p>
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-4 text-right">
                                    <button type="submit" class="btn btn-primary  btn-rounded-corner">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        03. Select Payment Method
                        </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group">
                                <label><input type="radio" name="payment_method"> PayPal</label>
                            </div>
                            <div class="form-group">
                                <label><input type="radio" name="payment_method"> Credit / Debit Card</label>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <p>Orders above AED XXX there is no delivery charge.</p>
                                </div>
                                <div class="col-12 col-sm-6 text-right">
                                    <a href="" class="btn btn-light btn-rounded-corner">Back</a>
                                    <a href="" class="btn btn-primary btn-rounded-corner">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        04. Order overview
                        </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse order-overview" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 substitutions">
                                    <h5 class="w700 mb-4">Substitutions</h5>
                                    <div class="form-group">
                                        <label class="h6"><input type="radio" name="payment_method"> Call me to substitute unavailable items</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="h6"><input type="radio" name="payment_method"> Don’t call me, just substitute</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="h6"><input type="radio" name="payment_method"> Don’t deliver unavailable items, dont’t call</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4">
                                    <h5 class="w700 mb-4">Delivery Address</h5>
                                    <p class=" text-dark">Mr. Dhanushka Karunda<br>
                                    No 45 Thamar Ne,<br>
                                    Apt 45 g floor<br>
                                    United Arab Emirates</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4">
                                    <h5 class="w700 mb-4">Delivery Time</h5>
                                    <p class=" text-dark">Today, Sep 09<br>19:00 - 21:00</p>
                                    <h5 class="w700 mb-4">Payment Method</h5>
                                    <p class=" text-dark">Card on Delivery</p>
                                </div>
                            </div>
                            <hr>
                            <table class="table cart-table">
                                <thead>
                                    <th colspan="2">Product</th>
                                    <th>Price</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-right">Sub Total<br><small>Incl.VAT</small></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-cart-image"><a href=""><img src="img/mini-cart-img.png" class="img-fluid"></a></td>
                                        <td class="product-name">
                                            <div class="name">
                                                <h2><a href="">Lay's Potato Chips Cream 50G</a></h2>
                                            </div>
                                        </td>
                                        <td class="cart-price"><span class="price">AED2.00</span></td>
                                        <td class="cart-qty text-center">03</td>
                                        <td class="text-right cart-price product-cart-total"><span class="price">AED2.00</span></td>
                                    </tr>
                                    <tr>
                                        <td class="product-cart-image"><a href=""><img src="img/mini-cart-img.png" class="img-fluid"></a></td>
                                        <td class="product-name">
                                            <div class="name">
                                                <h2><a href="">Lay's Potato Chips Cream 50G</a></h2>
                                            </div>
                                        </td>
                                        <td class="cart-price"><span class="price">AED2.00</span></td>
                                        <td class="cart-qty text-center">03</td>
                                        <td class="text-right cart-price product-cart-total"><span class="price">AED2.00</span></td>
                                    </tr>
                                </tbody>
                                <tfoot class=""> <!-- Removed D-block class -->
                                    <tr>
                                        <td colspan="4" class="h6">Subtotal</td>
                                        <td class="text-right h6">AED2.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class=" h6">Delivery incl.Vat 5%</td>
                                        <td class="text-right h6">AED2.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="w700 h6">Order total</td>
                                        <td class="text-right w700 h6">AED2.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="w700 h6">Taxable amount</td>
                                        <td class="text-right w700 h6">AED2.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="w700 h6">Tax amount</td>
                                        <td class="text-right w700 h6">AED2.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="w700 h5 text-primary">Total Payable</td>
                                        <td class="text-right w700 h5 text-primary">AED2.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="h6"><p>*AED 15.7 will be charged for orders below AED 100</p></td>
                                    </tr>
                                    <tr class="border-top">
                                        <td colspan="3" class="lead">
                                            <label>
                                                <input type="checkbox" name=""> Click here to accept <a href="" class="text-dark w700">terms and conditions</a>
                                            </label>
                                        </td>
                                        <td colspan="2" class="text-right w700 h5 text-primary">
                                            <a href="" class="btn btn-light btn-rounded-corner">Back</a>
                                            <button class="btn btn-primary btn-rounded-corner">Order now</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </form>
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