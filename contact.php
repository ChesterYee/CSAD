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
    <title>MealBox Contact</title>
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
                    <h2>CONTACT US</h2>


                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->









    <!--================Contact Area =================-->


    <section class="contact_area p_120">
        <div class="main_title">
            <h2>LEADERSHIP</h2>
            <div class="container">
                <div class="team_inner row">
                    <div class="col-lg-3">
                        <div class="team_item">

                            <div class="team_body">
                                <ul class="list">
                                    <img src="assets/profile1.JPG">
                                </ul>
                            </div>
                            <div class="team_footer">
                                <hr>
                                <br>
                                <h3>CHESTER YEE</h3>
                                <h6>CEO</h6>
                                <h6>1718476</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team_item">

                            <div class="team_body">
                                <ul class="list">
                                    <img src="assets/profile10.png">
                                </ul>
                            </div>
                            <div class="team_footer">
                                <hr>
                                <br>
                                <h3>FANG CHEN HAO</h3>
                                <h6>CTO</h6>
                                <h6>1718009</h6>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team_item">

                            <div class="team_body">
                                <ul class="list">

                                    <img src="assets/profile11.JPG">
                                </ul>
                            </div>
                            <div class="team_footer">
                                <hr>
                                <br>
                                <h3>JOSEPH CHOW </h3>
                                <h6>CFO</h6>
                                <h6>1719365</h6>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="team_item">

                            <div class="team_body">
                                <ul class="list">

                                    <img src="assets/profile4.JPEG">
                                </ul>
                            </div>
                            <div class="team_footer">
                                <hr>
                                <br>
                                <h3>NICHOLAS THEONG</h3>
                                <h6>COO</h6>
                                <h6>170</h6>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </div>
    </div>
    <div class="container">
        <div id="mapBox" class="mapBox" data-lat="1.309687" data-lon="103.777343" data-zoom="17"
            data-info="Singpaore Polytehnic" data-mlat="1.309687" data-mlon="103.777343">
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <!-- LINEAR ICONS-->
                        <i class="lnr lnr-home"></i>
                        <h6>Singapore Polytechnic</h6>
                        <p>
                            500 Dover Rd, <br>
                            Singapore 39651
                        </p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">6791 1294</a></h6>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">hello@mealbox.com</a></h6>
                        <p>Feeling peckish? Talk to us!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1"
                                placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
    <!--================Contact Area =================-->

    <!--================Testimonials Area =================-->
    <section class="testimonials_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>SEE WHAT OUR CUSTOMERS HAVE TO SAY</h2>
                <p>Our customers just keep coming back to us for our organic and healthy food!</p>
            </div>
            <div class="testi_slider owl-carousel">
                <div class="item">
                    <div class="testi_item">
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/profile5.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>The Vegan Box is really delicious! You should try it out right now.</p>
                                <h4>Scott Sia</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/profile6.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>This is food delivery at its finest. A surprise MealBox everyday keeps me excited
                                    for my meals! </p>
                                <h4>Gaby</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/profile9.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>Food is simply delicious, cannot wait to order more in the near future!</p>
                                <h4>Rayson Chia</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/profile8.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>Just let me have all the MealBox menus right now! One MealBox ain't enough for me</p>
                                <h4>Ong Jing Wei</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--================End Testimonials Area =================-->






    <!--================Contact Success and Error message Area =================-->
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
    <!--================End Contact Success and Error message Area =================-->




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
    <!-- contact js -->
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLyxTywxsUYDMpwXssMkg-6IOrtVfrW1g"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
