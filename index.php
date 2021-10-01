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
                    <li class="active">
                        <a href="index.php">Home</a>

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
    <!-- container start -->
    <div class="container" id="slider">
        <!-- col-md-12 start -->
        <div class="col-md-12">
            <!-- carousel slide start -->
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="myCarousel" data-slide-to="0" class="action"></li>
                    <li data-target="myCarousel" data-slide-to="1"></li>
                    <li data-target="myCarousel" data-slide-to="2"></li>
                    <li data-target="myCarousel" data-slide-to="3"></li>
                    <li data-target="myCarousel" data-slide-to="4"></li>
                    <li data-target="myCarousel" data-slide-to="5"></li>
                    <li data-target="myCarousel" data-slide-to="6"></li>
                    <li data-target="myCarousel" data-slide-to="7"></li>





                </ol>
                <!-- carousel-inner start -->
                <div class="carousel-inner">
                    <!-- item active start -->
                    <div class="item active">
                        <img src="admin_area/slider_images/wallpaper1.jpg">

                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/wallpaper2.jpg">

                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/wallpaper3.jpg">

                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/wallpaper4.jpg">

                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/wallpaper5.jpg">

                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/wallpaper6.jpg">

                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/wallpaper7.jpg">

                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/wallpaper8.jpg">

                    </div>
                    <!-- item stop -->

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
        <!-- col=md-12 stop -->

    </div>
    <!-- container stop -->
    <div id="advantage">
        <!-- advantage start -->
        <div class="container">
            <!-- container start -->
            <div class="same-hight-row">
                <!-- same-hight-row start -->
                <div class="col-sm-4">
                    <!-- col-sm-4 start -->
                    <div class="box same-hight">
                        <!-- box same-hight start -->
                        <div class="icon">
                            <!-- icon start -->
                            <i class="fas fa-heart"></i>

                        </div>
                        <!-- icon stop -->
                        <h3><a href="#">Best Prices</a></h3>
                        <p>You can check on all others sites about the prices and than compare with us.</p>
                    </div>
                    <!-- box same-hight close -->

                </div>
                <!-- col-sm-4 close -->
                <div class="col-sm-4">
                    <!-- col-sm-4 start -->
                    <div class="box same-hight">
                        <!-- box same-hight start -->
                        <div class="icon">
                            <!-- icon start -->
                            <i class="fas fa-heart"></i>

                        </div>
                        <!-- icon stop -->
                        <h3><a href="#">Best Prices</a></h3>
                        <p>You can check on all others sites about the prices and than compare with us.</p>
                    </div>
                    <!-- box same-hight close -->

                </div>
                <!-- col-sm-4 close -->
                <div class="col-sm-4">
                    <!-- col-sm-4 start -->
                    <div class="box same-hight">
                        <!-- box same-hight start -->
                        <div class="icon">
                            <!-- icon start -->
                            <i class="fas fa-heart"></i>

                        </div>
                        <!-- icon stop -->
                        <h3><a href="#">Best Prices</a></h3>
                        <p>You can check on all others sites about the prices and than compare with us.</p>
                    </div>
                    <!-- box same-hight close -->

                </div>
                <!-- col-sm-4 close -->

            </div>
            <!-- same-hight-row close -->

        </div>
    <!-- container close -->

    </div>
    <!-- advantage close -->
    <div class="hot">
        <!-- hot start -->
        <div class="box">
            <!-- box start -->
            <div class="container">
                <!-- container start -->
                <div class="col-md-12">
                    <!--col md start -->
                    <h2> latest for this week</h2>

                </div>
                <!-- col-md close -->

            </div>
            <!-- container close -->

        </div>
        <!-- box close -->

    </div>
    <!-- hot close -->
    <div id="content" class="container">
        <!-- container start -->
        <div class="row">
            <!-- row srtart -->
            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm start -->
                <div class="product">
                    <!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/headphone1.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">HeadPhone</a></h3>
                        <p class="price">INR 299</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>

                    </div>

                </div>
                <!-- product stop -->

            </div>
            <!-- col-sm stop -->

            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm start -->
                <div class="product">
                    <!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/headphone1.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">HeadPhone</a></h3>
                        <p class="price">INR 299</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>

                    </div>

                </div>
                <!-- product stop -->

            </div>
            <!-- col-sm stop -->

            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm start -->
                <div class="product">
                    <!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/headphone1.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">HeadPhone</a></h3>
                        <p class="price">INR 299</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>

                    </div>

                </div>
                <!-- product stop -->

            </div>
            <!-- col-sm stop -->

            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm start -->
                <div class="product">
                    <!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/headphone1.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">HeadPhone</a></h3>
                        <p class="price">INR 299</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>

                    </div>

                </div>
                <!-- product stop -->

            </div>
            <!-- col-sm stop -->
            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm start -->
                <div class="product">
                    <!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/headphone1.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">HeadPhone</a></h3>
                        <p class="price">INR 299</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>

                    </div>

                </div>
                <!-- product stop -->

            </div>
            <!-- col-sm stop -->
            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm start -->
                <div class="product">
                    <!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/headphone1.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">HeadPhone</a></h3>
                        <p class="price">INR 299</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>

                    </div>

                </div>
                <!-- product stop -->

            </div>
            <!-- col-sm stop -->

            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm start -->
                <div class="product">
                    <!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/headphone1.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">HeadPhone</a></h3>
                        <p class="price">INR 299</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>

                    </div>

                </div>
                <!-- product stop -->

            </div>
            <!-- col-sm stop -->

            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm start -->
                <div class="product">
                    <!-- product start -->
                    <a href="details.php">
                        <img src="admin_area/product_images/headphone1.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">HeadPhone</a></h3>
                        <p class="price">INR 299</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>

                    </div>

                </div>
                <!-- product stop -->

            </div>
            <!-- col-sm stop -->




        </div>
        <!-- row stop -->

    </div>
    <!--container stop  -->
    <!-- footer start -->
    <?php
    include("includes/footer.php")
    
    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>