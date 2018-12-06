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
<body>

<?php include "includes/header.php" ?>

<div class="container mt-5 mb-5 thanksyou-reg">
    <div class="row bg-white rounded align-items-center">
        <div class="col-12 col-sm-12 col-md-6 pl-5">
            <h2 class="h1">Thank you for Registering</h2>
            <p>From your My Account Dashboard you have ability to view a snapshot of your recent account activities and update your account information</p>
        </div>
        <div class="col-12 col-sm-12 col-md-6 pt-5 pb-5">
            <img src="img/reg-thanks.png" class="img-fluid">
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