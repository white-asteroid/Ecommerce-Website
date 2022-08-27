<?php
include 'common.php';
function check_if_added_tocart($item_id)
{
    
    $user_id = $_SESSION['user_id'];
    include 'common.php';
    
    $check="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id'";
    $check_r= mysqli_query($con,$check);
    $num= mysqli_num_rows($check_r);
    
if($num)
    {
        return 1;
    }
    else
    {
        return 0;
    }
    
}
?>
