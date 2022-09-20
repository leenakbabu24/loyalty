<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-STORE</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <ul class="nav navbar-nav ml-auto">
                        <li>
                            <a href="" class="nav-link">
                                <h4><i class="fa fa-phone"></i>9865245781</h4>
                            </a>
                        </li>
                        <li>
                            <a href="" class="nav-link">
                                <h4><i class="fa fa-envelope"></i>estore@gmail.com</h4>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="nav navbar-nav ml-auto">
                        <li>
                            <a href="#" class="nav-link"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="dist/img/AdminLTELogo.jpg" width="50px" height="50px">E-STORE</a></h1>
                    </div>
                </div>


            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/index"><i class="fa fa-home" aria-hidden="true">Home</i></a></li>
                        <li><a href="/edit_profile1"><i class="fa fa-edit" aria-hidden="true">Edit Profile</i></a></li>
                        <li><a href="/view_product2"><i class="fa fa-product-hunt" aria-hidden="true">View Product</i></a></li>
                        <li><a href="/add_feedback"><i class="fa fa-comments" aria-hidden="true">Add Feedback</i></a></li> 
                        <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true">Logout</i></a></li>   
                    </ul>
                
                    <div style="float: right;">
                        <a href="/cart_detail"><i class="fa fa-shopping-cart" aria-hidden="true">Cart</i></a>
                        </div>
                </div>
            </div>
                        </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->



    @yield('customersection')


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="footer-about-us">
                    <h2><span>LOYAL</span></h2>
                        <p>Welcome to The LOYAL Electronic Store. We are a retail chain providing a variety of electronics, cell phones, hobby equipment, batteries & more.</p>

                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile Phone</a></li>
                            <li><a href="#">Home accesseries</a></li>
                            <li><a href="#">LED TV</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">Gadets</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="/js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="/js/main.js"></script>

    <!-- Slider -->
    <script type="text/javascript" src="/js/bxslider.min.js"></script>
    <script type="text/javascript" src="/js/script.slider.js"></script>
</body>

</html>