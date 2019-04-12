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
    <title>MealBox Menu</title>
    <script
        src="https://www.paypal.com/sdk/js?client-id=AWT5XmUJzfan6sgMb_CQ_KbcENLrAvZJKFfqvFoeTSLgjuRb2X5o5XkITeGIfWbBlpnVaaVjVD1nw3e5">
    </script>

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
                    <h2>Menu</h2>

                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->



    <section class="price_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>FOOD MENU</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            </div>
            <div class="price_inner row">



                <div class="col-lg-4">
                    <div class="price_item">

                        <div class="price_body">
                            <img src="assets/protein.jpg" id="menuImage">
                        </div>
                        <div class="price_footer_2">
                            <?php 
							

								$db = mysqli_connect('localhost', 'root', 'ChesterYee26', 'mealbox');

								if (mysqli_connect_errno()) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}


								$menuQuery = "SELECT menuName, menuIngredients FROM menus LIMIT 1";
								$menuResults = mysqli_query($db, $menuQuery);

									while($row=mysqli_fetch_array($menuResults)) {
										echo "<span>".$row['menuName']."</span>"."<br>".$row['menuIngredients'];
										echo"<br>";
									}
								

						
								

								



						
								mysqli_close($db);

							?>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="price_item">

                        <div class="price_body">
                            <img src="assets/avocado.jpg" id="menuImage">
                        </div>
                        <div class="price_footer_2">
						<?php 
							

							$db = mysqli_connect('localhost', 'root', 'ChesterYee26', 'mealbox');

							if (mysqli_connect_errno()) {
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}


							$menuQuery = "SELECT menuName, menuIngredients FROM menus LIMIT 2,1";
							$menuResults = mysqli_query($db, $menuQuery);

								while($row=mysqli_fetch_array($menuResults)) {
									echo "<span>".$row['menuName']."</span>"."<br>".$row['menuIngredients'];
									echo"<br>";
								}
							

					
							

							



					
							mysqli_close($db);

						?>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="price_item">

                        <div class="price_body">
                            <img src="assets/fruits.jpg" id="menuImage">
                        </div>
                        <div class="price_footer_2">
						<?php 
							

							$db = mysqli_connect('localhost', 'root', 'ChesterYee26', 'mealbox');

							if (mysqli_connect_errno()) {
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}


							$menuQuery = "SELECT menuName, menuIngredients FROM menus LIMIT 3,2";
							$menuResults = mysqli_query($db, $menuQuery);

								while($row=mysqli_fetch_array($menuResults)) {
									echo "<span>".$row['menuName']."</span>"."<br>".$row['menuIngredients'];
									echo"<br>";
								}
							

					
							

							



					
							mysqli_close($db);

						?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


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
                            <div id="paypal-button-container"></div>

                            <script src="https://www.paypalobjects.com/api/checkout.js"></script>

                            <script>
                            paypal.Button.render({

                                env: 'sandbox',

                                style: {
                                    label: 'paypal',
                                    size: 'medium', // small | medium | large | responsive
                                    shape: 'rect', // pill | rect
                                    color: 'black', // gold | blue | silver | black
                                    tagline: false
                                },

                                client: {
                                    sandbox: 'AWT5XmUJzfan6sgMb_CQ_KbcENLrAvZJKFfqvFoeTSLgjuRb2X5o5XkITeGIfWbBlpnVaaVjVD1nw3e5',
                                },

                                payment: function(data, actions) {
                                    return actions.payment.create({
                                        payment: {
                                            transactions: [{
                                                amount: {
                                                    total: '199',
                                                    currency: 'SGD'
                                                }
                                            }]
                                        }
                                    });
                                },

                                onAuthorize: function(data, actions) {
                                    return actions.payment.execute().then(function() {
                                        window.alert('Payment Complete!');
                                    });
                                }

                            }, '#paypal-button-container');
                            </script>

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
                            MealBox, we hope to
                            bring healthy and delicious a step closer to everyone.</p>
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



    </head>
</body>

</html>