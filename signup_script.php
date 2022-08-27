
<?php
include 'includes\common.php';
if(isset($_SESSION['email']))
   {
      header('location:products.php');
   }
$em= mysqli_real_escape_string($con, $_POST['email']);
$em1=$_POST['email'];
$nm=mysqli_real_escape_string($con, $_POST['name']);
$city=mysqli_real_escape_string($con, $_POST['city']);
$pa=mysqli_real_escape_string($con, $_POST['pass']);
$pa= md5($pa);
$add=mysqli_real_escape_string($con, $_POST['add']);
//$pa= md5($pa);
$phn=mysqli_real_escape_string($con, $_POST['phone']);
$pat="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/";
//echo preg_match($pat,$em1);
//echo " is result of pat";
if(!preg_match($pat,$em1))
{
    $err="";
    header('location:signup.php?err=e');
}
else{

$sq1="select email from user where email = '$em'" or die(mysqli_error($con));


$sqc1= mysqli_query($con, $sq1) or die(mysqli_error($con));
$sr= mysqli_fetch_array($sqc1);



$val = mysqli_num_rows($sqc1);

if($val)
{
    /*USER ID ALREADY EXISTS');
window.location.href='login.php';
*/
    
    $msg="";
   header('location:mainphp.php?msg=Already a user ! Log in');
    
    
}
else
{

    
    $sq="INSERT INTO `user`(`user_id`, `name`, `email`, `password`, `phone`, `City`, `Address`) VALUES (NULL,'".$nm."','".$em."','".$pa."','".$phn."','".$city."','".$add."')" or die(mysqli_error($con));
    $sqc= mysqli_query($con, $sq);
    $af= mysqli_affected_rows($con);
    $_SESSION['user_id']= mysqli_insert_id($con);
    $_SESSION['email']=$em;
   
   header('location:products.php');
    
    
    
}

}

