<?php 
session_start();


if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: index.php");
}

$cookie_name = "user";
$cookie_value = "User";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<html>
<body>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>MealBox</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/mealbox.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-center">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>


                        </ul>

                        <div class="dropdown show">
                            <a class="tickets_btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                <?php if (!isset($_SESSION['username'])) : ?>
                                <a class="dropdown-item" href="loginRegister.php"
                                    id="dropdownGreetings">Login/Register</a>
                                <?php endif ?>

                                <?php if (isset($_SESSION['username'])) : ?>
                                <a class="dropdown-item" href="profile.php?logout='1'" id="dropdownGreetings">Hello,
                                    <?php echo $_SESSION['username']; ?></a>
                                <a class="dropdown-item" href="indexForLogin.php?logout='1'"
                                    id="dropdownGreetings">Logout</a>
                                <?php endif ?>

                            </div>
                        </div>





                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content">
                            <h2>Healthy Food,<br /> Specially Crafted</h2>
							<a class="banner_btn" href="about-us.php">Learn More</a>
							
                            <a class="banner_btn2" href="menu.php">Order Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->




    <!--================Work Area =================-->

    <section class="work_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>WHAT IS A MEALBOX?</h2>
                <p>We'll send you delicious recipes and ingredients every week.</p>
            </div>
            <div class="container">
                <div class="made_life_inner">
                    <div class="row made_life_text">
                        <div class="col-lg-6">
                            <div class="left_side_text">
                                <h3>Freshly picked ingredients</h3>
                                <h6>Ingredients delivered on a daily basis</h6>
                                <p>Organic ingredients harvested from responsible sources of the highest quality</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="chart_img">
                                <img class="img-fluid" src="img/foodbox.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="made_life_inner">
                        <div class="row made_life_text">
                            <div class="col-lg-6">
                                <div class="chart_img2">
                                    <img class="img-fluid" src="assets/ingredients.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="left_side_text">
                                    <h3>Cooked healthily</h3>
                                    <h6>Free from trans-fat</h6>
                                    <p>We only use olive oil to cook</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="made_life_inner">
                        <div class="row made_life_text">
                            <div class="col-lg-6">
                                <div class="left_side_text">
                                    <h3>Nutritionally balanced</h3>
                                    <h6>Essentials covered</h6>
                                    <p>We got you covered on all the vitaimins your body need</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="chart_img">
                                    <img class="img-fluid" src="assets/nutrition.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <!--================End Work Area =================-->

    <!--================Made Life Area =================-->
    <section class="made_life_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>WHAT IS INSIDE A MEALBOX?</h2>
                <p>We'll send you delicious recipes and ingredients every week.</p>
            </div>
            <div class="made_life_inner">


                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                            aria-selected="true">Recyclable packaging</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Perfectly portioned amounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Nutritional Factsheet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="edge-tab" data-toggle="tab" href="#edge" role="tab" aria-controls="edge"
                            aria-selected="false">Organic Food</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row made_life_text">
                            <div class="col-lg-6">
                                <div class="left_side_text">
                                    <h3>Paper box and utensils <br />for the better</h3>
                                    <p>Not only do we want to provide you with healthy and delicious food, we are also
                                        doing good on your behalf by making this MealBox packaging highly recycable</p>
                                    <a class="main_btn" href="#">Get Started Now</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="chart_img">
                                    <img class="img-fluid" src="img/foodbox.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row made_life_text">
                            <div class="col-lg-6">
                                <div class="left_side_text">
                                    <h3>No leftovers</h3>
                                    <p>We have crafted this MealBox according to the average portion size so that there
                                        will be no wastage.</p>
                                    <a class="main_btn" href="#">Get Started Now</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="chart_img">
                                    <img class="img-fluid" src="img/foodbox.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row made_life_text">
                            <div class="col-lg-6">
                                <div class="left_side_text">
                                    <h3>Being health conscious</h3>
                                    <p>We got you covered for those who are curious about what nutritional benefits a
                                        MealBox brings about.</p>
                                    <a class="main_btn" href="#">Get Started Now</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="chart_img">
                                    <img class="img-fluid" src="img/foodbox.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="edge" role="tabpanel" aria-labelledby="edge-tab">
                        <div class="row made_life_text">
                            <div class="col-lg-6">
                                <div class="left_side_text">
                                    <h3>All the natural goodness</h3>
                                    <h6>We are here to listen from you deliver exellence</h6>
                                    <p>No pesticides are used in your food!</p>
                                    <a class="main_btn" href="#">Get Started Now</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="chart_img">
                                    <img class="img-fluid" src="img/foodbox.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Made Life Area =================-->




    <!--================Price Area =================-->
    <section class="price_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Choose Your Box</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            </div>
            <div class="price_inner row">
                <div class="col-lg-4">
                    <div class="price_item">
                        <div class="price_head">
                            <h4>Vegan Box</h4>
                        </div>
                        <div class="price_body">
                            <ul class="list">
                                <li><a href="#">Helps you to loose excess weight</a></li>
                                <li><a href="#">Lower your blood sugar level</a></li>
                                <li><a href="#">Linked to lower risk of heart diseases</a></li>
                            </ul>
                        </div>
                        <div class="price_footer">
                            <h3><span class="dlr">$</span> 199 <span class="month">Per <br />Month</span></h3>
                            <a class="main_btn" href="#">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price_item">
                        <div class="price_head">
                            <h4>Fruity Box</h4>
                        </div>
                        <div class="price_body">
                            <ul class="list">
                                <li><a href="#">Low in fat, sodium and calories</a></li>
                                <li><a href="#">Packs a bunch of essential nutrients</a></li>
                                <li><a href="#">Linked to lower risk of heart diseases</a></li>
                            </ul>
                        </div>
                        <div class="price_footer">
                            <h3><span class="dlr">$</span> 299 <span class="month">Per <br />Month</span></h3>
                            <a class="main_btn" href="#">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price_item">
                        <div class="price_head">
                            <h4>Bulk Box</h4>
                        </div>
                        <div class="price_body">
                            <ul class="list">
                                <li><a href="#">Rich in protein</a></li>
                                <li><a href="#">Packs a bunch of essential nutrients</a></li>
                                <li><a href="#">White meat</a></li>
                            </ul>
                        </div>
                        <div class="price_footer">
                            <h3><span class="dlr">$</span> 499 <span class="month">Per <br />Month</span></h3>
                            <a class="main_btn" href="#">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--================End Price Area =================-->




    <!--================Impress Area =================-->
    <section class="impress_area p_120">
        <div class="container">
            <div class="impress_inner">
                <h2>Ready to order?</h2>
                <p>Choose from a variety of food in our menu.</p>
                <a class="banner_btn2" href="menu.html">Order Now</a>
            </div>
        </div>
    </section>
    <!--================End Impress Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area p_120">
        <div class="container">
            <div class="row footer_inner">
                <div class="col-lg-5 col-sm-6">
                    <aside class="f_widget ab_widget">
                        <div class="f_title">
                            <h3>About Us</h3>
                        </div>
                        <p>Our comapny strongly believes that organic food should be affordable by everyone. With
                            MealBox, we hope to bring healthy and delicious a step closer to everyone.</p>
                        <p>
                    </aside>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <aside class="f_widget news_widget">
                        <div class="f_title">
                            <h3>Sign up for updates</h3>
                        </div>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Enter email address"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
                                        required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-2">
                    <aside class="f_widget social_widget">
                        <div class="f_title">
                            <h3>Follow Us</h3>
                        </div>
                        <ul class="list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>