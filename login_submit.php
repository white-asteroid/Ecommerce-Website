<?php include 'includes\common.php';
if(isset($_SESSION['email']))
   {
       header('location:products.php');
   }
$em= $_POST['email'];
$em=mysqli_real_escape_string($con,$em);
$pa=$_POST['pass'];
$pa=mysqli_real_escape_string($con,$pa);
$pa= md5($pa);
$sq="select * from user where email = '$em' AND password='$pa' " or die(mysqli_error($con));


$sqc= mysqli_query($con, $sq) or die(mysqli_error($conn));
$sr= mysqli_fetch_array($sqc);


$val = mysqli_num_rows($sqc);

if ($val !=0){
    /*$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : .";
                $headers = "From: password@studentstutorial.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);*/
     $_SESSION['email']=$sr['email'];
     $_SESSION['user_id']=$sr['user_id'];
     header('location:products.php');
}

else
{
    header('location:login.php');
    
    
}
?>
    
    
