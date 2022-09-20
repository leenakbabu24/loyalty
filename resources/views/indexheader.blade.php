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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
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
                <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
            </div>
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




                    <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div id="navbarCollapse" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
                    <li><a href="/index" class="nav-link">Home</a></li>
                   
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">REGISTER</a>
                        <ul class="dropdown-menu-dark">
                            <a href="/register_manager" class="dropdown-item">MANAGER</a>
                            <a href="/register_user" class="dropdown-item">USER</a>
    </ul>
                        </li>
    
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">LOGIN</a>
                        <ul class="dropdown-menu-dark">
                        <a href="login_admin" class="dropdown-item">ADMIN</a>
                            <a href="login_manager" class="dropdown-item">MANAGER</a>
                            <a href="login_user" class="dropdown-item">CUSTOMER</a>
    </ul>
                        </li>
                    
                <li class="nav-item">
                        <a href="/about_view" class="nav-link">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">CONTACT</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>    
</div> -->
                    <nav class="navbar navbar-expand-sm bg-info navbar-dark">


                        <!-- Links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/index">HOME</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    REGISTER
                                </a>
                                <div class="dropdown-menu">

                                    <a class="dropdown-item" href="/register_manager">MANAGER</a>
                                    <a class="dropdown-item" href="/register_user">CUSTOMER</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    LOGIN
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/login_admin">ADMIN</a>
                                    <a class="dropdown-item" href="login_manager">MANAGER</a>
                                    <a class="dropdown-item" href="login_user">CUSTOMER</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about_view">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">CONTACT</a>
                            </li>


                        </ul>
                    </nav>
                    <br>

                    @yield('indexsection')


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