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
<body class="contact-us">

<?php include "includes/header.php" ?>


<div class="container contact-us mt-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-7 col-lg-8">
            <div class="bg-white pl-4 pr-4 pt-4 pb-4 rounded">
                <h1 class="h2">Contact us</h1>
                <p>Our official office hours is 9:00 AM to 6:00 PM Beijing Time, Monday to Friday. But our Customer Service Team is always ready to help 24/7 with your orders, and answer all your inquiries via live chat or email.</p>
                <hr>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="name">Your Name ( required )</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email ( required )</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="tel" name="mobile" id="mobile" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea rows="10" name="message" id="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-primary btn-lg btn-rounded-corner" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-5 col-lg-4">
            <div class="bg-white pl-4 pr-4 pt-4 pb-4 mb-4 rounded">
                <h2 class="h2">Contact Information</h2>
                <hr>
                <address>
                    Email : parknshop@parknshop.com <br>
                    Phone : +876567894324 <br>
                    Address : Guhandho City, Dubai <br>
                    Social Networks : <a href="" class="h5 pl-1 pr-1"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="h5 pl-1 pr-1"><i class="fab fa-instagram"></i></a>
                    <a href="" class="h5 pl-1 pr-1"><i class="fab fa-twitter"></i></a>
                </address>
            </div>
            <div class="bg-white pl-4 pr-4 pt-4 pb-4 rounded">
                <h2 class="h2">Location</h2>
                <hr>
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