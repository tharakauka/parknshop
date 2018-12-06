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

<div class="container mt-5 mb-5 sign-in">
    <div class="row align-items-center">
        <div class="col-12 col-sm-12 col-md-3"></div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="bg-white rounded pt-4 pr-4 pb-4 pl-4">
                <h1 class="h1">Sign in</h1>
                <hr>
                <form method="post" action="">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-row">
                        <div class="form-group text-center text-md-left col-12 col-sm-12 col-md-6">
                            <button class="btn btn-primary btn-rounded-corner">Sign in</button>
                        </div>
                        <div class="form-group text-center text-md-right col-12 col-sm-12 col-md-6">
                            <a href="#" class="btn btn-link">Forgot Password ?</a>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <p class="w700">New to Park n Shop ? Create an account</p>
                    <a href="#" class="btn btn-secondary btn-rounded-corner">Create account</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-3"></div>
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