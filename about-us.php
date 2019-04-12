<?php 
session_start();


if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: index.php");
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>MealBox About</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
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
                                <a class="dropdown-item" href="loginRegister.php" id="dropdownGreetings">Login/Register</a>
                                <?php endif ?>

                                <?php if (isset($_SESSION['username'])) : ?>
                                <a class="dropdown-item" href="profile.php?logout='1'" id="dropdownGreetings">Hello,
                                    <?php echo $_SESSION['username']; ?></a>
                                <a class="dropdown-item" href="indexForLogin.php?logout='1'"
                                    id="dropdownGreetings">Logout</a>
                                <?php endif ?>

                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>About Us</h2>

                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->



    <section class="work_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Here's the fun</h2>
                <p>We'll send you delicious recipes and ingredients every week.</p>
            </div>
            <div class="work_inner row">
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-calendar-full"></i>
                        <a href="#">
                            <h4>Weekly Reminders</h4>
                        </a>
                        <p>We will remind you before any MealBox gets ship to your place.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-redo"></i>
                        <a href="#">
                            <h4>Skip Anytime</h4>
                        </a>
                        <p>You can skip a week of MealBox supplies anytime.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-clock"></i>
                        <a href="#">
                            <h4>Time Preference</h4>
                        </a>
                        <p>Have your MealBox shipped to you at a particular time, for free.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="work_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Something for everyone</h2>
                <p>We care for your dietary needs</p>
            </div>
            <div class="work_inner row">
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-dinner"></i>
                        <a href="#">
                            <h4>Portion</h4>
                        </a>
                        <p>Customise your MealBox for personal consumption or for sharing.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-leaf"></i>
                        <a href="#">
                            <h4>Speical Diet</h4>
                        </a>
                        <p>Vegan, Vegetarian and allergies to certain food? We got you covered.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-store"></i>
                        <a href="#">
                            <h4>Recipes</h4>
                        </a>
                        <p>We have a wide variety of recipes for you to choose from.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!--================Screen Area =================-->
    <section class="screen_area text-center p_120">
        <div class="container">
            <div class="main_title">
                <h2>REALLY DELICIOUS FOOD</h2>
                <p>Well seasoned and freshly prepared goodness stuffed inside your MealBox</p>
            </div>
            <img class="img-fluid" src="assets/ingredients.png" alt="" id="demoImages">
        </div>
    </section>

    <section class="screen_area text-center p_120">
        <div class="container">
            <div class="main_title">
                <h2>FAIR TRADE PRODUCTS ONLY</h2>
                <p>We strongly belive in using products that are fairly traded in the market</p>
            </div>
            <img class="img-fluid" src="assets/fairtrade.png" alt="" id="demoImages">
        </div>
    </section>
    <!--================End Screen Area =================-->




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
    <script src="js/mail-script.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>