<?php 
session_start();

	include("connection.php");
	include("function.php");


    if (isset($_POST["addtocart"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'id' => $_GET["id"],
                    'name' => $_POST["hidden_name"],
                    'price' => $_POST["hidden_price"],
                    'quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="menu.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="menu.php"</script>';
            }
        }else{
            $item_array = array(
                'id' => $_GET["id"],
                'name' => $_POST["hidden_name"],
                'price' => $_POST["hidden_price"],
                'quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="menu.php"</script>';
                }
            }
        }
    }

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

        <style>
            #food-menu .single-menu span {
            position: absolute;
            width: 65px;
            height: 45px;
            top: 0;
            right: 0;
            padding: 10px 0;
            font-size: 18px;
            font-weight: 600;
            background: rgba(188, 155, 93, .8);
            border-radius: 0 6px 0 6px;
            z-index: 1;
            }

            #food-menu .single-menu span a i:hover{
                background: 
            }

            .lock:hover .fa-heart-o,
            .lock .fa-heart {
            display: none;
            }
            .lock:hover .fa-heart {
            display: inline;
            }
            .card-filter{
                width: 180px;
                position: flex;
                text-align: start;
                position: fixed;
                left: 10px;
                border: 1px solid black;
                
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
                        <li class="menu-active"><a href="menu.php">Menu</a></li>
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

        <!-- Menu Section Start -->
        <section id="food-menu">
            <div class="container">
                <header class="section-header">
                    <h3>delicious Food Menu</h3>
                </header>
                <form action="" method="GET">
                    <div class="card-filter">
                        <div class="card-header">
                            <h5>Filter 
                                <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>Category List</h6>
                            <hr>
                            <?php
                                $brand_query = "SELECT * FROM productcategory";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['brands']))
                                        {
                                            $checked = $_GET['brands'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="brands[]" value="<?= $brandlist['id']; ?>" 
                                                    <?php if(in_array($brandlist['id'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $brandlist['name']; ?>
                                            </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No Brands Found";
                                }
                            ?>
                        </div>
                    </div>
                </form>
                <div>    
                <div class="row">
                <?php
                            if(isset($_GET['brands']))
                            {
                                $branchecked = [];
                                $branchecked = $_GET['brands'];
                                foreach($branchecked as $rowbrand)
                                {
                                    // echo $rowbrand;
                                    $products = "SELECT * FROM productdetails WHERE category_id IN ($rowbrand)";
                                    $products_run = mysqli_query($con, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $row) :
                                            ?>
                                                <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-menu">
                            <form method="post" action="menu.php?id=<?=$row['id'] ?>">
                                <img class="img-fluid" src="uploaded_img/<?php echo $row['image']; ?>" />
                                <div>$<?php echo $row['price']; ?></div>
                                <h4><?php echo $row['name']; ?></h4>   
                            <input type="hidden" name="hidden_name" value="<?= $row['name'] ?>">
                            <input type="hidden" name="hidden_price" value="<?= $row['price'] ?>">
                            <span><a href="profile.php?productid=<?=$row['id'] ?>" class="lock">
                                    <i class="fa fa-heart-o" style="font-size:24px;color:red"></i>
                                    <i class="fa fa-heart" style="font-size:24px;color:red"></i>
                                    </a></span>
                            <p><input type="number" name="quantity" value="1" class="form-control" min="1" max="10"></p>
                            <input type="submit" class="button" name="addtocart" value="Order Now">
                            </form>
                        </div>
                    </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                            else
                            {
                                $products = "SELECT * FROM productdetails";
                                $products_run = mysqli_query($con, $products);
                                if(mysqli_num_rows($products_run) > 0)
                                {
                                    foreach($products_run as $row) :
                                        ?>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-menu">
                            <form method="post" action="menu.php?id=<?=$row['id'] ?>">
                                <img class="img-fluid" src="uploaded_img/<?php echo $row['image']; ?>" />
                                <div>$<?php echo $row['price']; ?></div>
                                <h4><?php echo $row['name']; ?></h4>   
                            <input type="hidden" name="hidden_name" value="<?= $row['name'] ?>">
                            <input type="hidden" name="hidden_price" value="<?= $row['price'] ?>">
                            <span><a href="profile.php?productid=<?=$row['id'] ?>" class="lock">
                                    <i class="fa fa-heart-o" style="font-size:24px;color:red"></i>
                                    <i class="fa fa-heart" style="font-size:24px;color:red"></i>
                                    </a></span>
                            <p><input type="number" name="quantity" value="1" class="form-control" min="1" max="10"></p>
                            <input type="submit" class="button" name="addtocart" value="Order Now">
                            </form>
                        </div>
                    </div>
                                        <?php
                                    endforeach;
                                }
                                else
                                {
                                    echo "No Items Found";
                                }
                            }
                        ?>
            	</div>
            </div>
        </section>
        <!-- Menu Section End-->

        <!-- Cart Section Start -->
        <section id="cart">
            <div class="container">
                <header class="section-header">
                    <h3>Cart</h3>
                </header>
                <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["name"]; ?></td>
                            <td><?php echo $value["quantity"]; ?></td>
                            <td>$ <?php echo $value["price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["quantity"] * $value["price"], 2); ?></td>
                            <td><a href="menu.php?action=delete&id=<?php echo $value["id"]; ?>"><span
                                        class="text-danger">X</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["quantity"] * $value["price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <th><a href="cart.php?total=<?php echo $total; ?>">Checkout</a></th>
                        </tr>

                        <?php


                    }
                ?>
            </table>
        </div>
            </div>
        </section>
        <!-- Cart Section End -->
            
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
