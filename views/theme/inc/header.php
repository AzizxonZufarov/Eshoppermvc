
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="<?=THEME?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=THEME?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=THEME?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=THEME?>css/price-range.css" rel="stylesheet">
    <link href="<?=THEME?>css/animate.css" rel="stylesheet">
	<link href="<?=THEME?>css/main.css" rel="stylesheet">

	<link href="<?=THEME?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=THEME?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=THEME?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=THEME?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=THEME?>images/ico/apple-touch-icon-57-precomposed.png">
<script type="text/javascript" src="<?=THEME?>js/jquery.min.js"></script>
<script>
window.onload = function () {
    window.scrollTo(0, 0);
};


</script>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +998 91 060 30 02</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> bionorica2015@mail.ru</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="facebook.com"><i class="fa fa-facebook"></i></a></li>
								<li><a href="twitter.com"><i class="fa fa-twitter"></i></a></li>
								<li><a href="linkedin.com"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="google.com"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php" class="logo" ><img src="<?=THEME?>images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
<!--								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>-->
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                <?
               $id = $_SESSION['id'];
                 if($_SESSION['id']){?>
                   <li><a href="cab.php?id=<?=$id?>"><i class="fa fa-lock"></i> Cabinet</a></li>
         <?}else{?>
                   <li><a href="login.php"><i class="fa fa-lock"></i> Login&Register</a></li>
      <?}?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
              <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="index.php" class="active">Home</a></li>

                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="#">Tripod Blog</a></li>
                    <li><a href="#">Clean Blog</a></li>
                                    </ul>
                                </li>

                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">

          </div>
        </div>
      </div>
    </div><!--/header-bottom-->
	</header><!--/header-->
