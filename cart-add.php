<?php

    if(!isset($_SESSION['email']))
    {
        header('location:mainphp.php');
    }


include 'includes\common.php';
$user_id=$_SESSION['user_id'];
$item_id=$_GET['id'];

$query= "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')" or die (mysqli_errno($con));
$ss= mysqli_query($con, $query);
if(mysqli_affected_rows($con))
{
    header('location:products.php');
}
else{
    echo "Error occured";
}