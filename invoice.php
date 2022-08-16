<?php 
session_start();

   include("connection.php");
   include("function.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesiHattie</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #BC9B5D;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Desi Hattie</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">120 Liverpool street , Strathfield, NSW</p>
                        <p class="text-white">DesiHattie@gmail.com</p>
                        <p class="text-white">+123-456-789</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
        <?php $select = mysqli_query($con, "SELECT * FROM orderdetails ORDER BY orderTime DESC LIMIT 1"); ?>
            <div class="row">
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
                <div class="col-6">
                    <h2 class="heading">Invoice No.: <?php echo $row['orderid']; ?></h2>
                    <p class="sub-heading">Tracking No. <?php echo $row['userid']; ?> </p>
                    <p class="sub-heading">Order Date: <?php echo $row['orderTime']; ?> </p>
                    <p class="sub-heading">Email Address: <?php echo $row['email']; ?> </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name:  <b><?php echo $row['name']; ?></b></p>
                    <p class="sub-heading">Address:  <b><?php echo $row['address']; ?></b></p>
                    <p class="sub-heading">Phone Number:  <b><?php echo $row['phoneNum']; ?></b></p>
                    <p class="sub-heading">City,State,Pincode:  <b><?php echo $row['city']; ?>,<?php echo $row['state']; ?>,<?php echo $row['zip']; ?></b></p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product & Quantity</th>
                        <th class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['orderdet']; ?></td>
                        <td><?php echo $row['totalamt']; ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: Paid</h3>
            <h3 class="heading">Payment Mode: Card</h3>
        </div>
        <?php } ?>

        <div class="body-section">
            <p>&copy; Copyright Desi Hattie. All Rights Reserved 
                <a href="http://localhost/Desihattie/index.php" class="float-right">www.desihattie.com</a>
            </p>
        </div>      
    </div>      

</body>
</html>
