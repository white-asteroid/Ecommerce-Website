<?php

$score= $_GET["score"];
$uid=$_SESSION['user_id'];
$sq1="select * from gamedata where ug_id = '$uid' AND g_id = 1 ";


$sqc1= mysqli_query($con, $sq1);
$sr= mysqli_fetch_array($sqc1);
$val = mysqli_num_rows($sqc1);

if($val)
{
    $ns=$sr[2];
    if ($ns<$score)
    {
        $uq = "update gamedata SET 'score' = '".$score."' ";
        $uqc = mysqli_query($con, $uq);
        
    }
}

else
{
    $ii="INSERT INTO `gamedata`(`g_id`, `ug_id`, `score`) VALUES (1,'".$uid."'],'".$score."')";
    $iiq= mysqli_query($con, $iiq);
}

header('Location: 2048.php');


   

