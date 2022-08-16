<?php 
session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_login($con);

    
?>


<?php

$user_id = $user_data['user_id'];
$name = $user_data['user_name'];
$orderDet = $_POST['orderDet'];
$totalAmt = $_POST['amount'];
$email = $_POST['Uemail'];
$address = $_POST['Uaddress'];
$city = $_POST['Ucity'];
$state = $_POST['Ustate'];
$phoneNum = $_POST['contact'];
$zip = $_POST['Uzip'];
$delivery = $_POST['delivery'];


if(!empty($name) && !empty($email) && !empty($address) && !empty($phoneNum) && !empty($delivery)  && !empty($city) && !empty($state) && !empty($zip)){

    $query = "INSERT INTO orderdetails(userid, name, orderdet, totalamt, email, phoneNum, delivery, address, city, state, zip) VALUES ('$user_id','$name','$orderDet','$totalAmt','$email','$phoneNum','$delivery','$address','$city','$state','$zip')";
    $result = mysqli_query($con, $query);
     if($result){
        echo '<script>alert("Congratulations!! Your order has placed. Order More food !!")</script>';
        echo '<script>window.location="invoice.php"</script>';
    }else{
        echo '<script>alert("Your order hasnot been placed. Please try again!!")</script>';
        echo '<script>window.location="cart.php"</script>';  
    }
}else{
 echo '<script>alert("Please fill all the details!!")</script>';
 echo '<script>window.location="cart.php"</script>';    
}

?>
