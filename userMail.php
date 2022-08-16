<?php 
session_start();

   include("connection.php");
   include("function.php");

   $user_data = check_adminlogin($con);



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">
   <link href="vendor/Trumbowyg/dist/ui/trumbowyg.min.css?ver=0.6" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="vendor/Trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.css?ver=0.6">

</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  html{
    font-size: 12px;
  }
body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  top: 0;
  font-size: 15px;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li i {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}
ul.topnav li i:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #04AA6D;}
ul.topnav li i.active {background-color: #04AA6D;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}

#dropdownID {
   width: 285px;
   padding: 28px;
   border: 1px solid #ccc;
   box-shadow: 0 2px 10px rgba(0,0,0,0.2);
   position: absolute;
   right: 100px;
   top: 45px;
   display: none;
}

#dropdownID span{
   display: block;
   margin-bottom: 5px; 
   position: relative;
}


#dropdownID .notName {
   font-weight: bold;
   text-align: center;
   font-size: 18px;
   position: relative;
   display: inline-block;
}

#dropdropdown-wrapper{
   display: inline-block;
}

#dropdown-wrapper:hover 
#dropdownID{
   display: block;
}


</style>
</head>
<body>

<ul class="topnav">
   <?php $sql = "SELECT * FROM orderdetails";
        $res = mysqli_query($con, $sql); ?>
  <li><a href="adminIndex.php">Home</a></li>
  <li><a href="viewOrders.php">Order</a></li>
  <li><a href="roasterUpdate.php">Roaster</a></li>
  <li><a href="adminTable.php">Table</a></li>
  <li><a class="active" href="userMail.php">Mail</a></li>
  <li class="right"><a href="logout.php">Logout</a></li>
  <div id="dropdown-wrapper">
  <li class="right"><i class="fa fa-bell" aria-hidden="true" id="noti_number"> 5</i>
  <div class="dropdown" id="dropdownID">
          <?php
          if (mysqli_num_rows($res) > 0) {
            foreach ($res as $item) {
          ?>
            <span class="notName"><?php echo $item["name"]; ?></span>
            <span class="notDet"><?php echo $item["orderdet"]; ?></span>
          <?php }
          } ?>
        </div>
  </div>
</li>
</ul>



<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action= "mail.php"  method="post" enctype="multipart/form-data">
         <h3>Send Mail to All Customers</h3>
         <input type="text" placeholder="enter subject" name="subject" class="box">
         <div class="form-group">
            <textarea id="message" name="body" class="form-control" placeholder="Your Message" rows="5" required></textarea>
        </div>
         <input type="submit" class="btn" name="send_mail" value="send mail">
      </form>

   </div>


</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script src="vendor/Trumbowyg/dist/trumbowyg.min.js" type="text/javascript"></script>
        <script src="vendor/Trumbowyg/dist/plugins/fontsize/trumbowyg.fontsize.min.js"></script>
        <script src="vendor/Trumbowyg/dist/plugins/preformatted/trumbowyg.preformatted.js"></script>
        <script src="vendor/Trumbowyg/dist/plugins/colors/trumbowyg.colors.js"></script>
        <script src="main.js" type="text/javascript"></script>
        <script>

                                $('#message')
                                        .trumbowyg({
                                            btns: [
                                                ['highlight', 'viewHTML', 'foreColor', 'backColor', 'undo', 'redo'],
                                                ['formatting', 'strong', 'em', 'del'],
                                                ['link', 'insertImage', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                                                ['unorderedList', 'orderedList', 'horizontalRule', 'fontsize', 'fullscreen']
                                            ],
                                            autogrowOnEnter: true

                                        });
        </script>

<script type="text/javascript">
   function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("noti_number").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "noOfOrders.php", true);
  xhttp.send();
}
loadDoc();
</script>
</body>
</html>


