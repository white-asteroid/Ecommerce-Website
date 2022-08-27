<?php
    include 'includes\common.php';
    
        if(!isset($_SESSION['email']))
        {
            header('location:mainphp.php');
        }
    
    $user_id=$_SESSION['user_id'];
    $query = "UPDATE user_items SET status='Confirmed' WHERE user_id='".$user_id."' and status='Added to cart'";
    $result= mysqli_query($con, $query) or die(mysqli_error($con));
    $num= mysqli_affected_rows($con);
    //echo $num.' is affected';
    
    
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title> SUCCESS </title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 text-success text-center" style="padding: 20px;border-bottom: 2px solid #00ffcc ; margin-top: 20px ">
                    <p>Thank you for ordering from E-buy . Your order shall be delivered to you shortly</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 text-center text-success" style="padding: 20px;">
                    <p>Order for more electronic items. <a href="products.php" style="text-decoration: none"> Click here </a></p>
                </div>
            </div>
        </div>
    </body>
</html>