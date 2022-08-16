<?php 
session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_login($con);

    if(isset($_POST['update']))
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $user_phone = $_POST['user_phone'];
        $user_address = $_POST['user_address'];
        $user_id = $user_data['user_id'];


        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            if($password == $repassword){
            $query = "update users set user_name = '".$user_name."', user_email = '".$user_email."', password = '".$password."', user_phone = '".$user_phone."', user_address= '".$user_address."' where user_id = '".$user_id."'";
            mysqli_query($con, $query);

            header("Location: profile.php");
            die;
        }else{
            echo "Password doesnt match!";
        }
        }else
        {
            echo "Please enter valid information!";
        }
    }


    if(isset($_GET['remove'])){
        $id = $_GET['remove'];
        mysqli_query($con, "DELETE FROM wishlist WHERE id = $id");
        header('location:profile.php');
     };

?>


<?php


if(isset($_GET['productid'])){
    $productid = $_GET['productid'];

    $query = "SELECT * FROM productdetails where id = $productid";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result);


    $query1 = "insert into wishlist (product_id, product_name, price) values ('".$productid."', '".$row['name']."', '".$row['price']."')";
    if(mysqli_query($con, $query1)){
        header("Location: profile.php");
        die;
    }
 };

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- Libraries CSS Files -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="vendor/animate/animate.min.css" rel="stylesheet">
        <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="vendor/tempusdominus/css/tempusdominus-bootstrapp-4.min.css" rel="stylesheet" />

        <!-- Main Stylesheet File -->
        <link href="css/style1.css" rel="stylesheet">

        <style>
            .btn{
                display: block;
                width: 100%;
                cursor: pointer;
                border-radius: .5rem;
                font-size: 1.1rem;
                padding:1rem 3rem;
                text-align: center;
            }

.btn:hover{
   background: var(--black);
}

        </style>
        
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
                        <li><a href="about.php">About</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="cart.php">Online Order</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a class="menu-active" href="profile.php">Profile</a></li>
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

        <!-- Cart Section Start -->
        <section id="cart">
            <div class="container">
                <header class="section-header">
                    <h3>Wishlist</h3>
                </header>
                <h3 class="title2">Wishlist Products</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Price</th>
                <th width="13%">Date and Time</th>
                <th width="10%"></th>
            </tr>

            <?php
            $query = "SELECT * FROM wishlist";
            $result = mysqli_query($con,$query);

            while($row = mysqli_fetch_array($result)){ ?>

                        <tr>
                            <td><?php echo $row["product_name"]; ?></td>
                            <td><?php echo $row["price"]; ?></td>
                            <td><?php echo $row["time"]; ?></td>
                            <td>
                            <a href="profile.php?remove=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> Remove </a>
                            </td>
                        </tr>
            <?php } ?>
            </table>
        </div>
            </div>
        </section>
        <!-- Cart Section End -->

        <section id="login">
            <div class="container">
                <div class="section-header">
                    <h3>Update Profile</h3>
                </div>
                <div class="row">
                    <?php 
                    $u_name = $user_data['user_name'];
                    $u_email = $user_data['user_email'];
                    $u_phone = $user_data['user_phone'];
                    $u_address = $user_data['user_address'];
                    ?>
                    <div class="col-md-6">
                        <div class="login-col-1">
                            <div class="login-form">
                                <form method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="user_name" placeholder="<?= $u_name ?>" required="required" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" name="user_email" placeholder="<?= $u_email ?>" required="required" />
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="password" class="form-control" name="password" placeholder="New Password" required="required" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="password" class="form-control" name="repassword" placeholder="Repeat New Password" required="required" />
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input class="form-control" name="user_phone" placeholder="<?= $u_phone ?>" required="required" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-control" name="user_address" placeholder="<?= $u_address ?>" required="required" />
                                        </div>
                                    </div>

                                    <div><button type="register" name="update">Update</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
