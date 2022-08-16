<?php 
session_start();

	include("connection.php");
	include("function.php");

	
    if(isset($_POST["submit"])){
        $str = mysqli_real_escape_string($con, $_POST['str']);
        header("Location: search.php?str=".$str."");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Desi Hattie </title>
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
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

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
                    <li><a href="index.php"><img src="img/logo.png" /></a></li> 
                        <li class="menu-active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About </a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="cart.php">Online Order</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="profile.php">Profile</a></li>

                        <form id="searchBox" method="post">
                            <div class="search-maincontainer">
                                <div class="search-container">
                                <input type="text" name="str" placeholder="Search..." class="search-input">
                                <button type="submit" name="submit" class="search-btn">
                                        <i class="fas fa-search"></i></button> 
                            </div>
                            </div>
                        </form>
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
                        <form action="tableBooking.php" method="post">
                        <div class="form-row">
                            <div class="control-group col-sm-3">
                                <div class="form-group">
                                    <div class="input-group date" id="date" data-target-input="nearest">
                                        <input type="date" name="tableDate" class="form-control datetimepicker-input" value="2022-05-14"
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
                                        <input type="time" name="tableTime" class="form-control datetimepicker-input" value="10:00" min="08:00" max="22:00"placeholder="Time" data-target="#time"/>
                                        <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                            <div class="input-group-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group col-sm-3">
                                <select  name="partySize" class="custom-select">
                                    <option name="partySize"value="1">1 Person</option>
                                    <option name="partySize" value="2">2 People</option>
                                    <option name="partySize" value="3">3 People</option>
                                    <option name="partySize" value="4">4 People</option>
                                    <option name="partySize" value="5">5 People</option>
                                    <option name="partySize" value="6">6 People</option>
                                    <option name="partySize" value="7">7 People</option>
                                    <option name="partySize" value="8">8 People</option>
                                    <option name="partySize" value="9">9 People</option>
                                    <option name="partySize" value="10">10 People</option>
                                </select>
                            </div>
                            <div class="control-group col-sm-3">
                                <button class="btn btn-block btn-book">Book Now</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Reservations Section End -->
        
        <!-- Welcome Section Start -->
        <div id="welcome">
            <div class="container">
                <h3>Welcome to Desi Hattie</h3>
                <p><span class="desi"> Desi Hattie </span> on Oxford street offers counter Indian fare at solid prices. The Indian kebab never disappoints. Additional menu items include samosas, curries, an array of tandoori bread and mango lassi. Online orders are now available. Friendly counter service. When the order is placed, you would receive a text confirmation confirming your order. To view all the dishes in our menu, please click on the order online button and grab our offer</p>
                <a href="#">Book Now</a>
            </div>
        </div>
        <!-- Welcome Section End -->

        <!-- About Section Start-->
        <section id="about">
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
                                <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-pinterest"></a></li>
                            <li><a href="#" class="fa fa-youtube"></a></li>
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

        <?php

                    $que = "SELECT * FROM productdetails";
                    $select = mysqli_query($con,$que);
        ?>

        <!-- Menu Section Start -->
        <section id="food-menuIndex">
            <div class="container">
                <header class="section-header">
                    <h3>Delicious Food Menu</h3>
                </header>
                <div class="row">

                	<?php while($row = mysqli_fetch_assoc($select)){ ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-menu">
                            <img class="img-fluid" src="uploaded_img/<?php echo $row['image']; ?>" />
                            	<div>$<?php echo $row['price']; ?></div>
                            	<h4><?php echo $row['name']; ?></h4>  
                        </div>
                        <div class="rating-wrap">
                    <div class="center">
                        <fieldset class="rating">
                                <input type="radio" id="field1_star5" name="rating1" value="5" /><label class = "full" for="field1_star5"></label>
                                
                                <input type="radio" id="field1_star4" name="rating1" value="4" /><label class = "full" for="field1_star4"></label>
                                
                                <input type="radio" id="field1_star3" name="rating1" value="3" /><label class = "full" for="field1_star3"></label>
                                
                                <input type="radio" id="field1_star2" name="rating1" value="2" /><label class = "full" for="field1_star2"></label>
                                
                                <input type="radio" id="field1_star1" name="rating1" value="1" /><label class = "full" for="field1_star1"></label>
                                
                            </fieldset>

                        </div>

                    </div>
                    </div>
                    <?php } ?>
            	</div>
            </div>
        </section>
        <!-- Menu Section End-->

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
                            <h4 class="cheffName">Don Dennis</h4>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                            <div class="ratingppl-wrap">
                <fieldset class="ratingppl">
    <input type="radio" id="star5_1" name="rating_1" value="5" /><label class = "full" for="star5_1" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half_1" name="rating_1" value="4 and a half" /><label class="half" for="star4half_1" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4_1" name="rating_1" value="4" /><label class = "full" for="star4_1" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half_1" name="rating_1" value="3 and a half" /><label class="half" for="star3half_1" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3_1" name="rating_1" value="3" /><label class = "full" for="star3_1" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half_1" name="rating_1" value="2 and a half" /><label class="half" for="star2half_1" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2_1" name="rating_1" value="2" /><label class = "full" for="star2_1" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half_1" name="rating_1" value="1 and a half" /><label class="half" for="star1half_1" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1_1" name="rating_1" value="1" /><label class = "full" for="star1_1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf_1" name="rating_1" value="half" /><label class="half" for="starhalf_1" title="Sucks big time - 0.5 stars"></label>
</fieldset>
        </div>
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
                            <fieldset class="ratingppl">
    <input type="radio" id="star5_2" name="rating_2" value="5" /><label class = "full" for="star5_2" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half_2" name="rating_2" value="4 and a half" /><label class="half" for="star4half_2" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4_2" name="rating_2" value="4" /><label class = "full" for="star4_2" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half_2" name="rating_2" value="3 and a half" /><label class="half" for="star3half_2" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3_2" name="rating_2" value="3" /><label class = "full" for="star3_2" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half_2" name="rating_2" value="2 and a half" /><label class="half" for="star2half_2" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2_2" name="rating_2" value="2" /><label class = "full" for="star2_2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half_2" name="rating_2" value="1 and a half" /><label class="half" for="star1half_2" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1_2" name="rating_2" value="1" /><label class = "full" for="star1_2" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf_2" name="rating_2" value="half" /><label class="half" for="starhalf_2" title="Sucks big time - 0.5 stars"></label>
</fieldset>
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
                            <fieldset class="ratingppl">
    <input type="radio" id="star5_3" name="rating_3" value="5" /><label class = "full" for="star5_3" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half_3" name="rating_3" value="4 and a half" /><label class="half" for="star4half_3" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4_3" name="rating_3" value="4" /><label class = "full" for="star4_3" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half_3" name="rating_3" value="3 and a half" /><label class="half" for="star3half_3" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3_3" name="rating_3" value="3" /><label class = "full" for="star3_3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half_3" name="rating_3" value="2 and a half" /><label class="half" for="star2half_3" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2_3" name="rating_3" value="2" /><label class = "full" for="star2_3" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half_3" name="rating_3" value="1 and a half" /><label class="half" for="star1half_3" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1_3" name="rating_3" value="1" /><label class = "full" for="star1_3" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf_3" name="rating_3" value="half" /><label class="half" for="starhalf_3" title="Sucks big time - 0.5 stars"></label>
</fieldset>
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
                            <fieldset class="ratingppl">
    <input type="radio" id="star5_4" name="rating_4" value="5" /><label class = "full" for="star5_4" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half_4" name="rating_4" value="4 and a half" /><label class="half" for="star4half_4" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4_4" name="rating_4" value="4" /><label class = "full" for="star4_4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half_4" name="rating_4" value="3 and a half" /><label class="half" for="star3half_4" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3_4" name="rating_4" value="3" /><label class = "full" for="star3_4" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half_4" name="rating_4" value="2 and a half" /><label class="half" for="star2half_4" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2_4" name="rating_4" value="2" /><label class = "full" for="star2_4" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half_4" name="rating_4" value="1 and a half" /><label class="half" for="star1half_4" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1_4" name="rating_4" value="1" /><label class = "full" for="star1_4" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf_4" name="rating_4" value="half" /><label class="half" for="starhalf_4" title="Sucks big time - 0.5 stars"></label>
</fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section End -->

        <!-- Contact Section Start -->
        <section id="contact">
            <div class="container">
                <div class="section-header">
                    <h3>Contact Us</h3>
                </div>
                
                <div class="row contact-detail">
                    <div class="col-md-6">
                        <div class="contact-col-1">
                            <div class="contact-hours">
                                <h4>Opening Hours</h4>
                                <p>Saturday-Tuesday: 08.00am to 10.00pm</p>
                                <p>Wednesday-Thursday: 08.00am to 03.00pm</p>
                                <p>Friday: 03.00pm to 09.00pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-col-2">
                            <div class="contact-info">
                                <h4>Contact Info</h4>
                                <p>120 Liverpool street , Strathfield, NSW</p>
                                <p><a href="tel:+123-456-789">+123-456-789</a></p>
                                <p><a href="mailto:name@domainname.com">DesiHattie@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12623.52751148822!2d-122.47260557388145!3d37.72245039905841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s220%2C+San+Francisco%2C+California%2C+USA!5e0!3m2!1sen!2sbd!4v1555690883913!5m2!1sen!2sbd" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-form">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" required="required" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" required="required" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" required="required" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message" required="required" ></textarea>
                                </div>
                                <div><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

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
        <script src="rating.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
