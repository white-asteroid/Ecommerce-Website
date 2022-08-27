<?php

include 'includes\common.php';

    if(!isset($_SESSION['email']))
    {
        header('location:mainphp.php');
    }

$user_id=$_SESSION['user_id'];
$pass=$_POST['opass'];
$pass= md5($pass);
$erm="";
$query="select email from user where user_id='".$user_id."'AND password = '".$pass."' ";
$qc= mysqli_query($con, $query) or die(mysqli_error($con));
$qr=mysqli_fetch_array($qc);
//echo $qr['email'];
$num= mysqli_affected_rows($con);
//echo $num." is value from select<br>";
if($num!=1)
{
  //  echo '<strong>WRONG PASSWORD</strong>';
    //echo 'Redirecting... ';
    header('location:settings.php?erm=WRONG PASSWORD');
    
}
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];
$nu= strcmp($npass,$cpass);
if($nu!=0)
{
    
    header('location:settings.php?erm=New password mismatch... Try Again!!');
}
$npass=md5($npass);
$uq="update user set password='".$npass."' where user_id='".$user_id."' AND password = '".$pass."' ";
$uqc= mysqli_query($con, $uq) or die(mysqli_error($con));
$numu= mysqli_affected_rows($con);
if($num)
{
    header('location:products.php');
}
//echo $numu;





