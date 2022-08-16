<?php 
session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_adminlogin($con);
   

    $query = "SELECT * FROM orderdetails";
    $result = mysqli_query($con,$query);

    echo $result->num_rows;
?>
