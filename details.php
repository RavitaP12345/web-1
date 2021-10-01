<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">

</head>

<body>
    <!-- top bar start -->
    <div id="top">
        <div class="container">
            <!-- col-md-6 open -->
            <div class="col-md-6" offer>
                <a href="#" class="btn btn-success btn-sm">
                    Welcome Guest
                </a>
                <a href="#">
                    Shopping Cart Total Price : INR 100, Total item 2
                </a>
            </div>
            <!-- col-md-close -->
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="customer_registration.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go to cart</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>

            </div>
        </div>

    </div>
    <!-- top bar stop -->
    <!-- navbar start -->
    <div class="navbar navbar-default" id="navbar">
        <div class="navbar-header">
            <a class="navbar-brand home" href="index.php">
                <img src="images/—Pngtree—online shopping logo_6519669.png" alt="logo" height="70px" width="100px">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fas fa-align-justify"></i>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
                <span class="sr-only"></span>
                <i class="fas fa-search"></i>

            </button>

        </div>
        <!-- navigation bar start -->
        <div class="navbar-collapse collapse" id="navigation">
            <!-- padding nav start -->
            <div class="padding-nav">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="index.php">Home</a>

                    </li>
                    <li class="active">
                        <a href="shop.php">shop</a>

                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>

                    </li>
                    <li>
                        <a href="cart.php">Shopping Cart</a>

                    </li>
                    <li>
                        <a href="about.php">About Us</a>

                    </li>
                    <li>
                        <a href="services.php">Services</a>

                    </li>
                    <li>
                        <a href="contactus.php">Contact Us</a>

                    </li>

                </ul>

            </div>
            <!-- padding nav start -->
            <a href="cart.php" class="btn btn-primary navbar-btn right">
                <i class="fas fa-shopping-cart"></i>
                <span>4 Items In Cart</span>
            </a>
            <div class="navbar-collapse collapse right">
                <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only"> Toggle Search</span>
                    <i class="fas fa-search"></i>


                </button>

            </div>
            <div class="collapse clearfix" id="search">
                <form class="navbar-form" method="GET" action="result.php">
                    <div class="input-group">
                        <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                        <span class="input-group-btn">
                            <button type="submit" value="Search" name="search" class="btn btn-primary">
                                <i class="fas fa-search"></i>

                            </button>
                        </span>

                    </div>
                </form>

            </div>

        </div>
        <!-- navigation bar stop -->

    </div>
    <!-- navbar stop -->
    <div id="content">
        <!-- content start -->
        <div class="container">
            <!-- container start -->
            <div class="col-md-12">
                <!-- col md start -->
                <ul class="breadcrumb">
                    <!-- breadcrumb start -->
                    <li><a href="index.php">Home</a></li>
                    <li>
                        Shop
                    </li>

                </ul>
                <!-- beadcrumb close -->

            </div>
            <!-- col md close -->
            <div class="col-md-3">
                <!-- col-md-3 start -->
                <?php
                include("includes/sidebar.php");
                ?>
            </div>
            <!-- col-md-3 close -->
            
            <div class="col-md-9">
                <!-- col md 9 start -->
                <div class="row" id="productmain">
                    <!-- row start -->
                    <div class="col-sm-6">
                        <!-- col-sm-6 start -->
                        <div id="mainimage">
                            <!-- mainimage start -->
                            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="myCarousel" data-slide-to="0" class="action"></li>
                    <li data-target="myCarousel" data-slide-to="1"></li>
                    <li data-target="myCarousel" data-slide-to="2"></li>





                </ol>
                <!-- carousel-inner start -->
                <div class="carousel-inner">
                    <!-- item active start -->
                    <div class="item active">
                        <img src="admin_area/product_images/saree3.jpg" class="img-responsive">

                    </div>
                    <div class="item">
                        <img src="admin_area/product_images/saree4.jpg" class="img-responsive">

                    </div>
                    <div class="item">
                        <img src="admin_area/product_images/saree6.jpg" class="img-responsive">

                    </div>
                    <!-- items close -->
    

                </div>
                <!-- carousel-inner stop -->

            </div>
            <!-- carousel slide stop -->
            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>

            </a>
            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>

            </a>
            

                            </div>

                        </div>
                        <!-- main image close -->

                    </div>
                    <!-- col-sm-6 close -->


                </div>
                <!-- row close -->
            </div>
            <!-- col md 9 close -->




        </div>
        <!-- container close -->

    </div>
    <!-- content close -->
    <div id="footer">
        <!-- footer start -->
        <div class="container">
            <!-- container start -->
            <div class="row">
                <!-- row start -->
                <div class="col-md-3 col-sm-6">
                    <!-- col md start -->
                    <h4>Page</h4>
                    <ul>
                        <li><a href="cart.php">Shopping</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="shop.php">shop</a></li>
                        <li><a href="checkout.php">My Account</a></li>

                    </ul>
                    <hr>
                    <h4>User Section</h4>
                    <ul>
                        <li><a href="checkout.php">Login</a></li>
                        <li><a href="customer_registration.php">Registration</a></li>
                    </ul>
                    <hr class="hidden-md hidden-lg fidden-sm">

                </div>
                <!-- col md close -->
                <div class="col-md-3 col-sm-6">
                    <!-- col-md-3 start -->
                    <h4>Top Product Ctegories</h4>
                    <ul>
                        <li><a href="#">Jacket</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Coat</a></li>
                        <li><a href="#">T-Shirt</a></li>
                    </ul>
                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- col-md-3 close -->
                <div class="col-md-3 col-sm-6">
                    <!-- col-md-3 start -->
                    <h4>Where to find us</h4>
                    <p>
                        <strong>Teehosting.com</strong>
                        <br>Basapar
                        <br>Maharajganj
                        <br>Uttar Pradesh
                        <br>ravitaprajapati435@gmail.com
                        <br>+91 7880508014
                    </p>
                    <a href="contact.php"> Goto Contact us page</a>
                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- col-md-3 close -->
                <div class="col-md-3 col-sm-6">
                    <!-- col md start -->
                    <h4>Get the news</h4>
                    <p class="text-muted">
                        Subscribe here for getting news of Maharajganj Uttar Pradesh

                    </p>
                    <form action="" method="POST">
                        <div class="input-group">
                            <input type="text" name="email" class="form-control">
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-default" value="subscribe">
                            </span>

                        </div>

                    </form>
                    <hr>
                    <h4>Stay In Touch</h4>
                    <p class="social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram-square"></i></a>

                    </p>

                </div>
                <!-- col md close -->

            </div>
            <!-- row cloase -->

        </div>
        <!-- container close -->

    </div>
    <!-- footer close -->
    <div id="copyright">
        <!-- copyright section start -->
        <div class="container">
            <!-- container start -->
            <div class="col-md-6">
                <!-- col md start -->
                <p class="pull-left">
                    &copy; 2019 Tamplate By: Er. Ravita Prajapati

                </p>

            </div>
            <!-- col md cloase -->
            <div class="col-md-6">
                <div class="pull-right">
                    Tamplate By: <a href="www.Teehosting.com">Teehosting.com</a>
  
                </div>


            </div>
        </div>
        <!-- container close -->


    </div>
    <!-- copyright section close -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
            </body>
            </html>