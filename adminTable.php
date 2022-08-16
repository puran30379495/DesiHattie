<?php 
session_start();

   include("connection.php");
   include("function.php");

   $user_data = check_adminlogin($con);

   if(isset($_POST['add_table'])){

   $table_name = $_POST['table_name'];
   $num_chair = $_POST['num_chair'];

   if(empty($table_name) || empty($num_chair)){
      $message[] = 'please fill out all';
   }else{
      $insert = "insert into addtable (tableName, numOfChairs) VALUES('".$table_name."','".$num_chair."')";
      $upload = mysqli_query($con,$insert);
      if($upload){
         $message[] = 'new table added successfully';
      }else{
         $message[] = 'could not add the table';
      }
   }

};


if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM addtable WHERE id = $id");
    header('location:adminTable.php');
 };

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

.product-display{
   margin:2rem 0;
   display: flex;
   align-items: center;
   justify-content: center;
}

.product-display .product-display-table{
   width: 60%;
   text-align: center;
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
  <li><a class="active" href="adminTable.php">Table</a></li>
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

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="enter table name" name="table_name" class="box">
         <input type="number" placeholder="enter no. of chairs" name="num_chair" class="box">
         <input type="submit" class="btn" name="add_table" value="add table">
      </form>

   </div>
</div>

<?php

   $select = mysqli_query($con, "SELECT * FROM addtable");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Table Name</th>
            <th>No. of chairs</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['tableName']; ?></td>
            <td><?php echo $row['numOfChairs']; ?></td>
            <td>
               <a href="adminTable.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

   <?php

   $select = mysqli_query($con, "SELECT * FROM tableorder");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Date</th>
            <th>Time</th>
            <th>Partysize</th>
            <th>Table</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone_num']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['partySize']; ?></td>
            <td><?php echo $row['tableName']; ?></td>
         </tr>
      <?php } ?>
      </table>
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


