<?php 
session_start();

	include("connection.php");
	include("function.php");

    if(isset($_POST['update_roaster']))
    {
        $roaster1 = $_POST['roaster1'];
        $roaster2 = $_POST['roaster2'];
        $roaster3 = $_POST['roaster3'];
        $roaster4 = $_POST['roaster4'];
        $roaster5 = $_POST['roaster5'];
        $roaster6 = $_POST['roaster6'];
        $roaster7 = $_POST['roaster7'];
        $roaster8 = $_POST['roaster8'];
        $roaster9 = $_POST['roaster9'];
        $roaster10 = $_POST['roaster10'];
        $roaster11 = $_POST['roaster11'];
        $roaster12 = $_POST['roaster12'];
        $roaster13 = $_POST['roaster13'];
        $roaster14 = $_POST['roaster14'];
        $roaster15 = $_POST['roaster15'];
        $roaster16 = $_POST['roaster16'];
        $roaster17 = $_POST['roaster17'];
        $roaster18 = $_POST['roaster18'];
        $roaster19 = $_POST['roaster19'];
        $roaster20 = $_POST['roaster20'];
        $roaster21 = $_POST['roaster21'];
        $roaster22 = $_POST['roaster22'];
        $roaster23 = $_POST['roaster23'];
        $roaster24 = $_POST['roaster24'];
        $roaster25 = $_POST['roaster25'];
        $roaster26 = $_POST['roaster26'];
        $roaster27 = $_POST['roaster27'];
        $roaster28 = $_POST['roaster28'];
        $roaster29 = $_POST['roaster29'];
        $roaster30 = $_POST['roaster30'];
        $roaster31 = $_POST['roaster31'];
        $roaster32 = $_POST['roaster32'];
        $roaster33 = $_POST['roaster33'];
        $roaster34 = $_POST['roaster34'];
        $roaster35 = $_POST['roaster35'];

        $query = "update roaster set roaster1 = '".$roaster1."', roaster2 = '".$roaster2."', roaster3 = '".$roaster3."', roaster4 = '".$roaster4."', roaster5 = '".$roaster5."', roaster6 = '".$roaster6."', roaster7 = '".$roaster7."', roaster8 = '".$roaster8."', roaster9 = '".$roaster9."', roaster10 = '".$roaster10."', roaster11 = '".$roaster11."', roaster12 = '".$roaster12."', roaster13 = '".$roaster13."', roaster14 = '".$roaster14."', roaster15 = '".$roaster15."', roaster16 = '".$roaster16."', roaster17 = '".$roaster17."', roaster18 = '".$roaster18."', roaster19 = '".$roaster19."', roaster20 = '".$roaster20."', roaster21 = '".$roaster21."', roaster22 = '".$roaster22."', roaster23 = '".$roaster23."', roaster24 = '".$roaster24."', roaster25 = '".$roaster25."', roaster26 = '".$roaster26."', roaster27 = '".$roaster27."', roaster28 = '".$roaster28."', roaster29 = '".$roaster29."', roaster30 = '".$roaster30."', roaster31 = '".$roaster31."', roaster32 = '".$roaster32."', roaster33 = '".$roaster33."', roaster34 = '".$roaster34."', roaster35 = '".$roaster35."' WHERE 1";
        mysqli_query($con, $query);
        header("Location: roasterUpdate.php");
        die;
    }
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
   <link rel="stylesheet" href="css/style4.css">

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

input[type=text] {
    width: 100%;
    height: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 12px 35px 12px;
    transition: width 0.4s ease-in-out;
}
ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
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
  <li><a class="active" href="roasterUpdate.php">Roaster</a></li>
  <li><a href="adminTable.php">Table</a></li>
  <li><a href="userMail.php">Mail</a></li>
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
</ul>


<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}
?>
   
    <div class="containerRoaster">

        <h3>Enter staff name to the schedule</h3>

        <div class="schedule__container">
            <div class="days__container">
                <span class="corner"></span>
                <div class="day">Sunday</div>
                <div class="day">Monday</div>
                <div class="day">Tuesday</div>
                <div class="day">Wednesday</div>
                <div class="day">Thursday</div>
                <div class="day">Friday</div>
                <div class="day">Saturday</div>
            </div>

        <form method="post">
        <?php 
                    $query = "SELECT * FROM roaster";
                    $result = mysqli_query($con,$query);

         while($row = mysqli_fetch_array($result)){ ?>
            <div class="part__day">
                <span class="time">8am <br> - <br> 12pm</span>
                <div class="task">
                    <input type="text" name="roaster1" placeholder="<?php echo $row['roaster1']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster2" placeholder="<?php echo $row['roaster2']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster3" placeholder="<?php echo $row['roaster3']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster4" placeholder="<?php echo $row['roaster4']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster5" placeholder="<?php echo $row['roaster5']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster6" placeholder="<?php echo $row['roaster6']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster7" placeholder="<?php echo $row['roaster7']; ?>">
                </div>
            </div>
            <div class="part__day">
                <span class="time">12pm <br> - <br> 2pm</span>
                <div class="task">
                    <input type="text" name="roaster8" placeholder="<?php echo $row['roaster8']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster9" placeholder="<?php echo $row['roaster9']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster10" placeholder="<?php echo $row['roaster10']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster11" placeholder="<?php echo $row['roaster11']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster12" placeholder="<?php echo $row['roaster12']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster13" placeholder="<?php echo $row['roaster13']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster14" placeholder="<?php echo $row['roaster14']; ?>">
                </div>
            </div>
            <div class="part__day">
                <span class="time">2pm <br> - <br> 5pm</span>
                <div class="task">
                    <input type="text" name="roaster15" placeholder="<?php echo $row['roaster15']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster16" placeholder="<?php echo $row['roaster16']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster17" placeholder="<?php echo $row['roaster17']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster18" placeholder="<?php echo $row['roaster18']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster19" placeholder="<?php echo $row['roaster19']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster20" placeholder="<?php echo $row['roaster20']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster21" placeholder="<?php echo $row['roaster21']; ?>">
                </div>
            </div>
            <div class="part__day">
                <span class="time">5pm <br> - <br> 8pm</span>
                <div class="task">
                    <input type="text" name="roaster22" placeholder="<?php echo $row['roaster22']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster23" placeholder="<?php echo $row['roaster23']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster24" placeholder="<?php echo $row['roaster24']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster25" placeholder="<?php echo $row['roaster25']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster26" placeholder="<?php echo $row['roaster26']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster27" placeholder="<?php echo $row['roaster27']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster28" placeholder="<?php echo $row['roaster28']; ?>">
                </div>
            </div>
            <div class="part__day">
                <span class="time">8pm <br> - <br> 10pm</span>
                <div class="task">
                    <input type="text" name="roaster29" placeholder="<?php echo $row['roaster29']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster30" placeholder="<?php echo $row['roaster30']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster31" placeholder="<?php echo $row['roaster31']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster32" placeholder="<?php echo $row['roaster32']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster33" placeholder="<?php echo $row['roaster33']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster34" placeholder="<?php echo $row['roaster34']; ?>">
                </div>
                <div class="task">
                    <input type="text" name="roaster35" placeholder="<?php echo $row['roaster35']; ?>">
                </div>
            </div>
            <?php } ?>
        </div>
        <input type="submit" class="button button1" name="update_roaster" value="Update Roaster">
        </form>

        </div>
    </div>

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