<?php 
session_start();

    include("connection.php");
    include("function.php");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Desi Hattie</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.ico" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600|Pacifico" rel="stylesheet"> 

        <!-- Bootstrap CSS File -->
        <link href="vendor/bootstrap/css/bootstrapp.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="vendor/animate/animate.min.css" rel="stylesheet">
        <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Main Stylesheet File -->
        <link href="css/style1.css" rel="stylesheet">
    </head>

    <body>

        <!-- Top Header Start -->
        <!-- <section id="top-header">
            <div class="logo">
                <a href="index.html"><img src="img/logo.png" /></a> 
            </div>
        </section> -->
        <!-- Top Header End -->

        <!-- Header Start -->
        <header id="header">
            <div class="container">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                    <li class="logo" ><a href="index.php"><img src="img/logo.png" /></a> </li>
                        <li><a href="index.php">Home</a></li>
                        <li class="menu-active"><a href="about.php">About</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="cart.php">Online Order</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="profile.php">Profile</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Header End -->

        <!-- Reservations Section Start -->
        <section id="reservations">
            <div class="container">
                <header class="section-header">
                    <h3>Reservations</h3>
                </header>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="control-group col-sm-3">
                                <div class="form-group">
                                    <div class="input-group date" id="date" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" value="2022-05-14"
                                                    min="2022-05-14" max="2030-01-21" placeholder="Date" data-target="#date"/>
                                        <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                            <div class="input-group-text"></div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group col-sm-3">
                                <div class="form-group">
                                    <div class="input-group date" id="time" data-target-input="nearest">
                                        <input type="time" class="form-control datetimepicker-input" value="10:00" min="08:00" max="22:00"placeholder="Time" data-target="#time"/>
                                        <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                            <div class="input-group-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group col-sm-3">
                                <select class="custom-select">
                                    <option selected>Party Size</option>
                                    <option value="1">1 Person</option>
                                    <option value="2">2 People</option>
                                    <option value="3">3 People</option>
                                    <option value="4">4 People</option>
                                    <option value="5">5 People</option>
                                    <option value="6">6 People</option>
                                    <option value="7">7 People</option>
                                    <option value="8">8 People</option>
                                    <option value="9">9 People</option>
                                    <option value="10">10 People</option>
                                </select>
                            </div>
                            <div class="control-group col-sm-3">
                                <button class="btn btn-block btn-book">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Reservations Section End -->

        <!-- About Section Start-->
        <section id="about" style="background: #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-col-left"></div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-col-right">
                            <header class="section-header">
                                <h3>About Us</h3>
                            </header>
                            <ul class="icon">
                                <li><a href="https://freewebsitecode.com/" class="fa fa-twitter"></a></li>
                            <li><a href="https://www.facebook.com/FreeWebsiteCode/" class="fa fa-facebook"></a></li>
                            <li><a href="https://freewebsitecode.com/" class="fa fa-pinterest"></a></li>
                            <li><a href="https://www.youtube.com/channel/UC9HlQRmKgG3jeVD_fBxj1Pw/videos" class="fa fa-youtube"></a></li>
                            </ul>
                            <p>
                                Here at DESI HATTIE, we believe that the taste of food depends not only on the ingredients and the recipe but on the love with which the food is cooked and served. That is why our aim is not only to serve delicious food but to serve it with the utmost love as DHABA STYLE.  We are very focused on the taste buds of our guests and in our DHABA STYLE menu, we tried our best to put all the famous delicious of the DHABA. Every single corner of Roadside Dhaba's food is unique to that place. As we grab that test for you in our Sydney.
                            </p>
                            <p>
                                Desi Hattie is rich, plentiful, and meticulously prepared. Over thousands of years, the civilization has evolved distinct culinary skills which are unparalleled. The food evolution started in the kitchens of emperors as well as commoners, each making its way to the other end. We carefully blend spices and import herbs and ground which imparts heavenly flavors to our dishes.
                            </p>
                            <a class="btn" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End-->

        <!-- Team Section Start -->
        <section id="team">
            <div class="container">
                <div class="section-header">
                    <h3>Meet Our Chef</h3>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="single-team">
                            <img src="img/team-1.jpg" alt="">
                            <h4>Don Dennis</h4>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-pinterest"></a></li>
                            <li><a href="#" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="single-team">
                            <img src="img/team-2.jpg" alt="">
                            <h4>Mary Tejeda</h4>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>                    
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="single-team">
                            <img src="img/team-3.jpg" alt="">
                            <h4>Scott Williams</h4>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="single-team">
                            <img src="img/team-4.jpg" alt="">
                            <h4>Mary Hall</h4>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section End -->

        <!-- Subscriber Section Start -->
        <section id="subscriber">
            <div class="container">
                <div class="section-header">
                    <h3>Get Latest Food Info</h3>
                </div>

                <div class="row">
                    <div class="col-12">
                        <form class="form-inline">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter Your Email">
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscriber Section end -->

        <!-- Footer Start -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright">
							<p>&copy; Copyright <a href="#">Desi Hattie</a>. All Rights Reserved</p>
							
							<p>Designed By <a href="#">Puran and team</a></p>
                            <a href="logout.php">Logout</a>
						</div>
                    </div>
                    <div class="col-sm-6">
                        <ul class="icon">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-pinterest"></a></li>
                            <li><a href="#" class="fa fa-youtube"></a></li>
                        </ul>
                    </div>
                </div>
                <br>
            </div>
        </footer>
        <!-- Footer end -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery/jquery-migrate.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/easing/easing.min.js"></script>
        <script src="vendor/stickyjs/sticky.js"></script>
        <script src="vendor/superfish/hoverIntent.js"></script>
        <script src="vendor/superfish/superfish.min.js"></script>
        <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
        <script src="vendor/tempusdominus/js/moment.min.js"></script>
        <script src="vendor/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Main Javascript File -->
        <script src="js/main.js"></script>

    </body>
</html>
